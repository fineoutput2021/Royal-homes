
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
.apply{
  background: #d76a46;
  color: white;
  border: none;
  /* width:70%; */
}
.apply:hover{
  background: black;
  color: white;
}
.ul_st2{
font-size: 18px;
}
.li_st2{
  line-height: 1.3rem;
}
.sp{
  color:red
}

</style>
<div class="ggty" style="line-height:4rem;" >

</div>
<section>
<div class="container">
<div class="row">
<div class="col-md-8">
<h2>Address</h2>
<br />
<div class="card mb-4">
  <div class="card-header py-3">
    <h5 class="mb-0">Biling details</h5>
  </div>
  <div class="card-body">
    <!-- <form id="address_form" action="<?=base_url()?>Order/add_address" method="post" enctype="multipart/form-data"> -->
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row ">
        <div class="col-12 col-md-6">
          <div class="form-outline">
            <label class="form-label" for="name">Name<span class="sp">*</span></label>
            <input type="text" id="name" name="name" class="form-control mt-1" required onkeyup='saveValue(this);'/>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-outline">
            <label class="form-label" for="email">Email<span class="sp">*</span></label>
            <input type="email" id="email" name="email" class="form-control mt-1" required onkeyup='saveValue(this);'/>
            <label style="font-size:12px;color:red;" id="email_alert"></label>
          </div>
        </div>
      </div>

      <!-- Text input -->
      <div class="row mb-4">
        <div class="col-12 col-md-6">
          <div class="form-outline">
            <label class="form-label" for="phone">Contact<span class="sp">*</span></label>
            <input type="text" id="phone" name="phone" maxlength="10" minlength="10" class="form-control mt-1" required onkeypress="return isNumberKey(event)" onkeyup='saveValue(this);'/>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-outline">
            <label class="form-label" for="pincode">Pincode<span class="sp">*</span></label>
            <input type="text" id="pincode" name="pincode"  minlength="4" class="form-control mt-1" required  onkeyup='saveValue(this);'/>
            <label style="font-size:12px;color:red;" id="alert"></label>
          </div>
        </div>
      </div>

      <!-- address input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="address">Address<span class="sp">*</span></label>
        <textarea class="form-control" id="address" name="address" rows="4" required onkeyup='saveValue(this);'></textarea>
      </div>

      <!-- Checkbox -->
      <!-- <div class="form-check d-flex justify-content-center mb-2">
        <button class="chk" style="width:30%">
        Save Address
        </button>
      </div> -->
    <!-- </form> -->
  </div>
</div>
</div>
<div class="col-md-4 mt-3" style="position:sticky;">
<h4>Order Summary</h4>
<hr />
<?php
        $this->db->select('*');
$this->db->from('tbl_order2');
$this->db->where('main_id', $order_data->id);
$order2_data= $this->db->get();

foreach ($order2_data->result() as $order) {
    $this->db->select('*');
    $this->db->from('tbl_products');
    $this->db->where('id', $order->product_id);
    $pro_data= $this->db->get()->row(); ?>

<div class="row">
  <div class="col-md-3 col-5 p-2 pimg ">
       <img src="<?=base_url().$pro_data->image?>">
       </div>
       <div class="col-md-9 col-7 p-2 fsize " >
         <ul class="ul_st2">
           <li class="li_st2"><span><?=$pro_data->productname?></span></li>
           <li class="li_st2"><span>Qty:&nbsp; <?=$order->quantity?></span></li>
           <li class="li_st2"><span>Price:&nbsp;£<?=$order->total_amount?></span></li>
         </ul>
        </div>
</div>
<?
}?>
<hr />
<div id="amount_div" >
<p class="subtotal" style="text-align:start;">Subtotal <span class="float-right" id="subtotal">£<?=$order_data->total_amount?></span></p>
<p class="subtotal" style="text-align:start;">Shipping Charges <span class="float-right" id="shipping">+ £<?if (!empty($order_data->delivery_charge)) {
        echo $order_data->delivery_charge;
    } else {
        echo 0;
    }?></span></p>
<?if (!empty($order_data->promocode_id)) {?>
<p class="subtotal" style="text-align:start;">Promocode Discount <span class="float-right" id="discount">- £<?=$order_data->p_discount?></span></p>
<?}?>
<p class="subtotal" style="text-align:start;">Estimated Total <span class="float-right" id="total_cost">£<?=$order_data->final_amount?></span></p>
<hr />
<?if (!empty($order_data->promocode_id)) {
        $this->db->select('*');
        $this->db->from('tbl_coupancode');
        $this->db->where('id', $order_data->promocode_id);
        $promo_data= $this->db->get()->row(); ?>
<p style="color:#d76a46">
<?=$promo_data->name; ?>
&nbsp
<a href="javascript:void(0);" style="color:unset;"><i class="fa fa-times" aria-hidden="true" onclick="remove_promocode(this)"
  order_id="<?=base64_encode($order_data->id)?>"
></i></a>
</p>
<?
    }?>
  </div>

<p class="float-left">Promocode:&nbsp</p>
<form id="promocode_form" action="javascript:void(0);" method="post" enctype="multipart/form-data">
<input type="hidden" name="order_id" value="<?=base64_encode($order_data->id)?>"/>
<input type="text" class="form-control" id="promoode" name="promocode" style="width:70%; display: inline;white-space:nowrap;margin-top:0px;margin-right:5px">
<button type="submit" class="apply mr-auto" id="promocode_submit">Apply</button>
</form>
<hr />
  <div class="w-100" style="display:none" id="enable">
      <form action="<?=base_url()?>Order/checkout" method="post" enctype="multipart/form-data">
        <input type="hidden" name="name"  id="h_name"value="">
        <input type="hidden" name="email" id="h_email" value="">
        <input type="hidden" name="phone" id="h_phone" value="">
        <input type="hidden" name="address" id="h_address" value="">
        <input type="hidden" name="pincode" id="h_pincode" value="">
        <input type="hidden" name="order_id" value="<?=base64_encode($order_data->id)?>"/>
    <button class="chk" type="submit">
      Place Order
    </button>
  </form>
  </div>
  <div class="w-100" id="disable">
    <button class="chk" disabled style="background-color:grey">
      Place Order
    </button>
    <span class="sp">Please fill all required fields</span>
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
<script type="text/javascript">
//====== check input field every 30 sec ============
var intervalId = window.setInterval(function(){
  if(($("#h_name").val()!="") &&  ($("#h_email").val()!="")  && ($("#h_phone").val().length==10)  && ($("#h_address").val()!="")  && ($("#h_pincode").val()!="") ) {
document.getElementById("enable").style.display = "block";
document.getElementById("disable").style.display = "none";
}else{
  document.getElementById("disable").style.display = "block";
  document.getElementById("enable").style.display = "none";
}
}, 100);
</script>
<script type="text/javascript">
//============== check pincode===============
$(document).ready(function() {
$("#pincode").keyup(function() {
  // alert("hi")
// check_pincode();
// $("#pincode").on("keyup",function() {
// check_pincode();
// });
  // var minLength = $(this).attr("minlength");
  // if((minLength <= $(this).val().length) &&  ($(this).val().length==0)) {
    // function check_pincode(){
    var pincode = $('#pincode').val();
    if(pincode != ""){
    $.ajax({
      url: '<?=base_url();?>Order/check_pincode',
      method: 'post',
      data: {
        pincode: pincode
      },
      dataType: 'json',
      success: function(response) {
        if (response.data == true) {
          // document.getElementById('shipping').innerHTML = "£"+response.shipping;
          // document.getElementById('total_cost').innerHTML = "£"+response.final;
          $( "#amount_div" ).load(window.location.href + " #amount_div" );

          document.getElementById('alert').innerHTML = "";
          document.getElementById("h_pincode").value = pincode;
        } else if (response.data == false) {
          // if(!empty(response.alert)){
          document.getElementById('alert').innerHTML = response.alert;
          $( "#amount_div" ).load(window.location.href + " #amount_div" );
          document.getElementById("h_pincode").value = "";

        // }
          if(typeof response.data_message !== "undefined"){
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

        }
        }
      }
    });
  }else{
      document.getElementById("h_pincode").value = "";
      if($('#pincode').val().length!=0){
      pincode=1;
      $.ajax({
        url: '<?=base_url();?>Order/check_pincode',
        method: 'post',
        data: {
          pincode: pincode
        },
        dataType: 'json',
        success: function(response) {
          if (response.data == true) {
            // document.getElementById('shipping').innerHTML = "£"+response.shipping;
            // document.getElementById('total_cost').innerHTML = "£"+response.final;
            $( "#amount_div" ).load(window.location.href + " #amount_div" );

            document.getElementById('alert').innerHTML = "";
            document.getElementById("h_pincode").value = pincode;
          } else if (response.data == false) {
            // if(!empty(response.alert)){
            document.getElementById('alert').innerHTML = response.alert;
            $( "#amount_div" ).load(window.location.href + " #amount_div" );
            document.getElementById("h_pincode").value = "";

          // }
            if(typeof response.data_message !== "undefined"){
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

          }
          }
        }
      });
      $( "#amount_div" ).load(window.location.href + " #amount_div" );

  }}
  // }
}).keyup();
// }
});
</script>
<script>

   $(document).ready(function() {
  // $("#promocode_form").submit(function(e){
   // $('#promocode_submit').on('click',function(e){
   $('#promocode_form').on('submit',function(e){
   // $("#promocode_submit").click(function(){
    // alert("hi")
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var frm = $(this).closest("#promocode_form");
    var dataString = frm.serialize();
      url = "<?=base_url()?>Order/apply_promocode";
    $.ajax({
      url: url,
      method: 'post',
       data: dataString, // serializes the form's elements.
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

          $( "#amount_div" ).load(window.location.href + " #amount_div > *" );
          // window.location.reload();

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
          // window.location.reload();
          $( "#amount_div" ).load(window.location.href + " #amount_div > *" );

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

          $( "#amount_div" ).load(window.location.href + " #amount_div > *" );


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
          $( "#amount_div" ).load(window.location.href + " #amount_div > *" );
        }
      }
    });
  }
</script>

<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<script>
document.getElementById("name").value = getSavedValue("name");
document.getElementById("email").value = getSavedValue("email");
document.getElementById("phone").value = getSavedValue("phone");
document.getElementById("address").value = getSavedValue("address");
document.getElementById("pincode").value = getSavedValue("pincode");
document.getElementById("h_name").value = getSavedValue("name");
document.getElementById("h_email").value = getSavedValue("email");
document.getElementById("h_phone").value = getSavedValue("phone");
document.getElementById("h_address").value = getSavedValue("address");

function saveValue(e){

var id = e.id;  // get the sender's id to save it .
var val = e.value; // get the value.
localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override .
document.getElementById("h_name").value = getSavedValue("name");
document.getElementById("h_phone").value = getSavedValue("phone");
document.getElementById("h_address").value = getSavedValue("address");
document.getElementById("h_address").value = getSavedValue("pincode");
if(!validateEmail(document.getElementById("email").value)){
document.getElementById('email_alert').innerHTML = "Please enter valid email address";
document.getElementById("h_email").value = "";
}else{
  document.getElementById("h_email").value = getSavedValue("email");
  document.getElementById('email_alert').innerHTML = "";


}
}

function getSavedValue  (v){
if (!localStorage.getItem(v)) {
return "";// You can change this to your defualt value.
}
return localStorage.getItem(v);
}

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
</script>
