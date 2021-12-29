<div class="content-wrapper">
<section class="content-header">
<h1>
Update Products
</h1>

</section>
<section class="content">
<div class="row">
<div class="col-lg-12">

<div class="panel panel-default">
<div class="panel-heading">
 <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Update Products</h3>
</div>

      <? if(!empty($this->session->flashdata('smessage'))){  ?>
           <div class="alert alert-success alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
       <h4><i class="icon fa fa-check"></i> Alert!</h4>
      <? echo $this->session->flashdata('smessage');  ?>
     </div>
        <? }
        if(!empty($this->session->flashdata('emessage'))){  ?>
        <div class="alert alert-danger alert-dismissible">
     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
     <h4><i class="icon fa fa-ban"></i> Alert!</h4>
    <? echo $this->session->flashdata('emessage');  ?>
   </div>
      <? }  ?>


<div class="panel-body">
 <div class="col-lg-10">
    <form action=" <?php echo base_url()  ?>dcadmin/products/add_products_data/<? echo base64_encode(2);?>/<?=$id;?>" method="POST" id="slide_frm" enctype="multipart/form-data">
 <div class="table-responsive">
     <table class="table table-hover">
<tr>
<td> <strong>Product Name</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="productname"  class="form-control" placeholder="" required value="<?=$products_data->productname?>" />  </td>
</tr>


<tr>
<td> <strong>Subcategory Name</strong>  <span style="color:red;">*</span></strong> </td>
<td>


<select class="selectpicker form-control" multiple data-live-search="true" name="sub_category[]">
  <? foreach($subcategory_data->result() as $sub){?>

    <option value="<?=$sub->id;?>"


      <?php
      $data_subcategory=json_decode($products_data->subcategory);


    // $dat_impload=implode(",",$data_subcategory);

    foreach($data_subcategory as $value){
      if($value == $sub->id){ echo "selected"; }
    } ?>
    >

    <?=$sub->subcategory;?>
    </option>


<? } ?>
</select>


</td>
</tr>

<tr>
<td> <strong>image</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="file" name="image"  class="form-control" placeholder=""  value="<?=$products_data->image?>" />
  <?php if($products_data->image!=""){ ?>
  <img id="slide_img_path" height=50 width=100 src="<?php echo base_url().$products_data->image
  ?>" >
  <?php }else { ?>
  Sorry No File Found
  <?php } ?></td>
</tr>
<tr>
<td> <strong>image1</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="file" name="image1"  class="form-control" placeholder=""  value="<?=$products_data->image1?>" />
  <?php if($products_data->image1!=""){ ?>
  <img id="slide_img_path" height=50 width=100 src="<?php echo base_url().$products_data->image1
  ?>" >
  <?php }else { ?>
  Sorry No File Found
  <?php } ?></td>
</tr>
<tr>
<td> <strong>image2</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="file" name="image2"  class="form-control" placeholder=""  value="<?=$products_data->image2?>" />
  <?php if($products_data->image2!=""){ ?>
  <img id="slide_img_path" height=50 width=100 src="<?php echo base_url().$products_data->image2
  ?>" >
  <?php }else { ?>
  Sorry No File Found
  <?php } ?>

 </td>
</tr>
<tr>
<td> <strong>image3</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="file" name="image3"  class="form-control" placeholder=""  value="<?=$products_data->image3?>" />
  <?php if($products_data->image3!=""){ ?>
  <img id="slide_img_path" height=50 width=100 src="<?php echo base_url().$products_data->image3
  ?>" >
  <?php }else { ?>
  Sorry No File Found
  <?php } ?>

 </td>
</tr>
<tr>
<td> <strong>mrp</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="number" name="mrp"  class="form-control" placeholder=""  value="<?=$products_data->mrp?>" />  </td>
</tr>
<tr>
<td> <strong>Product Description</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="productdescription"  class="form-control" placeholder=""  value="<?=$products_data->productdescription?>" />  </td>
</tr>
<tr>
<td> <strong>FEATURE</strong>  <span style="color:red;">*</span></strong> </td>
<td> <textarea name="feature" id="editor1" rows="3" cols="80" required ><?=$products_data->feature?></textarea>
</tr>
<tr>
<td> <strong>Care Instruction</strong>  <span style="color:red;">*</span></strong> </td>
<td> <textarea name="careinstruction" id="editor2" rows="3" cols="80" required ><?=$products_data->careinstruction?></textarea>
</tr>
<tr>
<td> <strong>Model No.</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="modelno"  class="form-control" placeholder=""  value="<?=$products_data->modelno?>" />  </td>
</tr>
<tr>
<td> <strong>Best Seller Product</strong>  <span style="color:red;">*</span></strong> </td>
<td> <select class="form-control" name="bestsellerproduct" required>

<!-- <option value="1" selected>Please Select</option> -->
<option value="1" <? if($products_data->bestsellerproduct == 1){echo "selected";} ?>>Yes</option>
<option value="0" <? if($products_data->bestsellerproduct == 0){echo "selected";} ?>>No</option>
</select> </td>
</tr>


<tr>
<td colspan="2" >
<input type="submit" class="btn btn-success" value="save">
</td>
</tr>
         </table>
     </div>

  </form>

     </div>



 </div>

</div>

</div>
</div>
</section>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src=" <?php echo base_url()  ?>assets/slider/ajaxupload.3.5.js"></script>
<link href=" <? echo base_url()  ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
<script type="text/javascript">
  $('select').selectpicker();
</script>

<script>
$(document).ready(function(){
$("#cid").change(function(){
var vf=$(this).val();
// var yr = $("#year_id option:selected").val();
if(vf==""){
return false;

}else{
$('#sid option').remove();
var opton="<option value=''>Please Select </option>";
$.ajax({
url:base_url+"dcadmin/products/getSubcategory?isl="+vf,
data : '',
type: "get",
success : function(html){
if(html!="NA")
{
var s = jQuery.parseJSON(html);
$.each(s, function(i) {
opton +='<option value="'+s[i]['sub_id']+'">'+s[i]['sub_name']+'</option>';
});
$('#sid').append(opton);
//$('#city').append("<option value=''>Please Select State</option>");

//var json = $.parseJSON(html);
//var ayy = json[0].name;
//var ayys = json[0].pincode;
}
else
{
alert('No Subcategory Found');
return false;
}

}

})
}


})
});
</script>
<script src="<?php echo base_url() ?>assets/admin/plugins/ckeditor/ckeditor.js"></script>

<script>
// Replace the <textarea id="editor1"> with a CKEditor

// instance, using default configuration.

CKEDITOR.replace( 'editor1' );
CKEDITOR.replace( 'editor2' );
// CKEDITOR.replace( 'editor3' );
//
</script>
