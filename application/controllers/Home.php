<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/login_model");
        $this->load->model("admin/base_model");
    }

    //-------index--------------

    public function index()
    {
        // $this->session->unset_userdata('user_data');
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('is_active', 1);
        $data['slider_data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_banners_six');
        $this->db->where('is_active', 1);
        $data['banner_Data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_subcategory');
        $this->db->where('is_active', 1);
        $this->db->where('new_launches', 1);
        $this->db->limit(5);
        $data['launch_sub_data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_bannerimages');
        //$this->db->where('id',$usr);
        $data['banner_images']= $this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_image_two');
        //$this->db->where('id',$usr);
        $data['image_two']= $this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_testimonal');
        $this->db->order_by('rand()');
        $data['data_testimonal']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('is_active', 1);
        $this->db->where('bestsellerproduct', 1);
        // $this->db->order_by('id', 'DESC');
        // $this->db->limit(16);
        $data['Best_seller']= $this->db->get();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/index');
        $this->load->view('frontend/common/footer');
    }

    ///--------all product----------------

    public function all_Product()
    {
        $idd = $this->uri->segment(3);
        $t = $this->uri->segment(4);
        $sort = $this->uri->segment(5);

        $id=base64_decode($idd);
        $data["idd"] = $idd;
        $id2=base64_decode($t);
        $data["type"] = $t;

        $this->db->select('*');
        $this->db->from('tbl_products');
        if ($id2==1) {
            $this->db->like('category', $id);
        } else {
            $this->db->like('subcategory', $id);
        }
        $this->db->where('is_active', 1);
        if (!empty($sort)) {
            if ($sort=="LH") {
                $this->db->order_by('selling_price', 'asc');
            } elseif ($sort=="HL") {
                $this->db->order_by('selling_price', 'desc');
            }
        }
        $product_data= $this->db->get();
        // print_r($product_data);
        // exit;
        $data['product_data'] = $product_data;


        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/all_product');
        $this->load->view('frontend/common/footer');
    }

    //------product details-------------

    public function product_details($idd)
    {
        $id=base64_decode($idd);
        $data['id']=$idd;

        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('id', $id);
        $product_data= $this->db->get()->row();
        $data['product_data'] = $product_data;

        $this->db->select('*');
        $this->db->from('tbl_testimonal');
        $this->db->order_by('rand()');
        $data['data_testimonal']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('id !=', $id);
        $this->db->where('is_active', 1);
        $this->db->order_by('rand()');
        $this->db->limit(15);
        $data['like_data']= $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('is_active', 1);
        $this->db->where('id !=', $id);
        $this->db->order_by('rand()');
        $data['more_data']= $this->db->get();

        $this->load->view('frontend/common/header', $data);
        $this->load->view('frontend/product_details');
        $this->load->view('frontend/common/footer');
    }

    //-----view cart----------

    public function view_cart()
    {
        if (!empty($this->session->userdata('user_data'))) {
            $user_id = $this->session->userdata('user_id');

            $this->db->select('*');
            $this->db->from('tbl_cart');
            $this->db->where('user_id', $user_id);
            $data['cart_data']= $this->db->get();

            $this->load->view('frontend/common/header', $data);
            $this->load->view('frontend/cart');
            $this->load->view('frontend/common/footer');
        } else {
            $this->load->view('frontend/common/header');
            $this->load->view('frontend/local_cart');
            $this->load->view('frontend/common/footer');
        }
    }

    //------add newsletter---------

    public function add_news_letter()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|xss_clean');

            if ($this->form_validation->run()== true) {
                $email=$this->input->post('email');
                $addedby=$this->session->userdata('admin_id');
                $ip = $this->input->ip_address();
                date_default_timezone_set("Asia/Calcutta");
                $cur_date=date("Y-m-d H:i:s");

                $this->db->select('*');
                $this->db->from('tbl_newsletter');
                $this->db->where('email', $email);
                $news_data= $this->db->get()->row();
                if (empty($news_data)) {
                    $data_insert = array(
                        'email'=>$email,
                        'ip' =>$ip,
                        'added_by' =>$addedby,
                        'is_active' =>1,
                        'date'=>$cur_date

                        );

                    $last_id=$this->base_model->insert_table("tbl_newsletter", $data_insert, 1) ;

                    if ($last_id!=0) {
                        $this->session->set_flashdata('smessage', 'Successfully Subcribed');
                        redirect($_SERVER['HTTP_REFERER']);
                    } else {
                        $this->session->set_flashdata('emessage', 'Some error occured');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $this->session->set_flashdata('emessage', 'Already subcribed to neswletter');
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

    //--------my orders------
    public function my_orders($idd)
    {
        if (!empty($this->session->userdata('user_data'))) {
            $user_id=base64_decode($idd);
            $data['id']=$idd;

            $this->db->select('*');
            $this->db->from('tbl_order1');
            $this->db->where('user_id', $user_id);
            $this->db->order_by('id', 'DESC');
            $data['order1_data']= $this->db->get();

            $this->load->view('frontend/common/header', $data);
            $this->load->view('frontend/my_orders');
            $this->load->view('frontend/common/footer');
        } else {
            redirect("Home/Index", "refresh");
        }
    }

    //--------cancel order---------
    public function cancel_order()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        if ($this->input->post()) {
            $this->form_validation->set_rules('order_id', 'order_id', 'required|xss_clean|trim');

            if ($this->form_validation->run()== true) {
                $order_id=base64_decode($this->input->post('order_id'));

                $data_update = array(
     'order_status'=>5

     );

                $this->db->where('id', $order_id);
                $zapak=$this->db->update('tbl_order1', $data_update);

                //-------update inventory-------
                $this->db->select('*');
                $this->db->from('tbl_order2');
                $this->db->where('main_id', $order_id);
                $data_order2= $this->db->get();

                foreach ($data_order2->result() as $data) {
                    $this->db->select('*');
                    $this->db->from('tbl_products');
                    $this->db->where('id', $data->product_id);
                    $pro_data= $this->db->get()->row();
                    if (!empty($pro_data)) {
                        $update_inv = $pro_data->inventory + $data->quantity;
                        $data_update = array('inventory'=>$update_inv,
         );
                        $this->db->where('id', $pro_data->id);
                        $zapak2=$this->db->update('tbl_products', $data_update);
                    }
                }


                if (!empty($zapak)) {
                    $respone['data'] = true;
                    $respone['data_message'] ="Order successfully cancelled";
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
            $respone['data_message'] ='Please insert some data, No data available';
            echo json_encode($respone);
        }
    }

    //-------view wishlist------------
    public function view_wishlist($idd)
    {
        if (!empty($this->session->userdata('user_data'))) {
            $id=base64_decode($idd);
            $data['id']=$idd;

            $this->db->select('*');
            $this->db->from('tbl_wishlist');
            $this->db->where('user_id', $id);
            $data['wishlist_data']= $this->db->get();
            // $wishlist_data= $this->db->get();
            // print_r($wishlist_data->result());
            // exit;
            $this->load->view('frontend/common/header', $data);
            $this->load->view('frontend/my_wishlist');
            $this->load->view('frontend/common/footer');
        } else {
            redirect("Home/Index", "refresh");
        }
    }


    //-------search---------------
    public function search()
    {

    $string= $this->input->get('search');

      $this->db->select('*');
      $this->db->from('tbl_products');
      $this->db->like('productname',$string);
      $this->db->where('is_active',1);
      $data['search_data']= $this->db->get();

      $this->load->view('frontend/common/header', $data);
      $this->load->view('frontend/search_results');
      $this->load->view('frontend/common/footer');

    }

///----------view blog ---------------
public function view_blog(){

  $this->load->view('frontend/common/header');
  $this->load->view('frontend/all_blogs.php');
  $this->load->view('frontend/common/footer');
}

    public function error404()
    {
        $this->load->view('errors/error404');
    }

}
