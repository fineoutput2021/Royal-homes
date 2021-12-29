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
    public function index()
    {
        // $this->session->unset_userdata('user_data');
        $this->db->select('*');
        $this->db->from('tbl_Slider');
        $this->db->where('is_active', 1);
        $data['slider_data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('is_active', 1);
        $this->db->order_by('rand()');
        $this->db->limit(6);
        $data['Category_Data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('is_active', 1);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(16);
        $data['new_launch_data']= $this->db->get();

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
        //$this->db->where('id',$usr);
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

    public function all_Product($idd, $t)
    {
        $id=base64_decode($idd);
        $id2=base64_decode($t);
        $this->db->select('*');
        $this->db->from('tbl_products');
        if ($id2==1) {
            $this->db->like('category', $id);
        } else {
            $this->db->like('subcategory_id', $id);
        }
        $data['product_data']= $this->db->get();
        
        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/all_product');
        $this->load->view('frontend/common/footer');
    }

    public function product_details()
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('id', 4);
        $data['product_data']= $this->db->get()->row();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/product_details');
        $this->load->view('frontend/common/footer');
    }

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
    public function add_news_letter()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean');


            if ($this->form_validation->run()== true) {
                $email=$this->input->post('email');

                $ip = $this->input->ip_address();
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d H:i:s");

                $addedby=$this->session->userdata('admin_id');

                $data_insert = array(
                        'email'=>$email,
                        'ip' =>$ip,
                        'added_by' =>$addedby,
                        'is_active' =>1,
                        'date'=>$cur_date

                        );

                $last_id=$this->base_model->insert_table("tbl_newsletter", $data_insert, 1) ;

                if ($last_id!=0) {
                    $this->session->set_flashdata('smessage', 'Submit Successful');

                    redirect("Home/index", "refresh");
                } else {
                    $this->session->set_flashdata('emessage', 'please enter vaild email');
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

public function checkout2(){
  $this->load->view('frontend/common/header');
  $this->load->view('frontend/checkout2');
  $this->load->view('frontend/common/footer');
}

    public function error404()
    {
        $this->load->view('errors/error404');
    }
}
