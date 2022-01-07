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
  .can_btn:hover {
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
<br />
<br />
<br />
<br />
<br />
<section class="my_order pb-10">
  <div class="container">
    <center>
      <h1>My Orders</h1>
    </center>
    <?php
                    if (!empty($this->session->userdata('user_id'))) {
                        $order_check = $order1_data->row();
                      if(!empty($order_check)){
                        $i=0;
                        foreach ($order1_data->result() as $data_order1) {
                            if ($data_order1->order_status != 0) {
                                $this->db->select('*');
                                $this->db->from('tbl_coupancode');
                                $this->db->where('id', $data_order1->promocode_id);
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
              <button class="float-left order_small mr-4" style="color:white;background:#d76a46">order
              #<?=$data_order1->id; ?>
              </button>
              <span class="sp_od_web" style="color:black">Order Placed :
                  <?php
                                $newdate = new DateTime($data_order1->date);
                                echo $newdate->format('j F, Y');   #d-m-Y  // March 10, 2001, 5:16 pm?>
                </span>
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
                                $order2_data= $this->db->get();
                                $o2_check = $order2_data->row();

                                if (!empty($o2_check)) {
                                    foreach ($order2_data->result() as $order2) {
                                        $this->db->select('*');
                                        $this->db->from('tbl_products');
                                        $this->db->where('id', $order2->product_id);
                                        $pro_data= $this->db->get()->row();

                                        if (!empty($pro_data)) {
                                            $o_product_name = $pro_data->productname;
                                            $sprice = $pro_data->mrp;
                                            $o_product_image = $pro_data->image;
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
              <img src="<?php   echo  base_url() .$o_product_image;  ?>">
              <?php } else {
                                            echo "No Image Found!";
                                        } ?>

            </div>
            <div class="col-8 col-lg-10 col-md-10">

              <h4><?=$o_product_name; ?> </h4>
              <p>Quantity: <?=$order2->quantity; ?></p>
              <p>Price: <?=$order2->total_amount; ?></p>
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
              <button class="can_btn" style="color:red"><i class="fa fa-times pr-2"></i>Cancelled</button>
              <?php } else { ?>
              <a href="">
                <button class="can_btn" onclick=cancel_order('<?=base64_encode($data_order1->id)?>') style="color:red"><i class="fa fa-times pr-2"></i>Cancel Order</button>
              </a>
              <?php } ?>

            </div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 d-flex align-items-center ab_p_h" style="justify-content: space-between;">
              <p class="mb-0 text-small">Promocode :

                  <?php if (!empty($data_order1->promocode_id)) {
                                $this->db->select('*');
                    $this->db->from('tbl_coupancode');
                    $this->db->where('id',$data_order1->promocode_id);
                    $promodata= $this->db->get()->row();
                                    echo $promodata->name.' | ';
                                }else{
                                  echo 'NA |';
                                 } ?>

                </p>

              <h5 class="mb-0 text-small">Promocode Discount: <i class="fa fa-rupee"></i><?php
                            if (!empty($data_order1->p_discount)) {
                                echo $data_order1->p_discount.'  |';
                            } else {
                                echo '0  |';
                            } ?></h5>


              <h5 class="mb-0 text-small">Delivery Charge: <i class="fa fa-rupee"></i><?php
                        echo $data_order1->delivery_charge.'  |'; ?></h5>


              <h5 class="mb-0">Total Amount: <i class="fa fa-rupee"></i><?=$data_order1->final_amount; ?></h5>
            </div>
          </div>
        </div>

      </div>
    </div>
    <?php
                            }
                        }
                    }else{?>
    <h2>No Orders</h2>
    <?}}?>
  </div>
  <br>
</section>
<script>
function cancel_order(order_id) {

  $.ajax({
    url: '<?=base_url();?>Home/cancel_order',
    method: 'post',
    data: {
      order_id: order_id
    },
    dataType: 'json',
    success: function(response) {
      alert(response.data)
      if (response.data == true) {
        $.notify({
          icon: 'fa fa-check',
          title: '',
          message: response.data_message
        }, {
          element: 'body',
          position: null,
          type: "success",
          allow_dismiss: true,
          newest_on_top: false,
          showProgressbar: false,
          placement: {
            from: "top",
            align: "right"
          },
          offset: 20,
          spacing: 10,
          z_index: 1031,
          delay: 1000,
          animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
          },
          icon_type: 'class',
          template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });

        window.setTimeout(function(){location.reload()},3000)

      } else if (response.data == false) {
        $.notify({
          icon: 'fa fa-cancel',
          title: '',
          message: response.data_message
        }, {
          element: 'body',
          position: null,
          type: "danger",
          allow_dismiss: true,
          newest_on_top: false,
          showProgressbar: true,
          placement: {
            from: "top",
            align: "right"
          },
          offset: 20,
          spacing: 10,
          z_index: 1031,
          delay: 5000,
          animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
          },
          icon_type: 'class',
          template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
        window.setTimeout(function(){location.reload()},2000)
      }
    }
  });
}
</script>
