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
public function calculate(){
if(!empty($this->session->userdata('user_data'))){

//---------get cart data----------------
$this->db->select('*');
$this->db->from('tbl_cart');
$this->db->where('user_id', $user_id);
$cartInfo= $this->db->get();
foreach ($cartInfo->result() as $cart) {

  $this->db->select('*');
  $this->db->from('tbl_inventory');
  $this->db->where('product_id', $cart->product_id);
  $inventory_data= $this->db->get()->row();
  //-----check inventory------
  if (!empty($inventory_data)) {
      if ($inventory_data->quantity >= $quantity) {

    $price=0;
    $this->db->select('*');
    $this->db->from('tbl_products');
    $this->db->where('id', $cart->product_id);
    $pro_data= $this->db->get()->row();
    $price = $pro_data->mrp * $cart->quantity;
    $total= $total + $price;
  }else{
    $this->session->set_flashdata('emessage', 'Out of stock ');
    redirect($_SERVER['HTTP_REFERER']);
  }
}else{
  $this->session->set_flashdata('emessage', 'Some error occured');
  redirect($_SERVER['HTTP_REFERER']);
}
}



}else{
  $this->load->view('Home/index');
}
}

}
