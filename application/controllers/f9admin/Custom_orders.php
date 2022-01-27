<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
       require_once(APPPATH . 'core/CI_finecontrol.php');
       class Custom_orders extends CI_finecontrol{
       function __construct()
           {
             parent::__construct();
             $this->load->model("login_model");
             $this->load->model("admin/base_model");
             $this->load->library('user_agent');
             $this->load->library('upload');
           }

         public function view_custom_orders(){

            if(!empty($this->session->userdata('admin_data'))){


                $this->db->select('*');
               $this->db->from('tbl_custom_orders');
               $data['custom_orders_data']= $this->db->get();

              $this->load->view('admin/common/header_view',$data);
              $this->load->view('admin/custom_orders/view_custom_orders');
              $this->load->view('admin/common/footer_view');

          }
          else{

             redirect("login/admin_login","refresh");
          }

          }

//---------custom banner image --------------
         public function view_custom_banner(){

            if(!empty($this->session->userdata('admin_data'))){


                $this->db->select('*');
               $this->db->from('tbl_custom_orders');
               $data['custom_banner_data']= $this->db->get()-row();

              $this->load->view('admin/common/header_view',$data);
              $this->load->view('admin/custom_orders/view_custom_banner');
              $this->load->view('admin/common/footer_view');

          }
          else{

             redirect("login/admin_login","refresh");
          }

          }
        }
