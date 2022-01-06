<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/login_model");
        $this->load->model("admin/base_model");
    }

    ////-------------------session cart manage--------------------------------------

    //-----add to cart session ----

    public function addToCartOffline()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('product_id', 'product_id', 'required|xss_clean|trim');
            $this->form_validation->set_rules('quantity', 'quantity', 'required|xss_clean|trim');

            if ($this->form_validation->run()== true) {
                $product_id=$this->input->post('product_id');
                $quantity=$this->input->post('quantity');
                $product_id=base64_decode($product_id);
                $ip = $this->input->ip_address();
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d H:i:s");
                $response['data'] = '';
                $response['data_message'] = '';
                $cart_item = array('product_id'=>$product_id,
                  'quantity'=>$quantity,
                  'ip' =>$ip,
                  'date'=>$cur_date
                  );

                $this->db->select('*');
                $this->db->from('tbl_products');
                $this->db->where('id', $product_id);
                $pro_data= $this->db->get()->row();
                //-----check inventory------
                if (!empty($pro_data->inventory)) {
                    if ($pro_data->inventory >= $quantity) {
                        //------inventory in stock--------
                        $cart_data = $this->session->userdata('cart_data');
                        //----check product in already in cart------
                        if (!empty($cart_data)) {
                            $i=0;
                            foreach ($cart_data as $items) {
                                if ($items['product_id'] == $product_id) {
                                    $i=1;
                                }
                            }
                            if ($i==1) {
                                $respone['data'] = false;
                                $respone['data_message'] ="Product is already in your cart";
                                echo json_encode($respone);
                            } else {
                                array_push($cart_data, $cart_item);
                                $this->session->set_userdata('cart_data', $cart_data);
                                $respone['data'] = true;
                                $response['data_message'] = "Item successfully added in your cart";
                                echo json_encode($respone);
                            }
                        }
                        //------create session cart------
                        else {
                            $cart = array($cart_item);
                            $this->session->set_userdata('cart_data', $cart);
                            $respone['data'] = true;
                            $response['data_message'] = "Item successfully added in your cart";
                            echo json_encode($respone);
                        }
                        ///---inventory out of stock--------
                    } else {
                        $respone['data'] = false;
                        $respone['data_message'] ="Out of stock";
                        echo json_encode($respone);
                    }
                } else {
                    $respone['data'] = false;
                    $respone['data_message'] ="Out of stock";
                    echo json_encode($respone);
                }
            } else {
                $respone['data'] = false;
                $respone['data_message'] =validation_errors();
                echo json_encode($respone);
            }
        } else {
            $respone['data'] = false;
            $respone['data_message'] ="Please insert some data, No data available";
            echo json_encode($respone);
        }
    }

    //-------delete cart product from session------

    public function deleteCartOffline()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('product_id', 'product_id', 'required|xss_clean|trim');
            if ($this->form_validation->run()== true) {
                $product_id=$this->input->post('product_id');
                $product_id=base64_decode($product_id);

                $index="-1";
                $cart = $this->session->userdata('cart_data');
                if (!empty($cart)) {
                    for ($i = 0; $i < count($cart); $i ++) {
                        if ($cart[$i]['product_id'] == $product_id) {
                            $index= $i;
                        }
                    }
                }
                if ($index > -1) {
                    $cart = $this->session->userdata('cart_data');
                    unset($cart[$index]);
                    $cart = array_values($cart);
                    $this->session->set_userdata('cart_data', $cart);
                    $respone['data'] = true;
                    $respone['data_message'] ="Item successfully deleted in your cart";
                    echo json_encode($respone);
                } else {
                    $respone['data'] = false;
                    $respone['data_message'] ="Some error occured";
                    echo json_encode($respone);
                }
            } else {
                $respone['data'] = false;
                $respone['data_message'] =validation_errors();
                echo json_encode($respone);
            }
        } else {
            $respone['data'] = false;
            $respone['data_message'] ="Please insert some data, No data available";
            echo json_encode($respone);
        }
    }

    //----update cart quatity from session cart--------
    public function updateCartOffline()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('product_id', 'product_id', 'required|xss_clean|trim');
            $this->form_validation->set_rules('quantity', 'quantity', 'required|xss_clean|trim');


            if ($this->form_validation->run()== true) {
                $product_id=$this->input->post('product_id');
                $quantity=$this->input->post('quantity');
                $product_id=base64_decode($product_id);
                $index="-1";

                $this->db->select('*');
                $this->db->from('tbl_products');
                $this->db->where('id', $product_id);
                $pro_data= $this->db->get()->row();
                //-----check inventory------
                if (!empty($pro_data->inventory)) {
                    if ($pro_data->inventory >= $quantity) {
                        $cart = $this->session->userdata('cart_data');
                        // echo $product_id;
                        // print_r($cart);
                        // $this->session->unset_userdata('cart_data');
                        if (!empty($cart)) {
                            for ($i = 0; $i < count($cart); $i ++) {
                                if ($cart[$i]['product_id'] == $product_id) {
                                    $index= $i;
                                }
                            }
                        }
                        if ($index > -1) {
                            $cart = $this->session->userdata('cart_data');
                            $cart[$index]['quantity']=$quantity;
                            $this->session->set_userdata('cart_data', $cart);
                            $cart2 = $this->session->userdata('cart_data');
                            $total=0;
                            $subtotal = 0;

                            foreach ($cart2 as $value) {
                                $price=0;
                                $this->db->select('*');
                                $this->db->from('tbl_products');
                                $this->db->where('id', $value['product_id']);
                                $pro_data= $this->db->get()->row();
                                $price = $pro_data->mrp * $value['quantity'];
                                $total= $total + $price;
                            }
                            $subtotal = $total;

                            $respone['data'] = true;
                            $respone['data_message'] ="Item successfully updated in your cart";
                            $respone['data_price'] =round($total);
                            $respone['data_subtotal'] =round($subtotal);
                            echo json_encode($respone);
                        } else {
                            $respone['data'] = false;
                            $respone['data_message'] ="Some error occured";
                            echo json_encode($respone);
                        }
                    } else {
                        $respone['data'] = false;
                        $respone['data_message'] ="Out of stock";
                        echo json_encode($respone);
                    }
                } else {
                    $respone['data'] = false;
                    $respone['data_message'] ="Out of stock";
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


    ////-------------------log in cart manage--------------------------------------

    //-----add to cart session ----

    public function addToCartOnline()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('product_id', 'product_id', 'required|xss_clean|trim');
            $this->form_validation->set_rules('quantity', 'quantity', 'required|xss_clean|trim');

            if ($this->form_validation->run()== true) {
                $product_id=$this->input->post('product_id');
                $quantity=$this->input->post('quantity');
                $product_id=base64_decode($product_id);
                $ip = $this->input->ip_address();
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d H:i:s");
                $response['data'] = '';
                $response['data_message'] = '';
                if (!empty($this->session->userdata('user_data'))) {
                    $user_id = $this->session->userdata('user_id');

                    $this->db->select('*');
                    $this->db->from('tbl_products');
                    $this->db->where('id', $product_id);
                    $pro_data= $this->db->get()->row();
                    //-----check inventory------
                    if (!empty($pro_data->inventory)) {
                        if ($pro_data->inventory >= $quantity) {
                            $this->db->select('*');
                            $this->db->from('tbl_cart');
                            $this->db->where('user_id', $user_id);
                            $this->db->where('product_id', $product_id);
                            $cartInfo= $this->db->get()->row();
                            if (empty($cartInfo)) {
                                $cart_insert = array('user_id'=>$user_id,
                          'product_id'=>$product_id,
                          'quantity'=>$quantity,
                          'ip'=>$ip,
                          'date'=>$cur_date
                      );
                                $last_id=$this->base_model->insert_table("tbl_cart", $cart_insert, 1) ;
                                if (!empty($last_id)) {
                                    $respone['data'] = true;
                                    $respone['data_message'] ="Item successfully deleted in your cart";
                                    echo json_encode($respone);
                                } else {
                                    $respone['data'] = false;
                                    $respone['data_message'] ="Some error occured";
                                    echo json_encode($respone);
                                }
                            }
                            ///---inventory out of stock--------
                        } else {
                            $respone['data'] = false;
                            $respone['data_message'] ="Out of stock";
                            echo json_encode($respone);
                        }
                    } else {
                        $respone['data'] = false;
                        $respone['data_message'] ="Out of stock";
                        echo json_encode($respone);
                    }
                } else {
                    $respone['data'] = false;
                    $respone['data_message'] ="Cart data not found";
                    echo json_encode($respone);
                }
            } else {
                $respone['data'] = false;
                $respone['data_message'] =validation_errors();
                echo json_encode($respone);
            }
        } else {
            $respone['data'] = false;
            $respone['data_message'] ="Please insert some data, No data available";
            echo json_encode($respone);
        }
    }

    ////-----------delete cart product login---------

    public function deleteCartOnline()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('product_id', 'product_id', 'required|xss_clean|trim');
            if ($this->form_validation->run()== true) {
                $product_id=$this->input->post('product_id');
                $product_id=base64_decode($product_id);
                $response['data'] = '';
                $response['data_message'] = '';
                if (!empty($this->session->userdata('user_data'))) {
                    $user_id = $this->session->userdata('user_id');

                    $zapak=$this->db->delete('tbl_cart', array('user_id' => $user_id,'product_id'=>$product_id));
                    $respone['data'] = true;
                    $respone['data_message'] ='Item successfully deleted in your cart';
                    echo json_encode($respone);
                } else {
                    $respone['data'] = false;
                    $respone['data_message'] ='Some error occured';
                    echo json_encode($respone);
                }
            } else {
                $respone['data'] = false;
                $respone['data_message'] =validation_errors();
                echo json_encode($respone);
            }
        } else {
            $respone['data'] = false;
            $respone['data_message'] ="Please insert some data, No data available";
            echo json_encode($respone);
        }
    }

    //---------update cart value login-----------
    public function updateCartOnline()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('product_id', 'product_id', 'required|xss_clean|trim');
            $this->form_validation->set_rules('quantity', 'quantity', 'required|xss_clean|trim');

            if ($this->form_validation->run()== true) {
                $product_id=$this->input->post('product_id');
                $product_id=base64_decode($product_id);
                $quantity=$this->input->post('quantity');
                $user_id = $this->session->userdata('user_id');

                $this->db->select('*');
                $this->db->from('tbl_products');
                $this->db->where('id', $product_id);
                $pro_data= $this->db->get()->row();
                //-----check inventory------
                if (!empty($pro_data->inventory)) {
                    if ($pro_data->inventory >= $quantity) {

                //----------cart quantity update--------
                        $data_update = array('quantity'=>$quantity);
                        $this->db->where('user_id', $user_id);
                        $this->db->where('product_id', $product_id);
                        $zapak=$this->db->update('tbl_cart', $data_update);

                        if (!empty($zapak)) {

          //--------------cart total calculate---------
                            $this->db->select('*');
                            $this->db->from('tbl_cart');
                            $this->db->where('user_id', $user_id);
                            $cartInfo= $this->db->get();
                            $total = 0;
                            $shipping = 0;
                            $subtotal = 0;
                            foreach ($cartInfo->result() as $cart) {
                                $price=0;
                                $this->db->select('*');
                                $this->db->from('tbl_products');
                                $this->db->where('id', $cart->product_id);
                                $pro_data= $this->db->get()->row();
                                $price = $pro_data->mrp * $cart->quantity;
                                $total= $total + $price;
                            }
                            $subtotal = $total;

                            $respone['data'] = true;
                            $respone['data_message'] ="Cart item update successfully";
                            $respone['data_price'] =round($total);
                            $respone['data_subtotal'] =round($subtotal);
                            echo json_encode($respone);
                        } else {
                            $respone['data'] = false;
                            $respone['data_message'] ="Some error occucred";
                            echo json_encode($respone);
                        }
                    } else {
                        $respone['data'] = false;
                        $respone['data_message'] ="Out of stock";
                        echo json_encode($respone);
                    }
                } else {
                    $respone['data'] = false;
                    $respone['data_message'] ="Out of stock";
                    echo json_encode($respone);
                }
            } else {
                $respone['data'] = false;
                $respone['data_message'] =validation_errors();
                echo json_encode($respone);
            }
        } else {
            $respone['data'] = false;
            $respone['data_message'] ="Please insert some data, No data available";
            echo json_encode($respone);
        }
    }
}
