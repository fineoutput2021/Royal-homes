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
  background: black;
  color: white;
}
</style>
<section>
<div class="container">
<div class="row">
<div class="col-md-8">
<h2>Your Shopping Bag</h2>
<br />
<?
$cart_check = $cart_data->row();
if (empty($cart_check)) {?>
<h2>Your cart is empty! Please add some product</h2>
<?} else {
$total=0;
$i=1;
foreach ($cart_data->result() as $cart) {
$this->db->select('*');
$this->db->from('tbl_products');
$this->db->where('id', $cart->product_id);
$pro_data= $this->db->get()->row(); ?>
<div class="row mt-2" style="border:1px solid #ccc;">
<div class="col-md-3 col-6">
<img src="<?=base_url().$pro_data->image?>" class="img-fluid p-2" style="width:150px;height:150px;"  />
</div>
<div class="col-md-9 col-6">
<span style="font-size:25px"><?=$pro_data->productname?></span>
<a href="" onclick="deleteCartOnline(this)" product_id="<?=base64_encode($cart->product_id)?>"><span class="float-right" style="font-size:30px; color:#d76a46">&times</span></a>
<div class="row">
<span class="m-2">
Quantity:
</span>
<span class="m-2">
  <input type="number" class="form-control" style="width:70px"
i="<?=$i?>" value="<?=$cart->quantity?>" min="1" onchange="updateCartOnline(this)" product_id="<?=base64_encode($cart->product_id)?>" mrp="<?=$pro_data->mrp?>"
  >
</span>
<span class="m-2">
Price:
</span>
<span class="m-2" id="price_<?=$i?>"> Rs.
  <?=$mrp =$pro_data->mrp*$cart->quantity?></span>
</div>
</div>
</div>
<?$total = $total + $mrp;
$i++;
}
}?>
</div>
<div class="col-md-4 mt-3" style="position:sticky;">
<h4>Order Summary</h4>
<hr />
<p class="subtotal">Subtotal <span class="float-right" id="subtotal">Rs.<?if (empty($cart_check)) {
echo 0;
} else {
echo $total;
}?></span></p>
<p class="subtotal">Estimated Total <span class="float-right" id="total_cost">Rs.  <?if (empty($cart_check)) {
echo 0;
} else {
echo $total;
}?></span></p>
  <div class="w-100">
      <a href="<?=base_url()?>Order/calculate">
    <button class="chk">
      Checkout
    </button>
  </a>
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
  function deleteCartOnline(obj) {
    var product_id = $(obj).attr("product_id");
    // alert(product_id);
    var base_path = "<?=base_url();?>";
    $.ajax({
      url: '<?=base_url();?>Cart/deleteCartOnline',
      method: 'post',
      data: {
        product_id: product_id
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

  function updateCartOnline(obj) {
    var product_id = $(obj).attr("product_id");
    var mrp = $(obj).attr("mrp");
    var qty = $(obj).val();
    if(qty==0){
      window.location.reload();
      return;
    }
    var i = $(obj).attr("i");
    var price = parseInt(mrp) * parseInt(qty);
    var base_path = "<?=base_url();?>";
    $.ajax({
      url: '<?=base_url();?>Cart/updateCartOnline',
      method: 'post',
      data: {
        product_id: product_id,
        quantity: qty
      },
      dataType: 'json',
      success: function(response) {
        // alert(response)
        if (response.data == true) {
          document.getElementById('price_' + i).innerHTML = "Rs."+price;
          document.getElementById('subtotal').innerHTML = response.data_price;
          document.getElementById('total_cost').innerHTML = response.data_subtotal;
          $.notify({
            icon: 'fa fa-check',
            title: 'Alert!',
            message: response.data_message
          }, {
            element: 'body',
            position: null,
            type: "success",
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
              // '<div class="progress" data-notify="progressbar">' +
              // '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
              // '</div>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });

          window.setTimeout(function(){location.reload()},2000)
        } else if (response.data == false) {
          $.notify({
            icon: 'fa fa-cancel',
            title: 'Alert!',
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
              // '<div class="progress" data-notify="progressbar">' +
              // '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
              // '</div>' +
              '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });
          window.setTimeout(function(){location.reload()},1000)

        }
      }
    });
  }
</script>
