<?php

    if (! defined('BASEPATH')) {
        exit('No direct script access allowed');
    }
       require_once(APPPATH . 'core/CI_finecontrol.php');
       class Corporate_orders extends CI_finecontrol
       {
           public function __construct()
           {
               parent::__construct();
               $this->load->model("login_model");
               $this->load->model("admin/base_model");
               $this->load->library('user_agent');
               $this->load->library('upload');
           }

           public function view_corporate_orders()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   $this->db->select('*');
                   $this->db->from('tbl_corporate_orders');
                   $data['corporate_orders_data']= $this->db->get();

                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/corporate_orders/view_corporate_orders');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }


           //---------corporate banner image --------------
           public function view_corporate_banner()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $this->db->select('*');
                   $this->db->from('tbl_corporate_banner');
                   $data['corporate_banner_data']= $this->db->get()->row();

                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/corporate_orders/view_corporate_banner');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           //--------view update corporate banner image ------
           public function update_corporate_banner($idd)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $id=base64_decode($idd);
                   $data['id']=$idd;

                   $this->db->select('*');
                   $this->db->from('tbl_corporate_banner');
                   $this->db->where('id', $id);
                   $data['corporate_banner_data']= $this->db->get()->row();

                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/corporate_orders/update_corporate_banner');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           //-----------update corporate banner data --------
           public function update_corporate_banner_data($idd)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $this->load->helper(array('form', 'url'));
                   $this->load->helper('security');
                   $id=base64_decode($idd);
                   $this->load->library('upload');
                   $ip = $this->input->ip_address();
                   date_default_timezone_set("Asia/Calcutta");
                   $cur_date=date("Y-m-d H:i:s");
                   $addedby=$this->session->userdata('admin_id');
                   $img1='image';
                   if (!empty($_FILES['image'])) {
                       $file_check=($_FILES['image']['error']);
                       if ($file_check!=4) {
                           $image_upload_folder = FCPATH . "assets/uploads/corporate_banner/";
                           if (!file_exists($image_upload_folder)) {
                               mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                           }
                           $new_file_name="corporate".date("Ymdhms");
                           $this->upload_config = array(
                                                                'upload_path'   => $image_upload_folder,
                                                                'file_name' => $new_file_name,
                                                                'allowed_types' =>'jpg|jpeg|png',
                                                                'max_size'      => 25000
                                                        );
                           $this->upload->initialize($this->upload_config);
                           if (!$this->upload->do_upload($img1)) {
                               $upload_error = $this->upload->display_errors();
                               // echo json_encode($upload_error);
                               $this->session->set_flashdata('emessage', 'Some error occured');
                               redirect($_SERVER['HTTP_REFERER']);
                           } else {
                               $file_info = $this->upload->data();

                               $videoNAmePath = "assets/uploads/corporate_banner/".$new_file_name.$file_info['file_ext'];

                               $image=$videoNAmePath;
                           }

                           if (!empty($image)) {
                               $data_update = array(
                                             'image'=>$image,
                                             'is_active'=>1,
                                             'ip'=>$ip,
                                             'date'=>$cur_date,
                                             'added_by'=>$addedby,
                                                       );
                               $this->db->where('id', $id);
                               $zapak=$this->db->update('tbl_corporate_banner', $data_update);
                               if (!empty($zapak)) {
                                   $this->session->set_flashdata('smessage', 'Data updated successfully');
                                   redirect("dcadmin/Corporate_orders/view_corporate_banner");
                               } else {
                                   $this->session->set_flashdata('emessage', 'Some error occured');
                                   redirect($_SERVER['HTTP_REFERER']);
                               }
                           }
                       } else {
                           redirect("dcadmin/Corporate_orders/view_corporate_banner", "refresh");
                       }
                   } else {
                       redirect("dcadmin/Corporate_orders/view_corporate_banner", "refresh");
                   }
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }


           //---------update statua of custom bannner --------
           public function updatecustom_bannerStatus($idd, $t)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');


                   $id=base64_decode($idd);

                   if ($t=="active") {
                       $data_update = array(
                        'is_active'=>1

                        );

                       $this->db->where('id', $id);
                       $zapak=$this->db->update('tbl_corporate_banner', $data_update);

                       if ($zapak!=0) {
                         $this->session->set_flashdata('smessage', 'Status updated successfully');
                           redirect("dcadmin/Corporate_orders/view_corporate_banner", "refresh");
                       } else {
                           $this->session->set_flashdata('emessage', 'Sorry error occured');
                           redirect($_SERVER['HTTP_REFERER']);
                       }
                   }
                   if ($t=="inactive") {
                       $data_update = array(
                         'is_active'=>0

                         );

                       $this->db->where('id', $id);
                       $zapak=$this->db->update('tbl_corporate_banner', $data_update);

                       if ($zapak!=0) {
                         $this->session->set_flashdata('smessage', 'Status updated successfully');
                           redirect("dcadmin/Corporate_orders/view_corporate_banner", "refresh");
                       } else {
                           $this->session->set_flashdata('emessage', 'Sorry error occured');
                           redirect($_SERVER['HTTP_REFERER']);
                       }
                   }
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }
       }
