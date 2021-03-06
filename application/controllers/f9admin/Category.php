<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . 'core/CI_finecontrol.php');
class Category extends CI_finecontrol{
function __construct()
		{
			parent::__construct();
			$this->load->model("login_model");
			$this->load->model("admin/base_model");
			$this->load->library('user_agent');
		}


    public function view_category(){

                     if(!empty($this->session->userdata('admin_data'))){


                       $data['user_name']=$this->load->get_var('user_name');

                       // echo SITE_NAME;
                       // echo $this->session->userdata('image');
                       // echo $this->session->userdata('position');
                       // exit;

											       			$this->db->select('*');
											 $this->db->from('tbl_category');
											 //$this->db->where('id',$usr);
											 $data['category_data']= $this->db->get();


                       $this->load->view('admin/common/header_view',$data);
                       $this->load->view('admin/category/view_category');
                       $this->load->view('admin/common/footer_view');

                   }
                   else{

                      redirect("login/admin_login","refresh");
                   }

                   }

public function add_category(){

                 if(!empty($this->session->userdata('admin_data'))){


                   $data['user_name']=$this->load->get_var('user_name');

                   // echo SITE_NAME;
                   // echo $this->session->userdata('image');
                   // echo $this->session->userdata('position');
                   // exit;


                   $this->load->view('admin/common/header_view',$data);
                   $this->load->view('admin/category/add_category');
                   $this->load->view('admin/common/footer_view');

               }
               else{

                  redirect("login/admin_login","refresh");
               }

               }

      			public function add_category_data($t,$iw="")

              {

                if(!empty($this->session->userdata('admin_data'))){


          	$this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->helper('security');
            if($this->input->post())
            {

              $this->form_validation->set_rules('categoryname', 'categoryname', 'required|xss_clean|trim');

              if($this->form_validation->run()== TRUE)
              {
                $categoryname=$this->input->post('categoryname');
								$nnn="";
								$nnn1="";
								// Load library
								$this->load->library('upload');

								$img2='image';

								            $file_check=($_FILES['image']['error']);
								            if($file_check!=4){
								          	$image_upload_folder = FCPATH . "assets/uploads/category/";
								  						if (!file_exists($image_upload_folder))
								  						{
								  							mkdir($image_upload_folder, DIR_WRITE_MODE, true);
								  						}
								  						$new_file_name="category".date("Ymdhms");
								  						$this->upload_config = array(
								  								'upload_path'   => $image_upload_folder,
								  								'file_name' => $new_file_name,
								  								'allowed_types' =>'jpg|jpeg|png',
								  								'max_size'      => 25000
								  						);
								  						$this->upload->initialize($this->upload_config);
								  						if (!$this->upload->do_upload($img2))
								  						{
								  							$upload_error = $this->upload->display_errors();
								  							// echo json_encode($upload_error);
																$this->session->set_flashdata('emessage','Sorry error occured');
															 	 redirect($_SERVER['HTTP_REFERER']);
								  						}
								  						else
								  						{

								  							$file_info = $this->upload->data();

								  							$image = "assets/uploads/category/".$new_file_name.$file_info['file_ext'];
								  							// $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
								  							$nnn=$image;
								  							// echo json_encode($file_info);
								  						}
								            }
								$img3='image2';

								            $file_check=($_FILES['image2']['error']);
								            if($file_check!=4){
								          	$image_upload_folder = FCPATH . "assets/uploads/category/";
								  						if (!file_exists($image_upload_folder))
								  						{
								  							mkdir($image_upload_folder, DIR_WRITE_MODE, true);
								  						}
								  						$new_file_name="category1".date("Ymdhms");
								  						$this->upload_config = array(
								  								'upload_path'   => $image_upload_folder,
								  								'file_name' => $new_file_name,
								  								'allowed_types' =>'jpg|jpeg|png',
								  								'max_size'      => 25000
								  						);
								  						$this->upload->initialize($this->upload_config);
								  						if (!$this->upload->do_upload($img3))
								  						{
								  							$upload_error = $this->upload->display_errors();
								  							// echo json_encode($upload_error);
																$this->session->set_flashdata('emessage','Sorry error occured');
																	redirect($_SERVER['HTTP_REFERER']);
								  						}
								  						else
								  						{

								  							$file_info = $this->upload->data();

								  							$image2 = "assets/uploads/category/".$new_file_name.$file_info['file_ext'];
								  							// $this->step6_model->updateappIconImage($imageNAmePath,$appInfoId);
								  							$nnn1=$image2;
								  							// echo json_encode($file_info);
								  						}
								            }

                  // $banner = time() . '_' . $_FILES["image"]["name"];
					        // $liciense_tmp_name = $_FILES["image"]["tmp_name"];
					        // $error = $_FILES["image"]["error"];
					        // $liciense_path = 'assets/admin/category/' . $banner;
					        // move_uploaded_file($liciense_tmp_name, $liciense_path);
					        // $image = $liciense_path;



                  $ip = $this->input->ip_address();
          date_default_timezone_set("Asia/Calcutta");
                  $cur_date=date("Y-m-d H:i:s");

                  $addedby=$this->session->userdata('admin_id');
									$cat = explode(" ", $categoryname);
									$url = implode("-", $cat);
          $typ=base64_decode($t);
          if($typ==1){

          $data_insert = array('categoryname'=>$categoryname,
                    'image'=>$nnn,
                    'image2'=>$nnn1,
                    'url'=>$url,
                    'added_by' =>$addedby,
                    'is_active' =>1,
                    'date'=>$cur_date
                    );

          $last_id=$this->base_model->insert_table("tbl_category",$data_insert,1) ;
					if($last_id!=0){
					$this->session->set_flashdata('smessage','Data inserted successfully');
					redirect("dcadmin/category/view_category","refresh");
									}
          }
          if($typ==2){

   $idw=base64_decode($iw);
	 $this->db->select('*');
	             $this->db->from('tbl_category');
	             $this->db->where('id',$idw);
	             $dsa= $this->db->get();
	             $da=$dsa->row();

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

if(!empty($image)){
	$n1=$image;
}else{
	$n1=$da->image;
}
if(!empty($nnn1)){
	$n2=$nnn1;
}else{
	$n2=$da->image2;
}

          $data_insert = array('categoryname'=>$categoryname,
                    'image'=>$n1,
                    'image2'=>$n2,
                    'url'=>$url,
                    );


          	$this->db->where('id', $idw);
            $last_id=$this->db->update('tbl_category', $data_insert);

          }
                              if($last_id!=0){
                              $this->session->set_flashdata('smessage','Data updated successfully');
                              redirect("dcadmin/category/view_category","refresh");
                                      }
                                      else
                                      {
                                	 $this->session->set_flashdata('emessage','Sorry error occured');
                              		   redirect($_SERVER['HTTP_REFERER']);
                                      }
              }
            else{
$this->session->set_flashdata('emessage',validation_errors());
     redirect($_SERVER['HTTP_REFERER']);
            }
            }
          else{
$this->session->set_flashdata('emessage','Please insert some data, No data available');
     redirect($_SERVER['HTTP_REFERER']);
          }
          }
          else{
			redirect("login/admin_login","refresh");
          }
          }
					public function update_category($idd){

					                 if(!empty($this->session->userdata('admin_data'))){


					                   $data['user_name']=$this->load->get_var('user_name');

					                   // echo SITE_NAME;
					                   // echo $this->session->userdata('image');
					                   // echo $this->session->userdata('position');
					                   // exit;

														  $id=base64_decode($idd);
														 $data['id']=$idd;

														 $this->db->select('*');
														             $this->db->from('tbl_category');
														             $this->db->where('id',$id);
														             $dsa= $this->db->get();
														             $data['category']=$dsa->row();


					                   $this->load->view('admin/common/header_view',$data);
					                   $this->load->view('admin/category/update_category');
					                   $this->load->view('admin/common/footer_view');

					               }
					               else{

					                  redirect("login/admin_login","refresh");
					               }

					               }

public function delete_category($idd){

       if(!empty($this->session->userdata('admin_data'))){


         $data['user_name']=$this->load->get_var('user_name');

         // echo SITE_NAME;
         // echo $this->session->userdata('image');
         // echo $this->session->userdata('position');
         // exit;
				 $id=base64_decode($idd);

				 if ($this->load->get_var('position')=="Super Admin") {
						 $zapak=$this->db->delete('tbl_category', array('id' => $id));
								 $this->db->select('*');
								 $this->db->from('tbl_subcategory');
								 $this->db->like('category_id', $id);
								 $sub_data= $this->db->get();

								 foreach ($sub_data->result() as $subcat) {
										 $sub_delete=$this->db->delete('tbl_subcategory', array('id' => $subcat->id));
										 $this->db->select('*');
										 $this->db->from('tbl_products');
										 $this->db->like('subcategory', $subcat->id);
										 $product_data= $this->db->get();
										 foreach ($product_data->result() as $pro) {
												 $sub = json_decode($pro->subcategory);
												 $i=0;
												 foreach ($sub as $value) {
														 if ($value==$id) {
																 $i=1;
														 }
												 }
												 if ($i==1) {
														 if (count($sub)==1) {
																 $delete=$this->db->delete('tbl_products', array('id' => $pro->id));
																 // $delete2=$this->db->delete('tbl_type', array('product_id' => $pro->id));
														 } else {
																 if (($key = array_search($id, $sub)) !== false) {
																		 unset($sub[$key]);
																		 $data_update = array('subcategory'=>json_encode($sub));
																		 $this->db->where('id', $pro->id);
																		 $zapak=$this->db->update('tbl_products', $data_update);
																 }
														 }
												 }
										 }
								 }

						 if ($zapak!=0) {
						 $this->session->set_flashdata('smessage', 'Category deleted successfully');
								 redirect("dcadmin/Category/view_category", "refresh");
						 } else {
							 $this->session->set_flashdata('emessage', 'Some unknown error occured');
				 redirect($_SERVER['HTTP_REFERER']);
						 }
				 } else {
					 $this->session->set_flashdata('emessage', 'Sorry You Dont Have Permission To Delete Anything');
			 redirect($_SERVER['HTTP_REFERER']);
				 }
		 } else {
				 $this->session->set_flashdata('emessage', 'Sorry you not a super admin you dont have permission to delete anything');
				 redirect($_SERVER['HTTP_REFERER']);
		 }
	 }
public function updatecategoryStatus($idd,$t){

         if(!empty($this->session->userdata('admin_data'))){


           $data['user_name']=$this->load->get_var('user_name');

           // echo SITE_NAME;
           // echo $this->session->userdata('image');
           // echo $this->session->userdata('position');
           // exit;
           $id=base64_decode($idd);

           if($t=="active"){

             $data_update = array(
         'is_active'=>1

         );

         $this->db->where('id', $id);
        $zapak=$this->db->update('tbl_category', $data_update);

             if($zapak!=0){
							 $this->session->set_flashdata('smessage','Status updated successfully');
             redirect("dcadmin/category/view_category","refresh");
                     }
                     else
                     {
                       echo "Error";
                       exit;
                     }
           }
           if($t=="inactive"){
             $data_update = array(
          'is_active'=>0

          );

          $this->db->where('id', $id);
          $zapak=$this->db->update('tbl_category', $data_update);

              if($zapak!=0){
								$this->session->set_flashdata('smessage','Status updated successfully');
              redirect("dcadmin/category/view_category","refresh");
                      }
                      else
                      {
          $data['e']="Error Occured";
                          	// exit;
        	$this->load->view('errors/error500admin',$data);
                      }
           }
       }
       else{

           $this->load->view('admin/login/index');
       }

       }
}
