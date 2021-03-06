<?php
		if ( ! defined('BASEPATH')) exit('No direct script access allowed');
			 require_once(APPPATH . 'core/CI_finecontrol.php');
			 class Contactus extends CI_finecontrol{
			 function __construct()
					 {
						 parent::__construct();
						 $this->load->model("login_model");
						 $this->load->model("admin/base_model");
						 $this->load->library('user_agent');
						 $this->load->library('upload');
					 }

				 public function view_contactus(){

						if(!empty($this->session->userdata('admin_data'))){


							$data['user_name']=$this->load->get_var('user_name');

							// echo SITE_NAME;
							// echo $this->session->userdata('image');
							// echo $this->session->userdata('position');
							// exit;

													 $this->db->select('*');
							 $this->db->from('tbl_contactus');
							 //$this->db->where('id',$usr);
							 $data['contactus_data']= $this->db->get();

							$this->load->view('admin/common/header_view',$data);
							$this->load->view('admin/contactus/view_contactus');
							$this->load->view('admin/common/footer_view');

					}
					else{

						 redirect("login/admin_login","refresh");
					}

					}

							public function add_contactus(){

								 if(!empty($this->session->userdata('admin_data'))){

									 $this->load->view('admin/common/header_view');
									 $this->load->view('admin/contactus/add_contactus');
									 $this->load->view('admin/common/footer_view');

							 }
							 else{

									redirect("login/admin_login","refresh");
							 }

							 }

							 public function update_contactus($idd){

									 if(!empty($this->session->userdata('admin_data'))){


										 $data['user_name']=$this->load->get_var('user_name');

										 // echo SITE_NAME;
										 // echo $this->session->userdata('image');
										 // echo $this->session->userdata('position');
										 // exit;

											$id=base64_decode($idd);
										 $data['id']=$idd;

														$this->db->select('*');
														$this->db->from('tbl_contactus');
														$this->db->where('id',$id);
														$data['contactus_data']= $this->db->get()->row();


										 $this->load->view('admin/common/header_view',$data);
										 $this->load->view('admin/contactus/update_contactus');
										 $this->load->view('admin/common/footer_view');

								 }
								 else{

										redirect("login/admin_login","refresh");
								 }

								 }

						 public function add_contactus_data($t,$iw="")

							 {

								 if(!empty($this->session->userdata('admin_data'))){


						 $this->load->helper(array('form', 'url'));
						 $this->load->library('form_validation');
						 $this->load->helper('security');
						 if($this->input->post())
						 {
							 // print_r($this->input->post());
							 // exit;
	$this->form_validation->set_rules('name', 'name', 'customAlpha|required');
	$this->form_validation->set_rules('contact', 'contact', 'min_length[10]|max_length[10]|integer|required');
	$this->form_validation->set_rules('email', 'email', 'required|valid_email');





							 if($this->form_validation->run()== TRUE)
							 {
	$name=$this->input->post('name');
	$contact=$this->input->post('contact');
	$email=$this->input->post('email');

									 $ip = $this->input->ip_address();
									 date_default_timezone_set("Asia/Calcutta");
									 $cur_date=date("Y-m-d H:i:s");
									 $addedby=$this->session->userdata('admin_id');

					 $typ=base64_decode($t);
					 $last_id = 0;
					 if($typ==1){



					 $data_insert = array(
									'name'=>$name,
	'contact'=>$contact,
	'email'=>$email,

										 'ip' =>$ip,
										 'added_by' =>$addedby,
										 'is_active' =>1,
										 'date'=>$cur_date
										 );


					 $last_id=$this->base_model->insert_table("tbl_contactus",$data_insert,1) ;

					 }
					 if($typ==2){

		$idw=base64_decode($iw);


 $this->db->select('*');
 $this->db->from('tbl_contactus');
 $this->db->where('id',$idw);
 $dsa=$this->db->get();
 $da=$dsa->row();





					 $data_insert = array(
									'name'=>$name,
	'contact'=>$contact,
	'email'=>$email,

										 );
						 $this->db->where('id', $idw);
						 $last_id=$this->db->update('tbl_contactus', $data_insert);
					 }
											 if($last_id!=0){
															 $this->session->set_flashdata('smessage','Data inserted successfully');
															 redirect("dcadmin/contactus/view_contactus","refresh");
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

							 public function updatecontactusStatus($idd,$t){

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
											 $zapak=$this->db->update('tbl_contactus', $data_update);

														if($zapak!=0){
														redirect("dcadmin/contactus/view_contactus","refresh");
																		}
																		else
																		{
				$this->session->set_flashdata('emessage','Sorry error occured');
					redirect($_SERVER['HTTP_REFERER']);
																		}
													}
													if($t=="inactive"){
														$data_update = array(
												 'is_active'=>0

												 );

												 $this->db->where('id', $id);
												 $zapak=$this->db->update('tbl_contactus', $data_update);

														 if($zapak!=0){
														 redirect("dcadmin/contactus/view_contactus","refresh");
																		 }
																		 else
																		 {

								$this->session->set_flashdata('emessage','Sorry error occured');
									redirect($_SERVER['HTTP_REFERER']);
																		 }
													}



											}
											else{

												 redirect("login/admin_login","refresh");

											}

											}



							 public function delete_contactus($idd){

											if(!empty($this->session->userdata('admin_data'))){

												$data['user_name']=$this->load->get_var('user_name');

												// echo SITE_NAME;
												// echo $this->session->userdata('image');
												// echo $this->session->userdata('position');
												// exit;
												$id=base64_decode($idd);

											 if($this->load->get_var('position')=="Super Admin"){


 $zapak=$this->db->delete('tbl_contactus', array('id' => $id));
 if($zapak!=0){

				redirect("dcadmin/contactus/view_contactus","refresh");
								}
								else
								{
									 $this->session->set_flashdata('emessage','Sorry error occured');
									 redirect($_SERVER['HTTP_REFERER']);
								}
						}
						else{
						 $this->session->set_flashdata('emessage','Sorry you not a super admin you dont have permission to delete anything');
							 redirect($_SERVER['HTTP_REFERER']);
						}


														}
														else{

												redirect("login/admin_login","refresh");

														}

														}
											}

			?>
