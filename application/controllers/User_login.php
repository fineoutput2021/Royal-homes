<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class User_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/login_model");
        $this->load->model("admin/base_model");
        // $this->load->library('facebook');
    }



    //-----to download any library use php composer.phar
    ///-------user_register-----------------
    public function user_register()
    {
        // echo "hi";
        // exit;
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('fname', 'fname', 'required|xss_clean|trim');
            $this->form_validation->set_rules('lname', 'lname', 'required|xss_clean|trim');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean|trim');
            $this->form_validation->set_rules('phone', 'phone', 'required|xss_clean|trim');
            $this->form_validation->set_rules('password', 'password', 'required|xss_clean|trim');
            $this->form_validation->set_rules('confirm_password', 'confirm_password', 'required|matches[password]|xss_clean|trim');
            $this->form_validation->set_rules('g-recaptcha-response', 'g-recaptcha-response', 'required|xss_clean|trim');

            if ($this->form_validation->run()== true) {
                // echo "hi";
                // exit;
                $fname=$this->input->post('fname');
                $lname=$this->input->post('lname');
                $email=$this->input->post('email');
                $phone=$this->input->post('phone');
                $password=$this->input->post('password');
                $confirm_password=$this->input->post('confirm_password');
                $captcha_response=$this->input->post('g-recaptcha-response');

                $ip = $this->input->ip_address();
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d H:i:s");
                $addedby=$this->session->userdata('admin_id');
                if (empty($this->session->set_userdata('user_data'))) {
                    if ($captcha_response !="") {

                  ///------- Recaptcha check ------------
                        $check = array(
                          'secret'		=>	CAPTCHA_KEY_SERVER,
                          'response'		=>	$captcha_response
                        );

                        $startProcess = curl_init();

                        curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

                        curl_setopt($startProcess, CURLOPT_POST, true);

                        curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

                        curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

                        curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

                        $receiveData = curl_exec($startProcess);

                        $finalResponse = json_decode($receiveData, true);

                        if ($finalResponse['success']) {
                            $this->db->select('*');
                            $this->db->from('tbl_users');
                            $this->db->where('email', $email);
                            $this->db->where('is_active', 1);
                            $this->db->where('is_google', 0);
                            $this->db->where('is_facebook', 0);
                            $user_data= $this->db->get()->row();

                            if (empty($user_data)) {
                                $data_insert = array('fname'=>$fname,
                    'lname'=>$lname,
                    'email'=>$email,
                    'phone'=>$phone,
                    'password'=>md5($password),
                    'ip' =>$ip,
                    'added_by' =>$addedby,
                    'is_active' =>1,
                    'date'=>$cur_date
                    );

                                $last_id=$this->base_model->insert_table("tbl_users", $data_insert, 1) ;
                                $user_name = $fname." ".$lname;
                                if (!empty($last_id)) {

                                  //------send register email-------------

                                    $config = array(
                                      'protocol' => 'smtp',
                                      'smtp_host' => SMTP_HOST,
                                      'smtp_port' => SMTP_PORT,
                                      'smtp_user' => USER_NAME, // change it to yours
                                      'smtp_pass' => PASSWORD, // change it to yours
                                      'mailtype' => 'html',
                                      'charset' => 'iso-8859-1',
                                      'wordwrap' => true
                                           );
                                    $to=$email;
                                    $data['name'] = $user_name;

                                    $message = 	$this->load->view('email/newaccount', $data, true);

                                    $this->load->library('email', $config);
                                    $this->email->set_newline("");
                                    $this->email->from(EMAIL); // change it to yours
                                  $this->email->to($to);// change it to yours
                                  $this->email->subject('New account created');
                                    $this->email->message($message);
                                    if ($this->email->send()) {
                                        // echo 'Email sent.';
                                    } else {
                                        // show_error($this->email->print_debugger());
                                    }


                                    //-------set session for login-------
                                    $this->session->set_userdata('user_data', 1);
                                    $this->session->set_userdata('user_name', $user_name);
                                    $this->session->set_userdata('user_id', $last_id);

                                    //insert cart data into cart table---------
                                    $cart_data = $this->session->userdata('cart_data');
                                    // print_r($cart_data);
                                    // exit;
                                    if (!empty($cart_data)) {
                                        foreach ($cart_data as $value) {
                                            $this->db->select('*');
                                            $this->db->from('tbl_cart');
                                            $this->db->where('user_id', $last_id);
                                            $this->db->where('product_id', $value['product_id']);
                                            $cartInfo= $this->db->get()->row();
                                            if (empty($cartInfo)) {
                                                //---------inventory check------------
                                                $this->db->select('*');
                                                $this->db->from('tbl_products');
                                                $this->db->where('id', $value['product_id']);
                                                $pro_data= $this->db->get()->row();
                                                if (!empty($pro_data)) {
                                                    if ($pro_data->inventory>=$value['quantity']) {
                                                        $data_insert = array('user_id'=> $user_data->id,
                                              'product_id'=>$value['product_id'],
                                              'quantity'=>$value['quantity'],
                                              'ip' =>$ip,
                                              'date'=>$cur_date
                                              );

                                                        $last_id=$this->base_model->insert_table("tbl_cart", $data_insert, 1) ;
                                                    }
                                                }///end check innventory
                                            }
                                        }
                                    }
                                    $this->session->unset_userdata('cart_data');

                                    $this->session->set_flashdata('smessage', 'Successful Registered');
                                    if (empty($this->session->userdata('guest_data'))) {
                                        redirect($_SERVER['HTTP_REFERER']);
                                    } else {
                                        $this->session->unset_userdata('guest_data');
                                        redirect("Home/View_cart", "refresh");
                                    }
                                } else {
                                    $this->session->set_flashdata('emessage', 'Some error occured');
                                    redirect($_SERVER['HTTP_REFERER']);
                                }
                            } else {
                                $this->session->set_flashdata('emessage', 'User is already registered');
                                redirect($_SERVER['HTTP_REFERER']);
                            }
                        } else {
                            $this->session->set_flashdata('emessage', 'Validation Fail Try Again');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    } else {
                        $this->session->set_flashdata('emessage', 'Validation Fail Try Again');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    redirect("/", "refresh");
                }
            } else {
                $this->session->set_flashdata('emessage', validation_errors());
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            $this->session->set_flashdata('emessage', 'Please insert some data, No data available');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    //---------user login---------
    public function user_login()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('email', 'email', 'required|xss_clean|trim');
            $this->form_validation->set_rules('password', 'password', 'required|xss_clean|trim');
            $this->form_validation->set_rules('g-recaptcha-response', 'g-recaptcha-response', 'required|xss_clean|trim');


            if ($this->form_validation->run()== true) {
                $email=$this->input->post('email');
                $password=$this->input->post('password');
                $captcha_response =$this->input->post('g-recaptcha-response');
                if (empty($this->session->set_userdata('user_data'))) {
                    if ($captcha_response !="") {

                    ///------- Recaptcha check ------------
                        $check = array(
                            'secret'		=>	CAPTCHA_KEY_SERVER,
                            'response'		=>	$captcha_response
                          );

                        $startProcess = curl_init();

                        curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

                        curl_setopt($startProcess, CURLOPT_POST, true);

                        curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

                        curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

                        curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

                        $receiveData = curl_exec($startProcess);

                        $finalResponse = json_decode($receiveData, true);

                        if ($finalResponse['success']) {

                            $this->db->select('*');
                            $this->db->from('tbl_users');
                            $this->db->where('email', $email);
                            $this->db->where('is_active', 1);
                            $this->db->where('is_google', 0);
                            $this->db->where('is_facebook', 0);
                            $user_data= $this->db->get()->row();


                            $ip = $this->input->ip_address();
                            date_default_timezone_set("Asia/Calcutta");
                            $cur_date=date("Y-m-d H:i:s");


                            // echo $user_name;
                            // exit;
                            if (!empty($user_data)) {
                                if ($user_data->password==md5($password)) {
                                    $user_name  = $user_data->fname." ".$user_data->lname;
                                    $this->session->set_userdata('user_data', 1);
                                    $this->session->set_userdata('user_id', $user_data->id);
                                    $this->session->set_userdata('user_name', $user_name);

                                    // $user_name  = $user_data->fname;

                                    //insert cart data into cart table---------
                                    $cart_data = $this->session->userdata('cart_data');
                                    // print_r($cart_data);
                                    // exit;
                                    if (!empty($cart_data)) {
                                        foreach ($cart_data as $value) {
                                            $this->db->select('*');
                                            $this->db->from('tbl_cart');
                                            $this->db->where('user_id', $user_data->id);
                                            $this->db->where('product_id', $value['product_id']);
                                            $cartInfo= $this->db->get()->row();
                                            if (empty($cartInfo)) {
                                                //---------inventory check------------
                                                $this->db->select('*');
                                                $this->db->from('tbl_products');
                                                $this->db->where('id', $value['product_id']);
                                                $pro_data= $this->db->get()->row();
                                                if (!empty($pro_data)) {
                                                    if ($pro_data->inventory>=$value['quantity']) {
                                                        $data_insert = array('user_id'=> $user_data->id,
                                              'product_id'=>$value['product_id'],
                                              'quantity'=>$value['quantity'],
                                              'ip' =>$ip,
                                              'date'=>$cur_date
                                              );

                                                        $last_id=$this->base_model->insert_table("tbl_cart", $data_insert, 1) ;
                                                    }
                                                }///end check innventory
                                            }
                                        }
                                    }
                                    $this->session->unset_userdata('cart_data');
                                    $this->session->set_flashdata('smessage', 'Successful Logged in!');
                                    if (empty($this->session->userdata('guest_data'))) {
                                        redirect($_SERVER['HTTP_REFERER']);
                                    } else {
                                        $this->session->unset_userdata('guest_data');
                                        redirect("Home/View_cart", "refresh");
                                    }
                                } else {
                                    $this->session->set_flashdata('emessage', 'Wrong Password');
                                    redirect($_SERVER['HTTP_REFERER']);
                                }
                            } else {
                                $this->session->set_flashdata('emessage', 'User is not registered! Please register first');
                                redirect($_SERVER['HTTP_REFERER']);
                            }
                        } else {
                            $this->session->set_flashdata('emessage', 'Validation Fail Try Again');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    } else {
                        $this->session->set_flashdata('emessage', 'Empty Field, Validation Fail Try Again');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    redirect("/", "refresh");
                }
            } else {
                $this->session->set_flashdata('emessage', validation_errors());
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            $this->session->set_flashdata('emessage', 'Please insert some data, No data available');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    //-----------user_logout--------------
    public function user_logout()
    {
        if (!empty($this->session->userdata('user_data'))) {
            $this->session->unset_userdata('user_data');
            $this->session->unset_userdata('user_name');
            $this->session->unset_userdata('user_id');
            //---google -------
            $this->session->unset_userdata('access_token');
            //---facebook --------
            // $this->facebook->destroy_session();

            $this->session->set_flashdata('smessage', 'Successfully Log out!');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect("/", "refresh");
        }
    }

    //-------- As a guest -----------
    public function guest_mode()
    {
        if (empty($this->session->userdata('user_data'))) {
            $this->session->set_userdata('guest_data', 1);
            $this->session->set_flashdata('smessage', 'Successfully entered in guest mode!');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect("/", "refresh");
        }
    }


    //-----------log in or register with google ------------
    public function google()
    {
        //-----to download any library use php composer.phar
        include_once APPPATH . "vendor/autoload.php";

        $google_client = new Google_Client();
        $google_client->setClientId(G_ID); //Define your ClientID
        $google_client->setClientSecret(G_AUTH); //Define your Client Secret Key
        $google_client->setRedirectUri(G_redirect); //Define your Redirect Uri
        $google_client->addScope('email');
        $google_client->addScope('profile');
        $google_client->revokeToken();

        if (isset($_GET["code"])) {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
            // print_r($token);
            // exit;
            if (!isset($token["error"])) {
                $google_client->setAccessToken($token['access_token']);

                $this->session->set_userdata('access_token', $token['access_token']);

                $google_service = new Google_Service_Oauth2($google_client);

                $data = $google_service->userinfo->get();
                $ip = $this->input->ip_address();
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d H:i:s");

                $this->db->select('*');
                $this->db->from('tbl_users');
                $this->db->where('password', $data['id']);
                $user_check= $this->db->get()->row();

                if (empty($user_check)) {
                    //-----register --------
                    $data_insert = array('fname'=>$data['given_name'],
                            'lname'=>$data['family_name'],
                            'password'=>$data['id'],
                            'email'=>$data['email'],
                            'profile_picture'=>$data['picture'],
                            'is_google' =>1,
                            'ip' =>$ip,
                            'is_active' =>1,
                            'date'=>$cur_date
                            );

                    $last_id=$this->base_model->insert_table("tbl_users", $data_insert, 1) ;
                    $user_name = $data['given_name']." ".$data['family_name'];
                    if (!empty($last_id)) {

                      //------send register email-------------

                        $config = array(
                          'protocol' => 'smtp',
                          'smtp_host' => SMTP_HOST,
                          'smtp_port' => SMTP_PORT,
                          'smtp_user' => USER_NAME, // change it to yours
                          'smtp_pass' => PASSWORD, // change it to yours
                          'mailtype' => 'html',
                          'charset' => 'iso-8859-1',
                          'wordwrap' => true
                               );
                        $to=$data['email'];
                        $data['name'] = $user_name;

                        $message = 	$this->load->view('email/newaccount', $data, true);

                        $this->load->library('email', $config);
                        $this->email->set_newline("");
                        $this->email->from(EMAIL); // change it to yours
                      $this->email->to($to);// change it to yours
                      $this->email->subject('New account created');
                        $this->email->message($message);
                        if ($this->email->send()) {
                            // echo 'Email sent.';
                        } else {
                            // show_error($this->email->print_debugger());
                        }
                      //-------set session for login-------
                        $this->session->set_userdata('user_data', 1);
                        $this->session->set_userdata('user_name', $user_name);
                        $this->session->set_userdata('user_id', $last_id);

                        //insert cart data into cart table---------
                        $cart_data = $this->session->userdata('cart_data');
                        // print_r($cart_data);
                        // exit;
                        if (!empty($cart_data)) {
                            foreach ($cart_data as $value) {
                                $this->db->select('*');
                                $this->db->from('tbl_cart');
                                $this->db->where('user_id', $last_id);
                                $this->db->where('product_id', $value['product_id']);
                                $cartInfo= $this->db->get()->row();
                                if (empty($cartInfo)) {
                                    //---------inventory check------------
                                    $this->db->select('*');
                                    $this->db->from('tbl_products');
                                    $this->db->where('id', $value['product_id']);
                                    $pro_data= $this->db->get()->row();
                                    if (!empty($pro_data)) {
                                        if ($pro_data->inventory>=$value['quantity']) {
                                            $data_insert = array('user_id'=> $user_data->id,
                                  'product_id'=>$value['product_id'],
                                  'quantity'=>$value['quantity'],
                                  'ip' =>$ip,
                                  'date'=>$cur_date
                                  );

                                            $last_id=$this->base_model->insert_table("tbl_cart", $data_insert, 1) ;
                                        }
                                    }///end check innventory
                                }
                            }
                        }
                        $this->session->unset_userdata('cart_data');
                        $this->session->set_flashdata('smessage', 'Successful Registered');
                        redirect($_SERVER['HTTP_REFERER']);
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured!');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    //-------login----------
                    $data_update = array(
                            'fname'=>$data['given_name'],
                            'lname'=>$data['family_name'],
                            'email'=>$data['email'],
                            'profile_picture'=>$data['picture'],
                            'ip' =>$ip,
                            'date'=>$cur_date
                              );
                    $this->db->where('password', $data['id']);
                    $zapak=$this->db->update('tbl_users', $data_update);

                    $user_name = $data['given_name']." ".$data['family_name'];
                    if (!empty($zapak)) {

                      //-------set session for login-------
                        $this->session->set_userdata('user_data', 1);
                        $this->session->set_userdata('user_name', $user_name);
                        $this->session->set_userdata('user_id', $last_id);

                        //insert cart data into cart table---------
                        $cart_data = $this->session->userdata('cart_data');
                        // print_r($cart_data);
                        // exit;
                        if (!empty($cart_data)) {
                            foreach ($cart_data as $value) {
                                $this->db->select('*');
                                $this->db->from('tbl_cart');
                                $this->db->where('user_id', $last_id);
                                $this->db->where('product_id', $value['product_id']);
                                $cartInfo= $this->db->get()->row();
                                if (empty($cartInfo)) {
                                    //---------inventory check------------
                                    $this->db->select('*');
                                    $this->db->from('tbl_products');
                                    $this->db->where('id', $value['product_id']);
                                    $pro_data= $this->db->get()->row();
                                    if (!empty($pro_data)) {
                                        if ($pro_data->inventory>=$value['quantity']) {
                                            $data_insert = array('user_id'=> $user_data->id,
                                  'product_id'=>$value['product_id'],
                                  'quantity'=>$value['quantity'],
                                  'ip' =>$ip,
                                  'date'=>$cur_date
                                  );

                                            $last_id=$this->base_model->insert_table("tbl_cart", $data_insert, 1) ;
                                        }
                                    }///end check innventory
                                }
                            }
                        }
                        $this->session->unset_userdata('cart_data');
                        $this->session->set_flashdata('emessage', 'Successful Logged in!');
                        redirect($_SERVER['HTTP_REFERER']);
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured!');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }
            } else {
                $this->session->set_flashdata('emessage', 'Some error occured!');
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            $this->session->set_flashdata('emessage', 'Some error occured!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    ///-------Login or register with facebook ---------
    public function facebook()
    {
        $userData = array();

        /* Authenticate user with facebook */
        if ($this->facebook->is_authenticated()) {
            /* Get user info from facebook */
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture');


            $this->db->select('*');
            $this->db->from('tbl_users');
            $this->db->where('password', $fbUser['id']);
            $user_check= $this->db->get()->row();
            $ip = $this->input->ip_address();
            date_default_timezone_set("Asia/Calcutta");
            $cur_date=date("Y-m-d H:i:s");

            if (empty($user_check)) {
                //-----register --------
                $data_insert = array('fname'=>$fbUser['first_name'],
                        'lname'=>$fbUser['last_name'],
                        'password'=>$fbUser['id'],
                        'email'=>$fbUser['email'],
                        'profile_picture'=>$fbUser['picture'],
                        'gender'=>$fbUser['gender'],
                        'is_facebook' =>1,
                        'ip' =>$ip,
                        'is_active' =>1,
                        'date'=>$cur_date
                        );

                $last_id=$this->base_model->insert_table("tbl_users", $data_insert, 1) ;
                $user_name = $fbUser['first_name']." ".$fbUser['last_name'];
                if (!empty($last_id)) {

                  //-------set session for login-------
                    $this->session->set_userdata('user_data', 1);
                    $this->session->set_userdata('user_name', $user_name);
                    $this->session->set_userdata('user_id', $last_id);

                    //insert cart data into cart table---------
                    $cart_data = $this->session->userdata('cart_data');
                    // print_r($cart_data);
                    // exit;
                    if (!empty($cart_data)) {
                        foreach ($cart_data as $value) {
                            $this->db->select('*');
                            $this->db->from('tbl_cart');
                            $this->db->where('user_id', $last_id);
                            $this->db->where('product_id', $value['product_id']);
                            $cartInfo= $this->db->get()->row();
                            if (empty($cartInfo)) {
                                //---------inventory check------------
                                $this->db->select('*');
                                $this->db->from('tbl_products');
                                $this->db->where('id', $value['product_id']);
                                $pro_data= $this->db->get()->row();
                                if (!empty($pro_data)) {
                                    if ($pro_data->inventory>=$value['quantity']) {
                                        $data_insert = array('user_id'=> $user_data->id,
                              'product_id'=>$value['product_id'],
                              'quantity'=>$value['quantity'],
                              'ip' =>$ip,
                              'date'=>$cur_date
                              );

                                        $last_id=$this->base_model->insert_table("tbl_cart", $data_insert, 1) ;
                                    }
                                }///end check innventory
                            }
                        }
                    }
                    $this->session->unset_userdata('cart_data');
                    $this->session->set_flashdata('smessage', 'Successful Registered');
                    redirect($_SERVER['HTTP_REFERER']);
                } else {
                    $this->session->set_flashdata('emessage', 'Some error occured!');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            } else {
                //-------login----------
                $data_update = array(
                  'fname'=>$fbUser['first_name'],
                          'lname'=>$fbUser['last_name'],
                          'password'=>$fbUser['id'],
                          'email'=>$fbUser['email'],
                          'profile_picture'=>$fbUser['picture'],
                          'gender'=>$fbUser['gender'],
                          'ip' =>$ip,
                          'date'=>$cur_date
                          );
                $this->db->where('password', $fbUser['id']);
                $zapak=$this->db->update('tbl_users', $data_update);

                $user_name = $fbUser['first_name']." ".$fbUser['last_name'];
                if (!empty($zapak)) {

                  //-------set session for login-------
                    $this->session->set_userdata('user_data', 1);
                    $this->session->set_userdata('user_name', $user_name);
                    $this->session->set_userdata('user_id', $user_check->id);

                    //insert cart data into cart table---------
                    $cart_data = $this->session->userdata('cart_data');
                    // print_r($cart_data);
                    // exit;
                    if (!empty($cart_data)) {
                        foreach ($cart_data as $value) {
                            $this->db->select('*');
                            $this->db->from('tbl_cart');
                            $this->db->where('user_id', $last_id);
                            $this->db->where('product_id', $value['product_id']);
                            $cartInfo= $this->db->get()->row();
                            if (empty($cartInfo)) {
                                //---------inventory check------------
                                $this->db->select('*');
                                $this->db->from('tbl_products');
                                $this->db->where('id', $value['product_id']);
                                $pro_data= $this->db->get()->row();
                                if (!empty($pro_data)) {
                                    if ($pro_data->inventory>=$value['quantity']) {
                                        $data_insert = array('user_id'=> $user_data->id,
                              'product_id'=>$value['product_id'],
                              'quantity'=>$value['quantity'],
                              'ip' =>$ip,
                              'date'=>$cur_date
                              );

                                        $last_id=$this->base_model->insert_table("tbl_cart", $data_insert, 1) ;
                                    }
                                }///end check innventory
                            }
                        }
                    }
                    $this->session->unset_userdata('cart_data');
                    $this->session->set_flashdata('emessage', 'Successful Logged in!');
                    redirect($_SERVER['HTTP_REFERER']);
                } else {
                    $this->session->set_flashdata('emessage', 'Some error occured!');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
            /* Facebook logout URL */
            $data['logoutURL'] = $this->facebook->logout_url();
        } else {
            /* Facebook authentication url */
            $data['authURL'] =  $this->facebook->login_url();
        }
    }


    ///=========forget password========
    public function forget_password()
    {
        if (empty($this->session->userdata('user_data'))) {
            $this->load->view('frontend/common/header');
            $this->load->view('frontend/forget_password');
            $this->load->view('frontend/common/footer');
        } else {
            redirect("/", "refresh");
        }
    }

    //------form forgot password submit-----

    public function generateRandomString($length = 20)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    public function form_submit_forgotpassword()
    {
        if (empty($this->session->userdata('user_data'))) {
            $this->load->helper(array( 'form', 'url' ));
            $this->load->library('form_validation');
            $this->load->helper('security');
            if ($this->input->post()) {
                $this->form_validation->set_rules('reset_email', 'reset_email', 'required|valid_email|xss_clean|trim');

                if ($this->form_validation->run() == true) {
                    $email = $this->input->post('reset_email');


                    $this->db->select('*');
                    $this->db->from('tbl_users');
                    $this->db->where('email', $email);
                    $this->db->where('is_active', 1);
                    $this->db->where('is_google', 0);
                    $this->db->where('is_facebook', 0);
                    $user_data= $this->db->get()->row();
                    // print_r($user_data);
                    // exit;
                    if (!empty($user_data)) {
                        $user_id=$user_data->id;
                        $user_name=$user_data->fname." ".$user_data->lname;
                        $user_email=$user_data->email;
                        $ip = $this->input->ip_address();
                        date_default_timezone_set("Asia/Calcutta");
                        $cur_date=date("Y-m-d H:i:s");

                        //generate unique string number for txn_id

                        $txn_id=  $this->generateRandomString(6);

                        $data_insert = array('user_id'=>$user_id,
                                         'txn_id'=>$txn_id,
                                         'status'=>0,
                                         'ip'=>$ip,
                                         'date'=>$cur_date
                                         );

                        $last_id=$this->base_model->insert_table("tbl_forgot_pass", $data_insert, 1) ;
                        $link = base_url()."User_login/forget_password_reset/".$txn_id;
                        $forgot_password_data = array('user_name'=>$user_name,
                    'link'=>$link

                 );

                        $config = array(
                          'protocol' => 'smtp',
                      'smtp_host' => SMTP_HOST,
                      'smtp_port' => SMTP_PORT,
                      'smtp_user' => USER_NAME, // change it to yours
                      'smtp_pass' => PASSWORD, // change it to yours
                      'mailtype' => 'html',
                      'charset' => 'iso-8859-1',
                      'wordwrap' => true
                           );
                        $to=$user_email;

                        $message = 	$this->load->view('email/forgetpassword', $forgot_password_data, true);

                        $this->load->library('email', $config);
                        $this->email->set_newline("");
                        $this->email->from(EMAIL); // change it to yours
                  $this->email->to($to);// change it to yours
                  $this->email->subject('Reset your password');
                        $this->email->message($message);
                        if ($this->email->send()) {
                            // echo 'Email sent.';
                        } else {
                            // show_error($this->email->print_debugger());
                        }

                        $this->session->set_flashdata('smessage', 'Password reset link has been sent successfully');
                        redirect($_SERVER['HTTP_REFERER']);
                    } else {
                        $this->session->set_flashdata('emessage', 'User does not exists');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $this->session->set_flashdata('emessage', validation_errors());
                    redirect($_SERVER['HTTP_REFERER']);
                }
            } else {
                $this->session->set_flashdata('emessage', 'Please insert some data, No data available');
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            redirect("/", "refresh");
        }
    }

    //---forget-password-reset-----
    public function forget_password_reset($t)
    {
        if (empty($this->session->userdata('user_data'))) {
            $id=$t;
            $this->db->select('*');
            $this->db->from('tbl_forgot_pass');
            $this->db->where('txn_id', $id);
            $u1= $this->db->get()->row();
            $st=$u1->status;

            if ($st==0) {
                $data_update = array('status'=>1);
                $this->db->where('status', $u1->status);
                $zapak=$this->db->update('tbl_forgot_pass', $data_update);
                $data['auth']=$id;

                $this->load->view('frontend/common/header', $data);
                $this->load->view('frontend/reset_password');
                $this->load->view('frontend/common/footer', $data);
            } else {
                echo "Link already used";
            }
        } else {
            redirect("/", "refresh");
        }
    }

    ////-------update password------
    public function update_password($t)
    {
        if (empty($this->session->userdata('user_data'))) {
            $txn_id=$t;

            $this->db->select('*');
            $this->db->from('tbl_forgot_pass');
            $this->db->where('txn_id', $txn_id);
            $u2= $this->db->get()->row();
            $ui=$u2->user_id;
            $data['auth']=$txn_id;
            $this->load->helper(array( 'form', 'url' ));
            $this->load->library('form_validation');
            $this->load->helper('security');
            if ($this->input->post()) {
                $this->form_validation->set_rules('reset_password', 'reset_password', 'required|xss_clean|trim');

                if ($this->form_validation->run() == true) {
                    $reset_password = $this->input->post('reset_password');

                    $this->db->select('*');
                    $this->db->from('tbl_users');
                    $this->db->where('id', $ui);
                    $this->db->where('is_active', 1);
                    $this->db->where('is_google', 0);
                    $this->db->where('is_facebook', 0);
                    $user= $this->db->get()->row();

                    if (!empty($user)) {
                        $rs=md5($reset_password);
                        $data_update = array('password'=>$rs);

                        $this->db->where('password', $user->password);
                        $zapak=$this->db->update('tbl_users', $data_update);

                        if ($zapak!=0) {
                            $this->session->set_flashdata('smessage', 'Password reset successfully');
                            redirect("/", "refresh");
                        }
                    } else {
                        $this->session->set_flashdata('emessage', 'User not found');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $this->session->set_flashdata('emessage', validation_errors());
                    redirect($_SERVER['HTTP_REFERER']);
                }
            } else {
                $this->session->set_flashdata('emessage', 'Please insert some data, No data available');
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            redirect("/", "refresh");
        }
    }
}
