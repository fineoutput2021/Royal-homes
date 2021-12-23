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
                $this->db->from('tbl_inventory');
                $this->db->where('product_id', $product_id);
                $inventory_data= $this->db->get()->row();
                //-----check inventory------
                if (!empty($inventory_data)) {
                    if ($inventory_data->quantity >= $quantity) {
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
                                array_push($cart, $cart_item);
                                $this->session->set_userdata('cart_data', $cart);
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
public function updateCartOffline(){
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->load->helper('security');
  if($this->input->post())
  {
  $this->form_validation->set_rules('product_id', 'product_id', 'required|xss_clean|trim');
  $this->form_validation->set_rules('quantity', 'quantity', 'required|xss_clean|trim');


  	if($this->form_validation->run()== TRUE)
  	{

  			 $product_id=$this->input->post('product_id');
  			 $quantity=$this->input->post('quantity');
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
             set($cart[$index]['quantity']=$quantity);
             $this->session->set_userdata('cart_data', $cart);
             $respone['data'] = true;
             $respone['data_message'] ="Item successfully updated in your cart";
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
}
