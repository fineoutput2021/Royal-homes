<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/login_model");
        $this->load->model("admin/base_model");
    }

    //-------------calculate--------------

    public function calculate()
    {
        if (!empty($this->session->userdata('user_data'))) {
            $user_id = $this->session->userdata('user_id');
            //---------get cart data----------------
            $this->db->select('*');
            $this->db->from('tbl_cart');
            $this->db->where('user_id', $user_id);
            $cartInfo= $this->db->get();
            $cart_e = $cartInfo->row();

            if (!empty($cart_e)) {
                $ip = $this->input->ip_address();
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d H:i:s");
                $total = 0;
                foreach ($cartInfo->result() as $cart) {
                    $price=0;
                    $this->db->select('*');
                    $this->db->from('tbl_products');
                    $this->db->where('id', $cart->product_id);
                    $pro_data= $this->db->get()->row();

                    //-----check inventory------
                    if (!empty($pro_data->inventory)) {
                        if ($pro_data->inventory >= $cart->quantity) {
                            $price = $pro_data->selling_price * $cart->quantity;
                            $total= $total + $price;
                        } else {
                            $this->session->set_flashdata('emessage', ''.$pro_data->productname.'  is out of stock');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    } else {
                        $this->session->set_flashdata('emessage', ''.$pro_data->productname.'  is out of stock');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                    $user_id = $this->session->userdata('user_id');
                    $final_amount = $total ;
                }
                //------order1 entry-------------
                $order1_insert = array('user_id'=>$user_id,
          'total_amount'=>$total,
          'final_amount'=>round($final_amount),
          'payment_status'=>0,
          'order_status'=>0,
          'ip' =>$ip,
          'date'=>$cur_date
          );

                $last_id=$this->base_model->insert_table("tbl_order1", $order1_insert, 1) ;

                if (!empty($last_id)) {

//---------------order2 entires-------------------
                    foreach ($cartInfo->result() as $cart2) {
                        $this->db->select('*');
                        $this->db->from('tbl_products');
                        $this->db->where('id', $cart2->product_id);
                        $pro_data= $this->db->get()->row();

                        $total = $pro_data->selling_price * $cart2->quantity;

                        $order2_insert = array('main_id'=>$last_id,
                        'product_id'=>$cart2->product_id,
                        'quantity'=>$cart2->quantity,
                        'mrp'=>$pro_data->mrp,
                        'selling_price'=>$pro_data->selling_price,
                        'total_amount'=>$total,
                        'date'=>$cur_date
                        );

                        $last_id2=$this->base_model->insert_table("tbl_order2", $order2_insert, 1);
                    }
                    if (!empty($last_id2)) {
                        $this->session->set_userdata('order_id', base64_encode($last_id));
                        redirect("Order/view_address", "refresh");
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured! Please try again');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $this->session->set_flashdata('emessage', 'Some error occured');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            } else {
                $this->session->set_flashdata('emessage', 'Please add product for process to checkout');
                redirect("Home/index", "refresh");
            }
        } else {
            redirect("Home/index", "refresh");
        }
    }

    ///-----------view address--------------

    public function view_address()
    {
        if (!empty($this->session->userdata('user_data')) && !empty($this->session->userdata('order_id'))) {
            $this->db->select('*');
            $this->db->from('tbl_pincode');
            $this->db->where('is_active', 1);
            $data['pincode_data']= $this->db->get();

            $this->load->view('frontend/common/header', $data);
            $this->load->view('frontend/address');
            $this->load->view('frontend/common/footer');
        } else {
            redirect("Home/index", "refresh");
        }
    }

    //-----add address----------------

    public function add_address()
    {
        if (!empty($this->session->userdata('user_data'))) {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->helper('security');
            if ($this->input->post()) {
                $this->form_validation->set_rules('name', 'name', 'required|xss_clean|trim');
                $this->form_validation->set_rules('email', 'email', 'required|xss_clean|trim');
                $this->form_validation->set_rules('phone', 'phone', 'required|xss_clean|trim');
                $this->form_validation->set_rules('pincode', 'pincode', 'required|xss_clean|trim');
                $this->form_validation->set_rules('address', 'address', 'required|xss_clean|trim');


                if ($this->form_validation->run()== true) {
                    $name=$this->input->post('name');
                    $email=$this->input->post('email');
                    $phone=$this->input->post('phone');
                    $pincode=$this->input->post('pincode');
                    $address=$this->input->post('address');
                    $user_id = $this->session->userdata('user_id');

                    $this->db->select('*');
                    $this->db->from('tbl_order1');
                    $this->db->where('user_id', $user_id);
                    $this->db->order_by('id', 'DESC');
                    $order_data= $this->db->get()->row();

                    //----calculate shipping charges-----
                    $this->db->select('*');
                    $this->db->from('tbl_pincode');
                    $this->db->like('pincode', $pincode);
                    $pin_data= $this->db->get()->row();

                    $pin= explode(",",$pin_data->pincode);
                    $i=0;
                    foreach ($pin as $value) {
                      if($value==$pincode){
                         $i=1;
                      }
                    }
                    if($i==1){
                    $shipping = $pin_data->shippingcharge;
                    $final_amount = $order_data->total_amount + $shipping;

                    $data_update = array(
                 'name'=>$name,
                 'email'=>$email,
                 'phone'=>$phone,
                 'pincode'=>$pincode,
                 'address'=>$address,
                 'delivery_charge'=>$shipping,
                 'final_amount'=>$final_amount,
                           );
                    $this->db->where('id', $order_data->id);
                    $zapak=$this->db->update('tbl_order1', $data_update);

                    if (!empty($zapak)) {
                        redirect("Order/view_checkout", "refresh");
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured! Please try again');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }else{
                  $this->session->set_flashdata('emessage', 'Sorry we are currently not delivering order at this pincode! Please try with different pincode');
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
            redirect("Home/index", "refresh");
        }
    }

    //--------view checkout---------

    public function view_checkout()
    {
        if (!empty($this->session->userdata('user_data')) && !empty($this->session->userdata('order_id'))) {
            $user_id = $this->session->userdata('user_id');

            $this->db->select('*');
            $this->db->from('tbl_order1');
            $this->db->where('user_id', $user_id);
            $this->db->order_by('id', 'DESC');
            $data['order_data']= $this->db->get()->row();

            $this->load->view('frontend/common/header', $data);
            $this->load->view('frontend/checkout');
            $this->load->view('frontend/common/footer');
        } else {
            redirect("Home/index", "refresh");
        }
    }

    //-----------apply promocode---------
    public function apply_promocode()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('promocode', 'promocode', 'required|xss_clean|trim');
            $this->form_validation->set_rules('order_id', 'order_id', 'required|xss_clean|trim');


            if ($this->form_validation->run()== true) {
                $promocode=$this->input->post('promocode');
                $order_id=$this->input->post('order_id');

                $promocode = strtoupper($promocode);
                $order_id=base64_decode($order_id);
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d");

                $this->db->select('*');
                $this->db->from('tbl_coupancode');
                $this->db->where('name', $promocode);
                $this->db->where('expdate >=', $cur_date);
                $promo_data= $this->db->get()->row();
                if (!empty($promo_data)) {
                    $this->db->select('*');
                    $this->db->from('tbl_order1');
                    $this->db->where('id', $order_id);
                    $order_data= $this->db->get()->row();
                    if (!empty($order_data)) {
                        //---calculating promocode discount-----
                        $total= $order_data->total_amount;
                        //------chech minimum order amount----------
                        if ($total>=$promo_data->minorder) {
                            $discount = $total * $promo_data->giftpercent;
                            //----calculating macx discount-------
                            if ($discount<=$promo_data->maxorder) {
                                $p_discount  = $discount;
                            } else {
                                $p_discount  = $promo_data->maxorder;
                            }
                            // echo $p_discount;
                            // exit;
                            $final_amount = $order_data->final_amount - $p_discount;
                            //----updating promode_id in tabel order1

                            $data_update = array('promocode_id'=>$promo_data->id,'p_discount'=>$p_discount,'final_amount'=>$final_amount);
                            $this->db->where('id', $order_id);
                            $zapak=$this->db->update('tbl_order1', $data_update);

                            if (!empty($zapak)) {
                                $respone['data'] = true;
                                $respone['data_message'] ="Promocode successfully applied";
                                echo json_encode($respone);
                            } else {
                                $respone['data'] = false;
                                $respone['data_message'] ="Some error occured! Please try again ";
                                echo json_encode($respone);
                            }
                        } else {
                            $respone['data'] = false;
                            $respone['data_message'] ="Please add more products for promocode";
                            echo json_encode($respone);
                        }
                    } else {
                        $respone['data'] = false;
                        $respone['data_message'] ="Some error occured";
                        echo json_encode($respone);
                    }
                } else {
                    $respone['data'] = false;
                    $respone['data_message'] ="Invalid Promocode";
                    echo json_encode($respone);
                }
            } else {
                $respone['data'] = false;
                $respone['data_message'] = validation_errors();
                echo json_encode($respone);
            }
        } else {
            $respone['data'] = false;
            $respone['data_message'] ="Please insert some data, No data available";
            echo json_encode($respone);
        }
    }

    //------remove promocode--------
    public function remove_promocode()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('order_id', 'order_id', 'required|xss_clean|trim');


            if ($this->form_validation->run()== true) {
                $order_id=$this->input->post('order_id');

                $order_id=base64_decode($order_id);
                $this->db->select('*');
                $this->db->from('tbl_order1');
                $this->db->where('id', $order_id);
                $orderdata= $this->db->get()->row();

                $final_amount = $orderdata->final_amount + $orderdata->p_discount;

                $data_update = array('promocode_id'=>"",
              'p_discount'=>"",
              'final_amount'=>$final_amount
            );
                $this->db->where('id', $order_id);
                $zapak=$this->db->update('tbl_order1', $data_update);
                if (!empty($zapak)) {
                    $respone['data'] = true;
                    $respone['data_message'] ="Promocode removed successfully";
                    echo json_encode($respone);
                } else {
                    $respone['data'] = false;
                    $respone['data_message'] ="Some error occured";
                    echo json_encode($respone);
                }
            } else {
                $respone['data'] = false;
                $respone['data_message'] = validation_errors();
                echo json_encode($respone);
            }
        } else {
            $respone['data'] = false;
            $respone['data_message'] ="Please insert some data, No data available";
            echo json_encode($respone);
        }
    }

    //--------checkout----------------
    public function checkout()
    {
        if (!empty($this->session->userdata('user_data')) && !empty($this->session->userdata('order_id'))) {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->helper('security');
            if ($this->input->post()) {
                $this->form_validation->set_rules('order_id', 'order_id', 'required|xss_clean|trim');


                if ($this->form_validation->run()== true) {
                    $order_id=base64_decode($this->input->post('order_id'));
                    // echo $order_id;
                    // exit;
                    $ip = $this->input->ip_address();
                    date_default_timezone_set("Asia/Calcutta");
                    $cur_date=date("Y-m-d H:i:s");

                    $user_id = $this->session->userdata('user_id');
                    // exit;
                    //----------inventoty check-------------------
                    $this->db->select('*');
                    $this->db->from('tbl_order2');
                    $this->db->where('main_id', $order_id);
                    $order2_data= $this->db->get();
                    foreach ($order2_data->result() as $order2) {
                        $this->db->select('*');
                        $this->db->from('tbl_products');
                        $this->db->where('id', $order2->product_id);
                        $pro_data= $this->db->get()->row();
                        if ($pro_data->inventory>=$order2->quantity) {
                        } else {
                            $this->session->set_flashdata('emessage', ''.$pro_data->productname.' is out of stock');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    }


                    //----------order1 entry-------------
                    $order1_update = array(
                                'payment_status'=>1,
                                'order_status'=>1,
                                'date'=>$cur_date,
                                'ip'=>$ip,
                                  );
                    $this->db->where('id', $order_id);
                    $zapak2=$this->db->update('tbl_order1', $order1_update);


                    if (!empty($zapak2)) {

              //--------------inventory update and cart delete--------
                        foreach ($order2_data->result() as $odr2) {
                            // echo $user_id;
                            // echo $odr2->product_id;
                            // exit;
                            $this->db->select('*');
                            $this->db->from('tbl_products');
                            $this->db->where('id', $odr2->product_id);
                            $pro_data1= $this->db->get()->row();
                            $updated_inventory  = $pro_data1->inventory - $odr2->quantity;

                            $inventory_update = array('inventory'=>$updated_inventory,
                   );
                            $this->db->where('id', $pro_data1->id);
                            $zapak=$this->db->update('tbl_products', $inventory_update);

                            //-------cart delete---------
                            $delete=$this->db->delete('tbl_cart', array('user_id' => $user_id,'product_id'=>$odr2->product_id));
                        }
                        redirect("Order/order_success", "refresh");
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured');
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
            redirect("Home/index", "refresh");
        }
    }

    //-----------order success---------
    public function order_success()
    {
        if (!empty($this->session->userdata('user_data')) && !empty($this->session->userdata('order_id'))) {
            $user_id = $this->session->userdata('user_id');

            $this->db->select('*');
            $this->db->from('tbl_order1');
            $this->db->where('user_id', $user_id);
            $this->db->order_by('id', 'DESC');
            $orderdata= $this->db->get()->row();

            $data['order_id'] =$orderdata->id;
            $data['amount'] =$orderdata->final_amount;

            $this->session->unset_userdata('order_id');

            $this->load->view('frontend/common/header', $data);
            $this->load->view('frontend/order_success');
            $this->load->view('frontend/common/footer');
        } else {
            redirect("Home/index", "refresh");
        }
    }
}
