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

    //-------------calculate------
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

                    $this->db->select('*');
                    $this->db->from('tbl_inventory');
                    $this->db->where('product_id', $cart->product_id);
                    $inventory_data= $this->db->get()->row();
                    //-----check inventory------
                    if (!empty($inventory_data)) {
                        if ($inventory_data->quantity >= $cart->quantity) {
                            $price = $pro_data->mrp * $cart->quantity;
                            $total= $total + $price;
                        } else {
                            $this->session->set_flashdata('emessage', ''.$pro_data->prouctname.'  is out of stock');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    } else {
                        $this->session->set_flashdata('emessage', ''.$pro_data->prouctname.'  is out of stock');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                    $user_id = $this->session->userdata('user_id');
                    $shipping = $total * SHIPPING / 100;
                    $final_amount = $total + round($shipping);
                }
                //------order1 entry-------------
                $order1_insert = array('user_id'=>$user_id,
          'total_amount'=>$total,
          'delivery_charge'=>round($shipping),
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

                        $total = $pro_data->mrp * $cart2->quantity;

                        $order2_insert = array('main_id'=>$last_id,
                        'product_id'=>$cart2->product_id,
                        'quantity'=>$cart2->quantity,
                        'mrp'=>$pro_data->mrp,
                        'total_amount'=>$total,
                        'date'=>$cur_date
                        );

                        $last_id2=$this->base_model->insert_table("tbl_order2", $order2_insert, 1);
                    }
                    if (!empty($last_id2)) {
                        redirect("Order/address", "refresh");
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
    public function address()
    {
        if (!empty($this->session->userdata('user_data'))) {
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

                    $data_update = array(
                 'name'=>$name,
                 'email'=>$email,
                 'phone'=>$phone,
                 'pincode_id'=>$pincode,
                 'address'=>$address,
                           );
                    $this->db->where('id', $order_data->id);
                    $zapak=$this->db->update('tbl_order1', $data_update);

                    if (!empty($zapak)) {
                        redirect("Order/view_checkout", "refresh");
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured! Please try again');
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


    public function view_checkout()
    {
        if (!empty($this->session->userdata('user_data'))) {
            $user_id = $this->session->userdata('user_id');

            $this->db->select('*');
            $this->db->from('tbl_order1');
            $this->db->where('user_id', $user_id);
            $this->db->order_by('id', 'DESC');
            $data['order_data']= $this->db->get()->row();

            $this->load->view('frontend/common/header', $data);
            $this->load->view('frontend/checkout2');
            $this->load->view('frontend/common/footer');
        } else {
            redirect("Home/index", "refresh");
        }
    }


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
                            //----updating promode_id in tabel order1

                            $data_update = array('promocode_id'=>$promo_data->id,'p_discount'=>$p_discount);
                            $this->db->where('id', $order_id);
                            $zapak=$this->db->update('tbl_order1', $data_update);

                            $this->session->set_flashdata('smessage', 'Promocode successfully applied');
                            redirect($_SERVER['HTTP_REFERER']);
                        } else {
                            $this->session->set_flashdata('emessage', 'Please add more products for promocode');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $this->session->set_flashdata('emessage', 'Invalid Promocode');
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
    //------remove promocode--------
    public function remove_promocode($idd)
    {
        $order_id=base64_decode($idd);

        $data_update = array('promocode_id'=>"",
              'p_discount'=>""
            );
        $this->db->where('id', $order_id);
        $zapak=$this->db->update('tbl_order1', $data_update);
        if (!empty($zapak)) {
            $this->session->set_flashdata('smessage', 'Promocode removed successfully');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('emessage', 'Some error occured');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    //--------checkout----------------
    public function checkout()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('payment_type', 'payment_type', 'required|xss_clean|trim');
            $this->form_validation->set_rules('name', 'name', 'required|xss_clean|trim');
            $this->form_validation->set_rules('phone', 'phone', 'required|xss_clean|trim');
            $this->form_validation->set_rules('pincode', 'pincode', 'required|xss_clean|trim');
            $this->form_validation->set_rules('plot_no', 'plot_no', 'required|xss_clean|trim');
            $this->form_validation->set_rules('str_name', 'str_name', 'required|xss_clean|trim');
            $this->form_validation->set_rules('order_id', 'order_id', 'required|xss_clean|trim');


            if ($this->form_validation->run()== true) {
                $payment_type=$this->input->post('payment_type');
                $name=$this->input->post('name');
                $phone=$this->input->post('phone');
                $pincode=$this->input->post('pincode');
                $plot_no=$this->input->post('plot_no');
                $str_name=$this->input->post('str_name');

                $user_id = $this->session->userdata('user_id');
                $ip = $this->input->ip_address();
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d H:i:s");

                //----------inventoty check-------------------
                $this->db->select('*');
                $this->db->from('tbl_order2');
                $this->db->where('main_id', $order1);
                $order2_data= $this->db->get();
                foreach ($order2_data->result() as $order2) {
                    $this->db->select('*');
                    $this->db->from('tbl_products');
                    $this->db->where('id', $order2->product_id);
                    $pro_data= $this->db->get()->row();
                    $this->db->select('*');
                    $this->db->from('tbl_inventory');
                    $this->db->where('product_id', $order2->product_id);
                    $invenoty_data= $this->db->get()->row();
                    if ($inventory_data->quantity>=$order2->quantity) {
                    } else {
                        $this->session->set_flashdata('emessage', ''.$pro_data->productname.' is out of stock');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }

                $this->db->select('*');
                $this->db->from('tbl_order1');
                $this->db->where('id', $order_id);
                $order1_data= $this->db->get()->row();
                //----promocode discount update-----
                if (!empty($order1_data->promocode_id)) {
                    $final_amount = $order1_data->final_amount - $order1_data->p_discount;
                } else {
                    $final_amount = $order1_data->final_amount;
                }
                //----------order placing for COD----------------
                //----------order1 entry-------------
                $order1_update = array('payment_type'=>1,
                                'payment_status'=>1,
                                'order_status'=>1,
                                'name'=>$name,
                                'phone'=>$phone,
                                'pincode'=>$pincode,
                                'plot_no'=>$plot_no,
                                'str_name'=>$str_name,
                                  );
                $this->db->where('id', $order_id);
                $zapak2=$this->db->update('tbl_order1', $order1_update);


                if (!empty($zapak2)) {

              //--------------inventory update and cart delete--------
                    foreach ($order2_data->result() as $ord) {
                        $this->db->select('*');
                        $this->db->from('tbl_inventory');
                        $this->db->where('product_id', $ord->product_id);
                        $invenoty_data1= $this->db->get()->row();
                        $updated_inventory  = $inventory_data1->quantity - $ord->quantity;

                        $inventory_update = array('quantity'=>$updated_inventory,
                   );
                        $this->db->where('id', $invenoty_data1->id);
                        $zapak=$this->db->update('tbl_inventory', $inventory_update);

                        //-------cart delete---------
                        $delete=$this->db->delete('tbl_cart', array('user_id' => $user_id,'product_id',$product_id));
                    }
                    if (!empty($delete)) {
                        redirect("Order/success", "refresh");
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured!');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
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
    }
}
