<?php

    if (! defined('BASEPATH')) {
        exit('No direct script access allowed');
    }
       require_once(APPPATH . 'core/CI_finecontrol.php');
       class Products extends CI_finecontrol
       {
           public function __construct()
           {
               parent::__construct();
               $this->load->model("login_model");
               $this->load->model("admin/base_model");
               $this->load->library('user_agent');
               $this->load->library('upload');
           }

           public function view_products()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');



                   $this->db->select('*');
                   $this->db->from('tbl_products');
                   //$this->db->where('id',$usr);
                   $data['products_data']= $this->db->get();

                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/products/view_products');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function add_products()
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $this->db->select('*');
                   $this->db->from('tbl_category');
                   $this->db->where('is_active', 1);
                   $data['category_data']= $this->db->get();

                   $this->db->select('*');
                   $this->db->from('tbl_subcategory');
                   $this->db->where('is_active', 1);
                   //$this->db->where('id',$usr);
                   $data['subcategory_data']= $this->db->get();


                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/products/add_products');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function getSubcategory()
              {

                  $id=$_POST['ids'];
                  $new_var=count($id);

                  $this->db->select('*');
                  $this->db->from('tbl_subcategory');
                  //$this->db->where('category',$id);
                  $this->db->where('is_active', 1);
                  foreach ($id as $value) {
                      $i=2;
                      if ($new_var > $i) {
                          $this->db->or_where('category', $value);
                      } else {

                          $this->db->where('category', $value);

                          $this->db->or_where('category', $value);
                      }
                  }

                  $dat= $this->db->get();


                  $i=1;
                  foreach ($dat->result() as $data) {
                      $igt[] = array('sub_id' =>$data->id ,'sub_name'=>$data->subcategory);
                  }

                  echo json_encode($igt);
              }


           public function update_products($idd)
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
                   $this->db->from('tbl_products');
                   $this->db->where('id', $id);
                   $data['products_data']= $this->db->get()->row();


                   $this->db->select('*');
                   $this->db->from('tbl_category');
                   // $this->db->where('id',$id);
                   $data['category_data']= $this->db->get();

                   $this->db->select('*');
                   $this->db->from('tbl_subcategory');
                   //$this->db->where('id',$usr);
                   $data['subcategory_data']= $this->db->get();

                   $this->load->view('admin/common/header_view', $data);
                   $this->load->view('admin/products/update_products');
                   $this->load->view('admin/common/footer_view');
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }

           public function add_products_data($t, $iw="")
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $this->load->helper(array('form', 'url'));
                   $this->load->library('form_validation');
                   $this->load->helper('security');
                   if ($this->input->post()) {
                       // print_r($this->input->post());
                       // exit;
                       $this->form_validation->set_rules('productname', 'productname', 'required');
                       $this->form_validation->set_rules('is_category', 'is_category', 'required');
                       $this->form_validation->set_rules('categorys', 'categorys');
                       $this->form_validation->set_rules('sub_category', 'sub_category');
                       $this->form_validation->set_rules('mrp', 'mrp', 'required|integer');
                       $this->form_validation->set_rules('s_description', 's_description', 'required');
                       $this->form_validation->set_rules('productdescription', 'productdescription', 'required');
                       $this->form_validation->set_rules('modelno', 'modelno', 'required|trim');
                       $this->form_validation->set_rules('inventory', 'inventory', 'trim');
                       $this->form_validation->set_rules('feature', 'feature', 'required|trim');
                       $this->form_validation->set_rules('careinstruction', 'careinstruction', 'required|trim');
                       $this->form_validation->set_rules('bestsellerproduct', 'bestsellerproduct', 'required|trim');





                       if ($this->form_validation->run()== true) {
                           $productname=$this->input->post('productname');
                           $is_category=$this->input->post('is_category');
                           $categorys=$this->input->post('categorys');
                            $subcategory=$this->input->post('sub_category');
                            if($is_category==0){
                           $subcategory_data= json_encode($subcategory);

                           $this->db->select('*');
                           $this->db->from('tbl_subcategory');
                           $i=1;
                           foreach ($subcategory as $value) {
                               $this->db->or_where('id', $value);
                               $i++;
                           }


                           $data_subcategory= $this->db->get();


                           $category_data=[];
                           $i=1;
                           foreach ($data_subcategory->result() as $value1) {
                               if ($i>1) {
                                   foreach ($category_data as $value) {
                                       if ($value!=$value1->category_id) {
                                           $category_data[]=  $value1->category_id;
                                       }
                                   }
                               } else {
                                   $category_data[]=  $value1->category_id;
                               }
                               $i++;
                           }


                           $data_cat=json_encode($category_data);
}else{
  $data_cat=json_encode($categorys);
  $subcategory_data= " ";
}



                           $mrp=$this->input->post('mrp');
                           $selling_price=$this->input->post('selling_price');
                           $s_description=$this->input->post('s_description');
                           $productdescription=$this->input->post('productdescription');
                           $modelno=$this->input->post('modelno');
                           $inventory=$this->input->post('inventory');
                           $feature=$this->input->post('feature');
                           $careinstruction=$this->input->post('careinstruction');
                           $bestsellerproduct=$this->input->post('bestsellerproduct');

                           $ip = $this->input->ip_address();
                           date_default_timezone_set("Asia/Calcutta");
                           $cur_date=date("Y-m-d H:i:s");
                           $addedby=$this->session->userdata('admin_id');
                           $nnnn3 = "";
                           $nnnn4 = "";
                           $nnnn5 = "";
                           $typ=base64_decode($t);
                           $last_id = 0;
                           if ($typ==1) {
                               $img2='image';




                               $image_upload_folder = FCPATH . "assets/uploads/products/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="products".date("Ymdhms");
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

           //$this->session->set_flashdata('emessage',$upload_error);
             //redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/products/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   $nnnn=$file_info['file_name'];
                                   $nnnn2=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }




                               $img3='image1';




                               $image_upload_folder = FCPATH . "assets/uploads/products/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="products1".date("Ymdhms");
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

           //$this->session->set_flashdata('emessage',$upload_error);
             //redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/products/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   $nnnn=$file_info['file_name'];
                                   $nnnn3=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }




                               $img4='image2';




                               $image_upload_folder = FCPATH . "assets/uploads/products/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="products2".date("Ymdhms");
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

           //$this->session->set_flashdata('emessage',$upload_error);
             //redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/products/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   $nnnn=$file_info['file_name'];
                                   $nnnn4=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }




                               $img5='image3';




                               $image_upload_folder = FCPATH . "assets/uploads/products/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="products3".date("Ymdhms");
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

           //$this->session->set_flashdata('emessage',$upload_error);
             //redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/products/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   $nnnn=$file_info['file_name'];
                                   $nnnn5=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }




                               $data_insert = array(
                  'productname'=>$productname,
                  'is_category'=>$is_category,
                  'category'=>$data_cat,
'subcategory'=>$subcategory_data,
  'image'=>$nnnn2,
  'image1'=>$nnnn3,
  'image2'=>$nnnn4,
  'image3'=>$nnnn5,
  'mrp'=>$mrp,
  'selling_price'=>$selling_price,
  's_description'=>$s_description,
  'productdescription'=>$productdescription,
  'modelno'=>$modelno,
  'feature'=>$feature,
  'careinstruction'=>$careinstruction,
  'bestsellerproduct'=>$bestsellerproduct,
  'inventory'=>$inventory,

                     'ip' =>$ip,
                     'added_by' =>$addedby,
                     'is_active' =>1,
                     'date'=>$cur_date
                     );


                               $last_id=$this->base_model->insert_table("tbl_products", $data_insert, 1) ;
                           }
                           if ($typ==2) {
                               $idw=base64_decode($iw);


                               $this->db->select('*');
                               $this->db->from('tbl_products');
                               $this->db->where('id', $idw);
                               $dsa=$this->db->get();
                               $da=$dsa->row();



                               $img2='image';




                               $image_upload_folder = FCPATH . "assets/uploads/products/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="products".date("Ymdhms");
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

           //$this->session->set_flashdata('emessage',$upload_error);
             //redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/products/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   $nnnn=$file_info['file_name'];
                                   $nnnn2=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }




                               $img3='image1';




                               $image_upload_folder = FCPATH . "assets/uploads/products/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="products1".date("Ymdhms");
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

           //$this->session->set_flashdata('emessage',$upload_error);
             //redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/products/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   $nnnn=$file_info['file_name'];
                                   $nnnn3=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }




                               $img4='image2';




                               $image_upload_folder = FCPATH . "assets/uploads/products/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="products2".date("Ymdhms");
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

           //$this->session->set_flashdata('emessage',$upload_error);
             //redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/products/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   $nnnn=$file_info['file_name'];
                                   $nnnn4=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }




                               $img5='image3';




                               $image_upload_folder = FCPATH . "assets/uploads/products/";
                               if (!file_exists($image_upload_folder)) {
                                   mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                               }
                               $new_file_name="products3".date("Ymdhms");
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

           //$this->session->set_flashdata('emessage',$upload_error);
             //redirect($_SERVER['HTTP_REFERER']);
                               } else {
                                   $file_info = $this->upload->data();

                                   $videoNAmePath = "assets/uploads/products/".$new_file_name.$file_info['file_ext'];
                                   $file_info['new_name']=$videoNAmePath;
                                   // $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
                                   $nnnn=$file_info['file_name'];
                                   $nnnn5=$videoNAmePath;

                                   // echo json_encode($file_info);
                               }




                               if (!empty($da)) {
                                   $img = $da ->image;
                                   if (!empty($img)) {
                                       if (empty($nnnn2)) {
                                           $nnnn2 = $img;
                                       }
                                   } else {
                                       if (empty($nnnn2)) {
                                           $nnnn2= "";
                                       }
                                   }
                               }
                               if (!empty($da)) {
                                   $img = $da ->image1;
                                   if (!empty($img)) {
                                       if (empty($nnnn3)) {
                                           $nnnn3 = $img;
                                       }
                                   } else {
                                       if (empty($nnnn3)) {
                                           $nnnn3= "";
                                       }
                                   }
                               }
                               if (!empty($da)) {
                                   $img = $da ->image2;
                                   if (!empty($img)) {
                                       if (empty($nnnn4)) {
                                           $nnnn4 = $img;
                                       }
                                   } else {
                                       if (empty($nnnn4)) {
                                           $nnnn4= "";
                                       }
                                   }
                               }
                               if (!empty($da)) {
                                   $img = $da ->image3;
                                   if (!empty($img)) {
                                       if (empty($nnnn5)) {
                                           $nnnn5 = $img;
                                       }
                                   } else {
                                       if (empty($nnnn5)) {
                                           $nnnn5= "";
                                       }
                                   }
                               }

                               $data_insert = array(
                  'productname'=>$productname,
                  'is_category'=>$is_category,
                  'category'=>$data_cat,
  'subcategory'=>$subcategory_data,
  'image'=>$nnnn2,
  'image1'=>$nnnn3,
  'image2'=>$nnnn4,
  'image3'=>$nnnn5,
  'mrp'=>$mrp,
  'selling_price'=>$selling_price,
  's_description'=>$s_description,
  'productdescription'=>$productdescription,
  'modelno'=>$modelno,
  'feature'=>$feature,
  'careinstruction'=>$careinstruction,
  'bestsellerproduct'=>$bestsellerproduct,
  'inventory'=>$inventory


                     );
                               $this->db->where('id', $idw);
                               $last_id=$this->db->update('tbl_products', $data_insert);
                           }
                           if ($last_id!=0) {
                               $this->session->set_flashdata('smessage', 'Data inserted successfully');
                               redirect("dcadmin/products/view_products", "refresh");
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

           public function updateproductsStatus($idd, $t)
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
                       $zapak=$this->db->update('tbl_products', $data_update);

                       if ($zapak!=0) {
                           redirect("dcadmin/products/view_products", "refresh");
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
                       $zapak=$this->db->update('tbl_products', $data_update);

                       if ($zapak!=0) {
                           redirect("dcadmin/products/view_products", "refresh");
                       } else {
                           $this->session->set_flashdata('emessage', 'Sorry error occured');
                           redirect($_SERVER['HTTP_REFERER']);
                       }
                   }
               } else {
                   redirect("login/admin_login", "refresh");
               }
           }



           public function delete_products($idd)
           {
               if (!empty($this->session->userdata('admin_data'))) {
                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;
                   $id=base64_decode($idd);

                   if ($this->load->get_var('position')=="Super Admin") {
                       $this->db->select('image');
                       $this->db->from('tbl_products');
                       $this->db->where('id', $id);
                       $dsa= $this->db->get();
                       $da=$dsa->row();
                       $img=$da->image;

                       $zapak=$this->db->delete('tbl_products', array('id' => $id));
                       if ($zapak!=0) {
                           $path = FCPATH .$img;
                           unlink($path);
                           redirect("dcadmin/products/view_products", "refresh");
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
       }
