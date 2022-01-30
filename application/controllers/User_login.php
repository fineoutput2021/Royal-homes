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
    }

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

                        if($finalResponse['success'])
                           {

                    $this->db->select('*');
                    $this->db->from('tbl_users');
                    $this->db->where('email', $email);
                    $this->db->where('is_active', 1);
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
                    redirect("Home/index", "refresh");
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

                          if($finalResponse['success'])
			                       {

                        $this->db->select('*');
                        $this->db->from('tbl_users');
                        $this->db->where('email', $email);
                        $this->db->where('is_active', 1);
                        $user_data= $this->db->get()->row();


                        $ip = $this->input->ip_address();
                        date_default_timezone_set("Asia/Calcutta");
                        $cur_date=date("Y-m-d H:i:s");

                        // $user_name  = $user_data->fname." ".$user_data->lname;
                        $user_name  = $user_data->fname;
                        // echo $user_name;
                        // exit;
                        if (!empty($user_data)) {
                            if ($user_data->password==md5($password)) {
                                $this->session->set_userdata('user_data', 1);
                                $this->session->set_userdata('user_id', $user_data->id);
                                $this->session->set_userdata('user_name', $user_name);


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
                                redirect($_SERVER['HTTP_REFERER']);
                            } else {
                                $this->session->set_flashdata('emessage', 'Wrong Password');
                                redirect($_SERVER['HTTP_REFERER']);
                            }
                        } else {
                            $this->session->set_flashdata('emessage', 'User is not register! Please register first');
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
                    redirect("Home/index", "refresh");
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

            $this->session->set_flashdata('smessage', 'Successfully Log out!');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->load->view('Home/index', "refresh");
        }
    }

//-------- As a guest -----------
public function guest_mode(){
  if (empty($this->session->userdata('user_data'))) {

    $this->session->set_userdata('guest_data',1);
    $this->session->set_flashdata('smessage', 'Successfully entered in guest mode!');
    redirect($_SERVER['HTTP_REFERER']);

  }else{
      $this->load->view('Home/index', "refresh");
  }
}

}
