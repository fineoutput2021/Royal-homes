<style>
  .text-small {
    font-size: 12px;
    line-height: 20px;
  }

  .my_order {
    background: #ececec;
  }

  .my_order h1 {
    font-weight: 100;
  }

  .my_order img {
    width: 100%;
  }

  .order_cont {
    padding: 2rem;
    padding-bottom: 0;
    border-radius: 6px;
    box-shadow: 0px 2px 7px -1px #bfbfbf;

  }

  .order_small {
    border: none;
    height: 40px;
    width: 35%;
    border-radius: 26px;
  }

  .ordertrack_small {
    border: none;
    height: 40px;
    width: 35%;
    border-radius: 26px;
    color: #fff;
    background: #ffb100;
  }

  .can_btn {
    width: 100%;
    height: 100%;
    border: none;
    background: #fff;
    outline: 0 !important;
    border-right: 1px solid lightgrey;
  }


  @media(min-width: 312px) and (max-width: 900px) {
    .ordertrack_small {
      width: 100%;
    }

    .order_small {
      width: 100%;
    }

    .two_btn {
      display: block !important;
    }

    .sp_od_web {
      display: none;
    }

    .sp_od_mob {
      display: block !important;
    }

    .can_btn {
      border: none;
      height: 44px;
    }

    .ab_p_h p,
    h5 {
      font-size: 12px;
    }

    .order_cont {
      padding: 1rem;
      padding-bottom: 0;
    }

    .ab_p_h {
      position: absolute;
    }

    .my_order h4 {
      font-size: 18px !important;
    }

    .my_order i {
      display: contents;
    }

    .text-small {
      font-size: 12px;
      line-height: 20px;
    }

  }
</style>
<section class="my_order pb-10">
  <div class="container">
    <center>
      <h1>My Orders</h1>
    </center>
    <?php
                    if (!empty($this->session->userdata('user_id'))) {
                        $user_id = $this->session->userdata('user_id');
                        $this->db->select('*');
                        $this->db->from('tbl_order1');
                        $this->db->where('user_id', $user_id);
                        $this->db->order_by('id', $desc);
                        $get_orders= $this->db->get();


                        $i=0;
                        foreach ($get_orders->result() as $data_order1) {
                            if ($data_order1->order_status != 0) {
                                $this->db->select('*');
                                $this->db->from('tbl_coupancodes');
                                $this->db->where('id', $$data_order1->promocode_id);
                                $promo_da= $this->db->get()->row();

                                if (!empty($promo_da)) {
                                    $promo_discount= $data_order1->p_discount ;
                                    $promo_name= $promo_da->name;
                                } else {
                                    $promo_discount= 0;
                                    $promo_name= "N/A";
                                } ?>

    <div class="container bg-white order_cont mb-5">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-6 d-flex align-items-center mb-4 two_btn">
              <button class="float-left order_small mr-4" style="color:blue">order
                <a href="#">#<?=$data_order1->id; ?></a>
              </button>
              <span class="sp_od_web">Order Placed :<a href="#">
                  <?php
                                $newdate = new DateTime($data_order1->date);
                                echo $newdate->format('j F, Y');   #d-m-Y  // March 10, 2001, 5:16 pm?>
                </a></span>
            </div>

            <div class="col-12 sp_od_mob mb-3 d-none">
              <center>
                <span class="">Order Placed
                  <a href="#">
                    <?php
                                        $newdate = new DateTime($data_order1->date);
                                echo $newdate->format('j F, Y, g:i a');   #d-m-Y  // March 10, 2001, 5:16 pm?>
                  </a>
                </span>
              </center>


            </div>
          </div>
        </div>

        <?php
            $this->db->select('*');
                                $this->db->from('tbl_order2');
                                $this->db->where('main_id', $data_order1->id);
                                $d1= $this->db->get();
                                $d_check = $d1->row();

                                if (!empty($d_check)) {
                                    foreach ($d1->result() as $dd1) {
                                        $this->db->select('*');
                                        $this->db->from('tbl_products');
                                        $this->db->where('id', $dd1->product_id);
                                        $op_da= $this->db->get()->row();

                                        if (!empty($op_da)) {
                                            $o_product_name = $op_da->name;
                                            $sprice = $op_da->mrp;
                                            $o_product_image = $op_da->image;
                                        } else {
                                            $o_product_name = "Product Not Found!";
                                            $o_product_image = "";
                                            $sprice = "";
                                        }
                                        // echo base_url();?>

        <div class="col-12 mt-3 pt-3" style="border-top: 1px solid lightgrey;">
          <div class="row">
            <div class="col-4 col-lg-2 col-md-2">

              <?php 	if (!empty($o_product_image)) { ?>
              <img src="<?php   echo  base_path .$o_product_image;  ?>">
              <?php } else {
                                            echo "No Image Found!";
                                        } ?>

            </div>
            <div class="col-8 col-lg-10 col-md-10">

              <h4><?=$o_product_name; ?> </h4>
              <p>Quantity: <a href="#"> <?=$dd1->quantity; ?></a></p>
              <p>Price: <a href="#"><?=$sprice*$dd1->quantity; ?></a></p>
            </div>
          </div>
        </div>

        <?php
                                    }
                                } ?>

        <div class="col-12 mt-3 pt-3 pb-3 " style="border-top: 1px solid lightgrey;">
          <div class="row">
            <div class="col-12 col-sm-2 col-md-2 col-lg-2 mt-5 mt-lg-0">
              <?php if ($data_order1->order_status == 3) {?>
              <button class="can_btn" style="color:orange !important;"><i class="fa fa-truck pr-2"></i>Dispatched</button>
              <?php } elseif ($data_order1->order_status == 4) { ?>
              <button class="can_btn" style="color:green !important;"><i class="fa fa-check pr-2"></i>Delivered</button>
              <?php } elseif ($data_order1->order_status == 5) { ?>
              <button class="can_btn"><i class="fa fa-times pr-2"></i>Cancelled</button>
              <?php } else { ?>
              <a href="<?=base_path?>cancel_order/<?=base64_encode($data_order1->id);?>">
                <button class="can_btn" style="color:red"><i class="fa fa-times pr-2"></i>CANCEL ORDER</button>
              </a>
              <?php } ?>

            </div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 d-flex align-items-center ab_p_h" style="justify-content: space-between;">
              <p class="mb-0 text-small">Payment Method : <a href="#">

                  <?php if ($data_order1->payment_type == 1) {
                                    echo 'COD | ';
                                } ?>
                  <?php  if ($data_order1->payment_type == 2) {
                                    echo 'Online Payment | ';
                                } ?>

                </a></p>

              <h5 class="mb-0 text-small">Promocode Discount <i class="fa fa-rupee"></i><a href="#"><?php
                            if (!empty($data_order1->p_discount)) {
                                echo $data_order1->p_discount.'  |';
                            } else {
                                echo '0  |';
                            } ?></a></h5>


              <h5 class="mb-0 text-small">Delivery Charge <i class="fa fa-rupee"></i><a href="#"><?php
                        echo $data_order1->delivery_charge.'  |'; ?></a></h5>


              <h5 class="mb-0">Total Amount <i class="fa fa-rupee"></i><a href="#"><?=$data_order1->final_amount; ?></a></h5>
            </div>
          </div>
        </div>

      </div>
    </div>
    <?php
                            }
                        }
                    }?>
  </div>
  <br>
</section>
