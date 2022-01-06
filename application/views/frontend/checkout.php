<br />
<br />
<br />
<br />
<br />
<br />
<style>
.chk{
background: #d76a46;
color: white;
border: none;
width:100%;
}
.chk:hover{
  background: #d76a46;
  color: white;
}
.apply{
  background: #d76a46;
  color: white;
  border: none;
  /* width:70%; */
}
.apply:hover{
  background: #d76a46;
  color: white;
}
</style>
<section>
<div class="container">
<div class="row">
<div class="col-md-7">
<h2>Checkout</h2>
<br />
<?
        $this->db->select('*');
$this->db->from('tbl_order2');
$this->db->where('main_id', $order_data->id);
$order2_data= $this->db->get();

foreach ($order2_data->result() as $order) {
 $this->db->select('*');
 $this->db->from('tbl_products');
 $this->db->where('id', $order->product_id);
 $pro_data= $this->db->get()->row(); ?>

<div class="row mt-2" style="border:1px solid #ccc;">
<div class="col-md-4 col-6">
<img src="<?=base_url().$pro_data->image?>" class="img-fluid p-2" style="width:150px;height:150px;"  />
</div>
<div class="col-md-8 col-6">
<span style="font-size:25px"><?=$pro_data->productname?></span>
<div class="row">
<span class="m-3">
Quantity:
</span>
<span class="m-3">
<?=$order->quantity?>
</span>
<span class="m-3">
Price:
</span>
<span class="m-3" id=""> Rs.
  <?=$order->total_amount?></span>
</div>
</div>
</div>
<?
}
?>
</div>
<div class="col-md-5 mt-3" style="position:sticky;">
<h4>Order Summary</h4>
<hr />
<p class="subtotal">Subtotal <span class="float-right" id="subtotal">Rs.<?=$order_data->total_amount?></span></p>
<p class="subtotal">Shipping Charges <span class="float-right" id="shipping">+ Rs.<?=$order_data->delivery_charge?></span></p>
<?if(!empty($order_data->promocode_id)){?>
<p class="subtotal">Promocode Discount <span class="float-right" id="shipping">- Rs.<?=$order_data->p_discount?></span></p>
<?}?>
<p class="subtotal">Estimated Total <span class="float-right" id="total_cost">Rs.<?=$order_data->final_amount?></span></p>
<hr />
<?if(!empty($order_data->promocode_id)){
            $this->db->select('*');
$this->db->from('tbl_coupancode');
$this->db->where('id',$order_data->promocode_id);
$promo_data= $this->db->get()->row();
  ?>
<p style="color:#d76a46">
<?=$promo_data->name;?>
&nbsp
<a href="" style="color:unset;"><i class="fa fa-times" aria-hidden="true" onclick="remove_promocode(this)"
  order_id="<?=base64_encode($order_data->id)?>"
></i></a>
</p>
<?}?>
<p class="float-left">Promocode:&nbsp</p>
<form id="promocode_form" action="<?=base_url()?>Order/apply_promocode" enctype="multipart/form-data">
<input type="hidden" name="order_id" value="<?=base64_encode($order_data->id)?>"/>
<input type="text" class="form-control" id="promoode" name="promocode" style="width:50%; display: inline;white-space:nowrap;margin-top:0px;margin-right:5px">
<button type="submit" class="apply mr-auto" id="promocode_submit">Apply</button>
</form>
<hr />
<input type="radio" id="html" name="fav_language" value="HTML">
<label for="html">COD</label>
<input type="radio" id="css" name="fav_language" value="CSS" style="margin-left:1rem">
<label for="css">Online</label>
  <div class="w-100">
      <form action="<?=base_url()?>Order/checkout" method="post" enctype="multipart/form-data">
        <input type="hidden" name="order_id" value="<?=base64_encode($order_data->id)?>"/>
    <button class="chk" type="submit">
      Place Order
    </button>
  </form>
  </div>
</div>
</div>
</section>
<br />
<br />
<br />
<br />
<br />
<br />
<script>
   $(document).ready(function() {
  $("#promocode_form").submit(function(e){
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var dataString = $(this).serialize();
      url = $(this).attr('action');
    $.ajax({
      url: url,
      method: 'post',
       data: dataString, // serializes the form's elements.
       dataType: 'json',
      success: function(response) {
        // alert(response)
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

          window.setTimeout(function(){location.reload()},500)

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
  });
  });
  function remove_promocode(obj) {
    var order_id = $(obj).attr("order_id");
    // alert(product_id);
    var base_path = "<?=base_url();?>";
    $.ajax({
      url: '<?=base_url();?>Order/remove_promocode',
      method: 'post',
      data: {
        order_id: order_id
      },
      dataType: 'json',
      success: function(response) {
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

          window.setTimeout(function(){location.reload()},2000)

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
