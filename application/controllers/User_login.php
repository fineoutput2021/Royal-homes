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
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('fname', 'fname', 'required|xss_clean|trim');
            $this->form_validation->set_rules('lname', 'lname', 'required|xss_clean|trim');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean|trim');
            $this->form_validation->set_rules('phone', 'phone', 'required|xss_clean|trim');
            $this->form_validation->set_rules('password', 'password', 'required|xss_clean|trim');
            $this->form_validation->set_rules('confirm_password', 'confirm_password', 'required||matches[password]|xss_clean|trim');


            if ($this->form_validation->run()== true) {
                $fname=$this->input->post('fname');
                $lname=$this->input->post('lname');
                $email=$this->input->post('email');
                $phone=$this->input->post('phone');
                $password=$this->input->post('password');
                $confirm_password=$this->input->post('confirm_password');

                $ip = $this->input->ip_address();
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d H:i:s");
                $addedby=$this->session->userdata('admin_id');
                if (empty($this->session->set_userdata('user_data'))) {
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
                            if (!empty($cart_data)) {
                                foreach ($cart_data as $value) {
                                    $this->db->select('*');
                                    $this->db->from('tbl_cart');
                                    $this->db->where('user_id', $last_id);
                                    $this->db->where('product_id', $value['product_id']);
                                    $cartInfo= $this->db->get()->row();
                                    if (!empty($cartInfo)) {
                                        $data_insert = array('user_id'=>$last_id,
                                              'product_id'=>$value['product_id'],
                                              'quantity'=>$value['quantity'],
                                              'ip' =>$ip,
                                              'added_by' =>$addedby,
                                              'is_active' =>1,
                                              'date'=>$cur_date
                                              );

                                        $last_id=$this->base_model->insert_table("tbl_cart", $data_insert, 1) ;
                                    }
                                }
                            }

                            $this->session->set_flashdata('emessage', 'Successful Registered');
                            $this->load->view('Home/index', "refresh");
                        } else {
                            $this->session->set_flashdata('emessage', 'Some error occured');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    } else {
                        $this->session->set_flashdata('emessage', 'User is already registered');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $this->load->view('Home/index', "refresh");
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


            if ($this->form_validation->run()== true) {
                $email=$this->input->post('email');
                $password=$this->input->post('password');
                if (empty($this->session->set_userdata('user_data'))) {
                    $this->db->select('*');
                    $this->db->from('tbl_users');
                    $this->db->where('email', $email);
                    $this->db->where('is_active', 1);
                    $user_data= $this->db->get()->row();

                    if (!empty($user_data)) {
                        if ($user_data->password==md5($password)) {
                            $this->session->set_userdata('user_data', 1);
                            $this->session->set_userdata('user_id', $last_id);
                            $this->session->set_userdata('user_name', $user_name);


                            //insert cart data into cart table---------
                            $cart_data = $this->session->userdata('cart_data');
                            if (!empty($cart_data)) {
                                foreach ($cart_data as $value) {
                                    $this->db->select('*');
                                    $this->db->from('tbl_cart');
                                    $this->db->where('user_id', $last_id);
                                    $this->db->where('product_id', $value['product_id']);
                                    $cartInfo= $this->db->get()->row();
                                    if (!empty($cartInfo)) {
                                        $data_insert = array('user_id'=>$last_id,
                                              'product_id'=>$value['product_id'],
                                              'quantity'=>$value['quantity'],
                                              'ip' =>$ip,
                                              'added_by' =>$addedby,
                                              'is_active' =>1,
                                              'date'=>$cur_date
                                              );

                                        $last_id=$this->base_model->insert_table("tbl_cart", $data_insert, 1) ;
                                    }
                                }
                            }

                            $this->session->set_flashdata('emessage', 'Successful Logged in!');
                            $this->load->view('Home/index', "refresh");
                        } else {
                            $this->session->set_flashdata('emessage', 'Wrong Password');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    } else {
                        $this->session->set_flashdata('emessage', 'User is not register! Please register first');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $this->load->view('Home/index', "refresh");
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
}
