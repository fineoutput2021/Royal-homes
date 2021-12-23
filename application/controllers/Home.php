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
            $this->db->where('category_id', $id);
        } else {
            $this->db->where('subcategory_id', $id);
        }
        $data['product_data']= $this->db->get();
        // $product_data= $this->db->get()->row();
        // print_r($product_data);
        // exit;

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
        if(!empty($this->session->userdata('user_data'))){

          $this->load->view('frontend/common/header');
          $this->load->view('frontend/cart');
          $this->load->view('frontend/common/footer');

        }else{

        $this->load->view('frontend/common/header');
        $this->load->view('frontend/local_cart');
        $this->load->view('frontend/common/footer');
      }
    }


    public function error404()
    {
        $this->load->view('errors/error404');
    }
}
