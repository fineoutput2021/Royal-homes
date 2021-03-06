<?php

    if (! defined('BASEPATH')) {
        exit('No direct script access allowed');
    }
       require_once(APPPATH . 'core/CI_finecontrol.php');
       class Bannerimages extends CI_finecontrol
       {
           public function __construct()
           {
               parent::__construct();
               $this->load->model("login_model");
               $this->load->model("admin/base_model");
               $this->load->library('user_agent');
               $this->load->library('upload');
           }

           public function view_bannerimages()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;

                   $this->db->select('*');
                   $this->db->from('tbl_bannerimages');
                   //$this->db->where('id',$usr);
                   $data['bannerimages_data']= $this->db->get();

                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/bannerimages/view_bannerimages');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function add_bannerimages()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $this->load->view('admin/common/header_view');
                   $this->load->view('admin/bannerimages/add_bannerimages');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function update_bannerimages($idd)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;

                   $id=base64_decode($idd);
                   $data['id']=$idd;

                   $this->db->select('*');
                   $this->db->from('tbl_bannerimages');
                   $this->db->where('id', $id);
                   $data['bannerimages_data']= $this->db->get()->row();


                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/bannerimages/update_bannerimages');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function add_bannerimages_data($t, $iw="")
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $this->load->helper(array('form', 'url'));
                   $this->load->library('form_validation');
                   $this->load->helper('security');
                   if ($this->input->post()) {
                       // print_r($this->input->post());
                       // exit;
                       $this->form_validation->set_rules('imagename', 'imagename', 'trim|customAlpha');
                       $this->form_validation->set_rules('link', 'link', 'trim');






                       if ($this->form_validation->run()== true) {
                           $imagename=$this->input->post('imagename');
                           $link=$this->input->post('link');

                           $ip = $this->input->ip_address();
                           date_default_timezone_set("Asia/Calcutta");
                           $cur_date=date("Y-m-d H:i:s");
                           $addedby=$this->session->userdata('admin_id');

                           $typ=base64_decode($t);
                           $last_id = 0;
                           if ($typ==1) {
                               $img1='image1';
                               $nnnn1="";


                               $file_check=($_FILES['image1']['error']);
                               if ($file_check!=4) {
                               $image_upload_folder = FCPATH . "assets/uploads/bannerimages/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="image1".date("Ymdhms");
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

                                   $this->session->set_flashdata('emessage', $upload_error);
                                   redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/bannerimages/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   $nnnn=$file_info['file_name'];
                                   $nnnn1=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }
}



                               $img2='image2';
                               $nnnn2="";


                               $file_check=($_FILES['image2']['error']);
                               if ($file_check!=4) {
                               $image_upload_folder = FCPATH . "assets/uploads/bannerimages/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="image2".date("Ymdhms");
                               $this->upload_config = array(
                             'upload_path'   => $image_upload_folder,
                             'file_name' => $new_file_name,
                             'allowed_types' =>'jpg|jpeg|png',
                             'max_size'      => 25000
                     );
                               $this->upload->initialize($this->upload_config);
                               if (!$this->upload->do_upload($img2)) {
                                   $upload_error = $this->upload->display_errors();
                                   // echo json_encode($upload_error);

                                   $this->session->set_flashdata('emessage', $upload_error);
                                   redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/bannerimages/".$new_file_name.$file_info['file_ext'];
                                   $nnnn2=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }
}


                               $data_insert = array(
                                   'imagename'=>$imagename,
  'image1'=>$nnnn1,
  'image2'=>$nnnn2,
  'link'=>$link,


                     'ip' =>$ip,
                     'added_by' =>$addedby,
                     'is_active' =>1,
                     'date'=>$cur_date
                     );


                               $last_id=$this->base_model->insert_table("tbl_bannerimages", $data_insert, 1) ;
                               if ($last_id!=0) {
                                   $this->session->set_flashdata('smessage', 'Data inserted successfully');
                                   redirect("dcadmin/bannerimages/view_bannerimages", "refresh");
                               }
                           }
                           if ($typ==2) {
                               $idw=base64_decode($iw);


                               $this->db->select('*');
                               $this->db->from('tbl_bannerimages');
                               $this->db->where('id', $idw);
                               $dsa=$this->db->get();
                               $da=$dsa->row();



                               $img1='image1';
                               $nnnn1="";


                               $file_check=($_FILES['image1']['error']);
                               if ($file_check!=4) {
                               $image_upload_folder = FCPATH . "assets/uploads/bannerimages/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="image1".date("Ymdhms");
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

                                   $this->session->set_flashdata('emessage', $upload_error);
                                   redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/bannerimages/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   $nnnn=$file_info['file_name'];
                                   $nnnn1=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }
}



                               $img2='image2';
                               $nnnn2="";


                               $file_check=($_FILES['image2']['error']);
                               if ($file_check!=4) {
                               $image_upload_folder = FCPATH . "assets/uploads/bannerimages/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="image2".date("Ymdhms");
                               $this->upload_config = array(
                             'upload_path'   => $image_upload_folder,
                             'file_name' => $new_file_name,
                             'allowed_types' =>'jpg|jpeg|png',
                             'max_size'      => 25000
                     );
                               $this->upload->initialize($this->upload_config);
                               if (!$this->upload->do_upload($img2)) {
                                   $upload_error = $this->upload->display_errors();
                                   // echo json_encode($upload_error);

                                   $this->session->set_flashdata('emessage', $upload_error);
                                   redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/bannerimages/".$new_file_name.$file_info['file_ext'];
                                   $nnnn2=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }
}

if (empty($nnnn1)) {
                          $nnnn1=$da->image1;
                      }
                      if (empty($nnnn2)) {
                          $nnnn2=$da->image2;
                      }

                      if (!empty($nnnn1)) {         $data_insert = array(
                  'imagename'=>$imagename,
  'image1'=>$nnnn1,
  'image2'=>$nnnn2,
  'link'=>$link
                     );
            }
else{
  $data_insert = array(
'imagename'=>$imagename,
'link'=>$link

   );
}
                               $this->db->where('id', $idw);
                               $last_id=$this->db->update('tbl_bannerimages', $data_insert);
                           }
                           if ($last_id!=0) {
                               $this->session->set_flashdata('smessage', 'Data updated successfully');
                               redirect("dcadmin/bannerimages/view_bannerimages", "refresh");
                           } else {
                               $this->session->set_flashdata('emessage', 'Sorry error occured');
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
                   redirect("login/admin_login", "refresh");
               }
           }

           public function updatebannerimagesStatus($idd, $t)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;
                   $id=base64_decode($idd);

                   if ($t=="active") {
                       $data_update = array(
                        'is_active'=>1

                        );

                       $this->db->where('id', $id);
                       $zapak=$this->db->update('tbl_bannerimages', $data_update);

                       if ($zapak!=0) {
                           $this->session->set_flashdata('smessage', 'Status updated successfully');
                           redirect("dcadmin/bannerimages/view_bannerimages", "refresh");
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
                       $zapak=$this->db->update('tbl_bannerimages', $data_update);

                       if ($zapak!=0) {
                           $this->session->set_flashdata('smessage', 'Status updated successfully');
                           redirect("dcadmin/bannerimages/view_bannerimages", "refresh");
                       } else {
                           $this->session->set_flashdata('emessage', 'Sorry error occured');
                           redirect($_SERVER['HTTP_REFERER']);
                       }
                   }
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }



           public function delete_bannerimages($idd)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;
                   $id=base64_decode($idd);

                   if ($this->load->get_var('position')=="Super Admin") {
                       $this->db->select('*');
                       $this->db->from('tbl_bannerimages');
                       $this->db->where('id', $id);
                       $dsa= $this->db->get();
                       $da=$dsa->row();
                       // $img=$da->image;

                       $zapak=$this->db->delete('tbl_bannerimages', array('id' => $id));

                           // $path = FCPATH .$img;
                           //   unlink($path);
                           if ($zapak!=0) {
                           $this->session->set_flashdata('smessage', 'Bannner image deleted successfully');
                           redirect("dcadmin/Bannerimages/view_bannerimages", "refresh");
                       } else {
                           $this->session->set_flashdata('emessage', 'Sorry error occured');
                           redirect($_SERVER['HTTP_REFERER']);
                       }
                   } else {
                       $this->session->set_flashdata('emessage', 'Sorry you not a super admin you dont have permission to delete anything');
                       redirect($_SERVER['HTTP_REFERER']);
                   }
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }
           public function view_Image_two()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;
                   $this->db->select('*');
                   $this->db->from('tbl_image_two');
                   // $this->db->where('_id',$id);
                   $data['image_two']= $this->db->get();


                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/bannerimages/view_two_image');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function add_two_images()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;


                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/bannerimages/add_two_image');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }


           public function add_two_image($t, $iw="")
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $this->load->helper(array('form', 'url'));
                   $this->load->library('form_validation');
                   $this->load->helper('security');
                   if ($this->input->post()) {
                       // print_r($this->input->post());
                       // exit;
                       $this->form_validation->set_rules('heading_first', 'heading_first', 'required|xss_clean');
                       // $this->form_validation->set_rules('heading_second', 'heading_second', 'required|xss_clean');
                       $this->form_validation->set_rules('link_first', 'link_first', 'required|xss_clean');
                       $this->form_validation->set_rules('link_second', 'link_second', 'required|xss_clean');


                       if ($this->form_validation->run()== true) {
                           $heading_first=$this->input->post('heading_first');
                           // $heading_second=$this->input->post('heading_second');
                           $link_first=$this->input->post('link_first');
                           $link_second=$this->input->post('link_second');

                           $img1='image_first';

                           $file_check=($_FILES['image_first']['error']);
                           if ($file_check!=4) {
                               $image_upload_folder = FCPATH . "assets/uploads/image_first/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="image_first".date("Ymdhms");
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
                                   $this->session->set_flashdata('emessage', $upload_error);
                                   redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/image_first/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   // $nnnn=$file_info['file_name'];
                                   $nnnn1=$videoNAmePath;
                                   // echo json_encode($file_info);
                               }
                           }
                           $img2='image_two';

                           $file_check=($_FILES['image_two']['error']);
                           if ($file_check!=4) {
                               $image_upload_folder = FCPATH . "assets/uploads/image_two/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="image_two".date("Ymdhms");
                               $this->upload_config = array(
                                'upload_path'   => $image_upload_folder,
                                'file_name' => $new_file_name,
                                'allowed_types' =>'jpg|jpeg|png',
                                'max_size'      => 25000
                        );
                               $this->upload->initialize($this->upload_config);
                               if (!$this->upload->do_upload($img2)) {
                                   $upload_error = $this->upload->display_errors();
                                   // echo json_encode($upload_error);
                                   $this->session->set_flashdata('emessage', $upload_error);
                                   redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/image_two/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   // $nnnn=$file_info['file_name'];
                                   $nnnn2=$videoNAmePath;
                                   // echo json_encode($file_info);
                               }
                           }









                           $ip = $this->input->ip_address();
                           date_default_timezone_set("Asia/Calcutta");
                           $cur_date=date("Y-m-d H:i:s");

                           $addedby=$this->session->userdata('admin_id');

                           $typ=base64_decode($t);
                           if ($typ==1) {
                               $data_insert = array('image_first'=>$nnnn1,
                                      'heading_first'=>$heading_first,
                                      'image_two'=>$nnnn2,
                                      // 'heading_two'=>$heading_second,
                                      'link_first'=>$link_first,
                                      'link_second'=>$link_second,

                                      'heading_two'=>$heading_second,

                                      'ip' =>$ip,
                                      'added_by' =>$addedby,
                                      'is_active' =>1,
                                      'date'=>$cur_date

                                      );





                               $last_id=$this->base_model->insert_table("tbl_image_two", $data_insert, 1) ;
                               if ($last_id!=0) {
                                   $this->session->set_flashdata('smessage', 'Data inserted successfully');
                                   redirect("dcadmin/Bannerimages/view_Image_two ", "refresh");
                               }
                           }
                           if ($typ==2) {
                               $idw=base64_decode($iw);

                               // $this->db->select('*');
                               //     $this->db->from('tbl_minor_category');
                               //    $this->db->where('name',$name);
                               //     $damm= $this->db->get();
                               //    foreach($damm->result() as $da) {
                               //      $uid=$da->id;
                               // if($uid==$idw)
                               // {
                               //
                               //  }
                               // else{
                               //    echo "Multiple Entry of Same Name";
                               //       exit;
                               //  }
                               //     }


                               $this->db->select('*');
                               $this->db->from('tbl_image_two');
                               $this->db->where('id', $idw);
                               $dsa= $this->db->get();
                               $da=$dsa->row();

                               if (!empty($nnnn1)) {
                                   $n1=$nnnn1;
                               } else {
                                   $n1=$da->image_first;
                               }
                               if (!empty($nnnn2)) {
                                   $n2=$nnnn2;
                               } else {
                                   $n2=$da->image_two;
                               }


                               $data_insert = array('image_first'=>$n1,
                                                                  'heading_first'=>$heading_first,
                                                                  'image_two'=>$n2,
                                                                  // 'heading_two'=>$heading_second,
                                                                  'link_first'=>$link_first,
                                                                  'link_second'=>$link_second,

                                                                  // 'heading_two'=>$heading_second
                                      );
                               $this->db->where('id', $idw);
                               $last_id=$this->db->update('tbl_image_two', $data_insert);
                           }
                           if ($last_id!=0) {
                               $this->session->set_flashdata('smessage', 'Data updated successfully');
                               redirect("dcadmin/Bannerimages/view_Image_two ", "refresh");
                           } else {
                               $this->session->set_flashdata('emessage', 'Sorry error occured');
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
                   redirect("login/admin_login", "refresh");
               }
           }

           public function update_two_image($idd)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;
                   $id=base64_decode($idd);
                   $data['id']=$idd;

                   $this->db->select('*');
                   $this->db->from('tbl_image_two');
                   $this->db->where('id', $id);
                   $data['image_two']= $this->db->get()->row();


                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/bannerimages/update_two_image');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function delete_two_image($idd)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;
                   $id=base64_decode($idd);

                   if ($this->load->get_var('position')=="Super Admin") {
                       $zapak=$this->db->delete('tbl_image_two', array('id' => $id));
                       if ($zapak!=0) {
                           $this->session->set_flashdata('smessage', 'Bannner image deleted successfully');
                           redirect("dcadmin/Bannerimages/view_Image_two", "refresh");
                       } else {
                           echo "Error";
                           exit;
                       }
                   } else {
                       $data['e']="Sorry You Don't Have Permission To Delete Anything.";
                       // exit;
                       $this->load->view('errors/error500admin', $data);
                   }
               } else {
                   $this->load->view('admin/login/index');
               }
           }
           public function updateimageStatus($idd, $t)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;
                   $id=base64_decode($idd);

                   if ($t=="active") {
                       $data_update = array(
                                             'is_active'=>1
                                             );
                       $this->db->where('id', $id);
                       $zapak=$this->db->update('tbl_image_two', $data_update);
                       if ($zapak!=0) {
                           $this->session->set_flashdata('smessage', 'Status updated successfully');
                           redirect("dcadmin/Bannerimages/view_Image_two", "refresh");
                       } else {
                           echo "Error";
                           exit;
                       }
                   }
                   if ($t=="inactive") {
                       $data_update = array(
                                              'is_active'=>0
                                              );
                       $this->db->where('id', $id);
                       $zapak=$this->db->update('tbl_image_two', $data_update);

                       if ($zapak!=0) {
                           $this->session->set_flashdata('smessage', 'Status updated successfully');
                           redirect("dcadmin/Bannerimages/view_Image_two", "refresh");
                       } else {
                           $data['e']="Error Occured";
                           // exit;
                           $this->load->view('errors/error500admin', $data);
                       }
                   }
               } else {
                   $this->load->view('admin/login/index');
               }
           }
       }
