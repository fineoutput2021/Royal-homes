<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/login_model");
        $this->load->model("admin/base_model");
    }

    //-------index--------------

    public function index()
    {
        // $this->session->unset_userdata('user_data');
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('is_active', 1);
        $data['web_slider_data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_mobile_slider');
        $this->db->where('is_active', 1);
        $data['mob_slider_data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_banners_six');
        $this->db->where('is_active', 1);
        $data['banner_Data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_subcategory');
        $this->db->where('is_active', 1);
        $this->db->where('new_launches', 1);
        $this->db->limit(5);
        $data['launch_sub_data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_bannerimages');
        //$this->db->where('id',$usr);
        $data['banner_images']= $this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_image_two');
        //$this->db->where('id',$usr);
        $data['image_two']= $this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_testimonal');
        $this->db->order_by('rand()');
        $data['data_testimonal']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('is_active', 1);
        $this->db->where('bestsellerproduct', 1);
        // $this->db->order_by('id', 'DESC');
        // $this->db->limit(16);
        $data['Best_seller']= $this->db->get();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/index');
        $this->load->view('frontend/common/footer');
    }



    ///--------all product----------------

    public function all_Product()
    {
        // $idd = $this->uri->segment(3);
        // $t = $this->uri->segment(4);
        $url = $this->uri->segment(3);
        $sort = $this->uri->segment(4);

        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('url',$url);
        $cat_data= $this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_subcategory');
        $this->db->where('url',$url);
        $sub_data= $this->db->get()->row();

        if(!empty($cat_data)){
          $id= $cat_data->id;
          $t=1;
        }else{
          $id= $sub_data->id;
          $t=2;
        }
        // echo $id;
        // echo $t;
        // exit;
        $data["idd"] = base64_encode($id);
        $data["type"] = base64_encode($t);
        $data["url"] = $url;

        $this->db->select('*');
        $this->db->from('tbl_products');
        if ($t==1) {
            $this->db->like('category', $id);
        } else {
            $this->db->like('subcategory', $id);
        }
        $this->db->where('is_active', 1);
        if (!empty($sort)) {
            if ($sort=="LH") {
                $this->db->order_by('selling_price', 'asc');
            } elseif ($sort=="HL") {
                $this->db->order_by('selling_price', 'desc');
            }
        }
        $product_data= $this->db->get();
        // print_r($product_data);
        // exit;
        $data['product_data'] = $product_data;


        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/all_product');
        $this->load->view('frontend/common/footer');
    }

    //------product details-------------

    public function product_details($url)
    {
        // $id=base64_decode($idd);
        // $data['id']=$idd;

        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('url', $url);
        $product_data= $this->db->get()->row();
        $data['product_data'] = $product_data;

        $this->db->select('*');
        $this->db->from('tbl_testimonal');
        $this->db->order_by('rand()');
        $data['data_testimonal']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('url !=', $url);
        $this->db->where('is_active', 1);
        $this->db->order_by('rand()');
        $this->db->limit(15);
        $data['like_data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('is_active', 1);
        $this->db->where('url !=', $url);
        $this->db->order_by('rand()');
        $data['more_data']= $this->db->get();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/product_details');
        $this->load->view('frontend/common/footer');
    }

    //-----view cart----------

    public function view_cart()
    {
        if (!empty($this->session->userdata('user_data'))) {
            $user_id = $this->session->userdata('user_id');

            $this->db->select('*');
            $this->db->from('tbl_cart');
            $this->db->where('user_id', $user_id);
            $data['cart_data']= $this->db->get();

            $this->load->view('frontend/common/header', $data);
            $this->load->view('frontend/cart');
            $this->load->view('frontend/common/footer');
        } else {
            $this->load->view('frontend/common/header');
            $this->load->view('frontend/local_cart');
            $this->load->view('frontend/common/footer');
        }
    }

    //------add newsletter---------

    public function add_news_letter()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean');

            if ($this->form_validation->run()== true) {
                $email=$this->input->post('email');
                $addedby=$this->session->userdata('admin_id');
                $ip = $this->input->ip_address();
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d H:i:s");

                $this->db->select('*');
                $this->db->from('tbl_newsletter');
                $this->db->where('email', $email);
                $news_data= $this->db->get()->row();
                if (empty($news_data)) {
                    $data_insert = array(
                        'email'=>$email,
                        'ip' =>$ip,
                        'added_by' =>$addedby,
                        'is_active' =>1,
                        'date'=>$cur_date

                        );

                    $last_id=$this->base_model->insert_table("tbl_newsletter", $data_insert, 1) ;

                    if ($last_id!=0) {
                        $this->session->set_flashdata('smessage', 'Successfully Subcribed');
                        redirect($_SERVER['HTTP_REFERER']);
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $this->session->set_flashdata('emessage', 'Already subcribed to neswletter');
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
    }

    //--------my orders------
    public function my_orders($idd)
    {
        if (!empty($this->session->userdata('user_data'))) {
            $user_id=base64_decode($idd);
            $data['id']=$idd;

            $this->db->select('*');
            $this->db->from('tbl_order1');
            $this->db->where('user_id', $user_id);
            $this->db->order_by('id', 'DESC');
            $data['order1_data']= $this->db->get();

            $this->load->view('frontend/common/header', $data);
            $this->load->view('frontend/my_orders');
            $this->load->view('frontend/common/footer');
        } else {
            redirect("Home/Index", "refresh");
        }
    }

    //--------cancel order---------
    public function cancel_order()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('order_id', 'order_id', 'required|xss_clean|trim');

            if ($this->form_validation->run()== true) {
                $order_id=base64_decode($this->input->post('order_id'));

                $data_update = array(
     'order_status'=>5

     );

                $this->db->where('id', $order_id);
                $zapak=$this->db->update('tbl_order1', $data_update);

                //-------update inventory-------
                $this->db->select('*');
                $this->db->from('tbl_order2');
                $this->db->where('main_id', $order_id);
                $data_order2= $this->db->get();

                foreach ($data_order2->result() as $data) {
                    $this->db->select('*');
                    $this->db->from('tbl_products');
                    $this->db->where('id', $data->product_id);
                    $pro_data= $this->db->get()->row();
                    if (!empty($pro_data)) {
                        $update_inv = $pro_data->inventory + $data->quantity;
                        $data_update = array('inventory'=>$update_inv,
         );
                        $this->db->where('id', $pro_data->id);
                        $zapak2=$this->db->update('tbl_products', $data_update);
                    }
                }


                if (!empty($zapak)) {
                    $respone['data'] = true;
                    $respone['data_message'] ="Order successfully cancelled";
                    echo json_encode($respone);
                } else {
                    $respone['data'] = false;
                    $respone['data_message'] ="Some error occured";
                    echo json_encode($respone);
                }
            } else {
                $respone['data'] = false;
                $respone['data_message'] =validation_errors();
                echo json_encode($respone);
            }
        } else {
            $respone['data'] = false;
            $respone['data_message'] ='Please insert some data, No data available';
            echo json_encode($respone);
        }
    }

    //-------view wishlist------------
    public function view_wishlist($idd)
    {
        if (!empty($this->session->userdata('user_data'))) {
            $id=base64_decode($idd);
            $data['id']=$idd;

            $this->db->select('*');
            $this->db->from('tbl_wishlist');
            $this->db->where('user_id', $id);
            $data['wishlist_data']= $this->db->get();
            // $wishlist_data= $this->db->get();
            // print_r($wishlist_data->result());
            // exit;
            $this->load->view('frontend/common/header', $data);
            $this->load->view('frontend/my_wishlist');
            $this->load->view('frontend/common/footer');
        } else {
            redirect("Home/Index", "refresh");
        }
    }


    //-------search---------------
    public function search()
    {
        $string= $this->input->get('search');

        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->like('productname', $string);
        $this->db->where('is_active', 1);
        $data['search_data']= $this->db->get();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/search_results');
        $this->load->view('frontend/common/footer');
    }

    ///----------view blog ---------------
    public function blog()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('is_active', 1);
        $data['all_blogs']= $this->db->get();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/all_blogs.php');
        $this->load->view('frontend/common/footer');
    }

    ///----------view blog details---------------
    public function blog_details($idd)
    {
        $id=base64_decode($idd);
        $data['id']=$idd;
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('id', $id);
        $this->db->where('is_active', 1);
        $data['blog_data']= $this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('id !=', $id);
        $this->db->where('is_active', 1);
        $this->db->limit(3);
        $this->db->order_by("rand()");
        $data['related_blog']= $this->db->get();


        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/blog_details.php');
        $this->load->view('frontend/common/footer');
    }

    //-------------view corporate order =-----------
    public function corporate_order()
    {
        $this->db->select('*');
        $this->db->from('tbl_corporate_brochers');
        $this->db->where('is_active', 1);
        $data['corporate_brochers']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_corporate_banner');
        $this->db->where('is_active', 1);
        $data['custom_brocher']= $this->db->get()->row();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/corporate_order.php');
        $this->load->view('frontend/common/footer');
    }

    //----------submit corporate data -------------------
    public function corporate_order_data()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->library('upload');
        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'name', 'required|xss_clean|trim');
            $this->form_validation->set_rules('email', 'email', 'required|xss_clean|trim');
            $this->form_validation->set_rules('c_name', 'c_name', 'required|xss_clean|trim');
            $this->form_validation->set_rules('phone', 'phone', 'required|xss_clean|trim');
            $this->form_validation->set_rules('message', 'message', 'required|xss_clean|trim');
            $this->form_validation->set_rules('g-recaptcha-response', 'g-recaptcha-response', 'required|xss_clean|trim');


            if ($this->form_validation->run()== true) {
                $name=$this->input->post('name');
                $email=$this->input->post('email');
                $c_name=$this->input->post('c_name');
                $phone=$this->input->post('phone');
                $message=$this->input->post('message');
                $captcha_response=$this->input->post('g-recaptcha-response');
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
                        $ip = $this->input->ip_address();
                        date_default_timezone_set("Asia/Calcutta");
                        $cur_date=date("Y-m-d H:i:s");

                        $image1 ="";
                        $image2 ="";
                        $image3 ="";
                        $image4 ="";
                        $image5 ="";
                        $image6 ="";
                        //-------  image 1 ----------

                        $img1='image1';

                        $file_check=($_FILES['image1']['error']);
                        if ($file_check!=4) {
                            $image_upload_folder = FCPATH . "assets/uploads/corporate_orders/";
                            if (!file_exists($image_upload_folder)) {
                                mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                            }
                            $new_file_name="image1".date("Ymdhms");
                            $this->upload_config = array(
                                                  'upload_path'   => $image_upload_folder,
                                                  'file_name' => $new_file_name,
                                                  'allowed_types' =>'xlsx|csv|xls|pdf|doc|docx|txt|jpg|jpeg|png',
                                                  'max_size'      => 25000
                                          );
                            $this->upload->initialize($this->upload_config);
                            if (!$this->upload->do_upload($img1)) {
                                $upload_error = $this->upload->display_errors();
                                // echo json_encode($upload_error);
                                echo $upload_error;
                            } else {
                                $file_info = $this->upload->data();
                                $videoNAmePath = "assets/uploads/corporate_orders/".$new_file_name.$file_info['file_ext'];
                                $image1=$videoNAmePath;
                            }
                        }
                        //-------  image 2 ----------

                        $img2='image2';

                        $file_check=($_FILES['image2']['error']);
                        if ($file_check!=4) {
                            $image_upload_folder = FCPATH . "assets/uploads/corporate_orders/";
                            if (!file_exists($image_upload_folder)) {
                                mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                            }
                            $new_file_name="image2".date("Ymdhms");
                            $this->upload_config = array(
                                                  'upload_path'   => $image_upload_folder,
                                                  'file_name' => $new_file_name,
                                                  'allowed_types' =>'xlsx|csv|xls|pdf|doc|docx|txt|jpg|jpeg|png',
                                                  'max_size'      => 25000
                                          );
                            $this->upload->initialize($this->upload_config);
                            if (!$this->upload->do_upload($img2)) {
                                $upload_error = $this->upload->display_errors();
                                // echo json_encode($upload_error);
                                echo $upload_error;
                            } else {
                                $file_info = $this->upload->data();
                                $videoNAmePath = "assets/uploads/corporate_orders/".$new_file_name.$file_info['file_ext'];
                                $image2=$videoNAmePath;
                            }
                        }
                        //-------  image 3 ----------

                        $img3='image3';

                        $file_check=($_FILES['image3']['error']);
                        if ($file_check!=4) {
                            $image_upload_folder = FCPATH . "assets/uploads/corporate_orders/";
                            if (!file_exists($image_upload_folder)) {
                                mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                            }
                            $new_file_name="image3".date("Ymdhms");
                            $this->upload_config = array(
                                                  'upload_path'   => $image_upload_folder,
                                                  'file_name' => $new_file_name,
                                                  'allowed_types' =>'xlsx|csv|xls|pdf|doc|docx|txt|jpg|jpeg|png',
                                                  'max_size'      => 25000
                                          );
                            $this->upload->initialize($this->upload_config);
                            if (!$this->upload->do_upload($img3)) {
                                $upload_error = $this->upload->display_errors();
                                // echo json_encode($upload_error);
                                echo $upload_error;
                            } else {
                                $file_info = $this->upload->data();
                                $videoNAmePath = "assets/uploads/corporate_orders/".$new_file_name.$file_info['file_ext'];
                                $image3=$videoNAmePath;
                            }
                        }
                        //-------  image 4 ----------

                        $img4='image4';

                        $file_check=($_FILES['image4']['error']);
                        if ($file_check!=4) {
                            $image_upload_folder = FCPATH . "assets/uploads/corporate_orders/";
                            if (!file_exists($image_upload_folder)) {
                                mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                            }
                            $new_file_name="image4".date("Ymdhms");
                            $this->upload_config = array(
                                                  'upload_path'   => $image_upload_folder,
                                                  'file_name' => $new_file_name,
                                                  'allowed_types' =>'xlsx|csv|xls|pdf|doc|docx|txt|jpg|jpeg|png',
                                                  'max_size'      => 25000
                                          );
                            $this->upload->initialize($this->upload_config);
                            if (!$this->upload->do_upload($img4)) {
                                $upload_error = $this->upload->display_errors();
                                // echo json_encode($upload_error);
                                echo $upload_error;
                            } else {
                                $file_info = $this->upload->data();
                                $videoNAmePath = "assets/uploads/corporate_orders/".$new_file_name.$file_info['file_ext'];
                                $image4=$videoNAmePath;
                            }
                        }
                        //-------  image 5 ----------

                        $img5='image5';

                        $file_check=($_FILES['image5']['error']);
                        if ($file_check!=4) {
                            $image_upload_folder = FCPATH . "assets/uploads/corporate_orders/";
                            if (!file_exists($image_upload_folder)) {
                                mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                            }
                            $new_file_name="image5".date("Ymdhms");
                            $this->upload_config = array(
                                                  'upload_path'   => $image_upload_folder,
                                                  'file_name' => $new_file_name,
                                                  'allowed_types' =>'xlsx|csv|xls|pdf|doc|docx|txt|jpg|jpeg|png',
                                                  'max_size'      => 25000
                                          );
                            $this->upload->initialize($this->upload_config);
                            if (!$this->upload->do_upload($img5)) {
                                $upload_error = $this->upload->display_errors();
                                // echo json_encode($upload_error);
                                echo $upload_error;
                            } else {
                                $file_info = $this->upload->data();
                                $videoNAmePath = "assets/uploads/corporate_orders/".$new_file_name.$file_info['file_ext'];
                                $image5=$videoNAmePath;
                            }
                        }
                        //-------  image 6 ----------

                        $img6='image6';

                        $file_check=($_FILES['image6']['error']);
                        if ($file_check!=4) {
                            $image_upload_folder = FCPATH . "assets/uploads/corporate_orders/";
                            if (!file_exists($image_upload_folder)) {
                                mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                            }
                            $new_file_name="image6".date("Ymdhms");
                            $this->upload_config = array(
                                                  'upload_path'   => $image_upload_folder,
                                                  'file_name' => $new_file_name,
                                                  'allowed_types' =>'xlsx|csv|xls|pdf|doc|docx|txt|jpg|jpeg|png',
                                                  'max_size'      => 25000
                                          );
                            $this->upload->initialize($this->upload_config);
                            if (!$this->upload->do_upload($img6)) {
                                $upload_error = $this->upload->display_errors();
                                // echo json_encode($upload_error);
                                echo $upload_error;
                            } else {
                                $file_info = $this->upload->data();
                                $videoNAmePath = "assets/uploads/corporate_orders/".$new_file_name.$file_info['file_ext'];
                                $image6=$videoNAmePath;
                            }
                        }

                        //-------insert data into table------------
                        $data_insert = array('name'=>$name,
                                'email'=>$email,
                                'c_name'=>$c_name,
                                'phone'=>$phone,
                                'message'=>$message,
                                'image1'=>$image1,
                                'image2'=>$image2,
                                'image3'=>$image3,
                                'image4'=>$image4,
                                'image5'=>$image5,
                                'image6'=>$image6,
                                'ip' =>$ip,
                                'date'=>$cur_date
                                );

                        $last_id=$this->base_model->insert_table("tbl_corporate_orders", $data_insert, 1) ;
                        if (!empty($last_id)) {
                            $this->session->set_flashdata('smessage', 'Your requet submitted successfully!');
                            redirect("/", );
                        } else {
                            $this->session->set_flashdata('emessage', 'Some error occured');
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
                $this->session->set_flashdata('emessage', validation_errors());
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            $this->session->set_flashdata('emessage', 'Please insert some data, No data available');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    //-------------view custom order =-----------
    public function custom_order()
    {
        $this->db->select('*');
        $this->db->from('tbl_custom_brochers');
        $this->db->where('is_active', 1);
        $data['custom_brochers']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_custom_banner');
        $this->db->where('is_active', 1);
        $data['custom_banner']= $this->db->get()->row();



        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/custom_order.php');
        $this->load->view('frontend/common/footer');
    }


    //----------submit corporate data -------------------
    public function custom_order_data()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->library('upload');
        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'name', 'required|xss_clean|trim');
            $this->form_validation->set_rules('email', 'email', 'required|xss_clean|trim');
            $this->form_validation->set_rules('c_name', 'c_name', 'required|xss_clean|trim');
            $this->form_validation->set_rules('phone', 'phone', 'required|xss_clean|trim');
            $this->form_validation->set_rules('g-recaptcha-response', 'g-recaptcha-response', 'required|xss_clean|trim');


            if ($this->form_validation->run()== true) {
                $name=$this->input->post('name');
                $email=$this->input->post('email');
                $c_name=$this->input->post('c_name');
                $phone=$this->input->post('phone');
                $message=$this->input->post('message');
                $captcha_response=$this->input->post('g-recaptcha-response');
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
                        $ip = $this->input->ip_address();
                        date_default_timezone_set("Asia/Calcutta");
                        $cur_date=date("Y-m-d H:i:s");

                        //-------insert data into table------------
                        $data_insert = array('name'=>$name,
                                'email'=>$email,
                                'c_name'=>$c_name,
                                'phone'=>$phone,
                                'message'=>$message,
                                'ip' =>$ip,
                                'date'=>$cur_date
                                );

                        $last_id=$this->base_model->insert_table("tbl_custom_orders", $data_insert, 1) ;
                        if (!empty($last_id)) {
                            $this->session->set_flashdata('smessage', 'Your requet submitted successfully!');
                            redirect("/", );
                        } else {
                            $this->session->set_flashdata('emessage', 'Some error occured');
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
                $this->session->set_flashdata('emessage', validation_errors());
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            $this->session->set_flashdata('emessage', 'Please insert some data, No data available');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function error404()
    {
        $this->load->view('errors/error404');
    }
}
