<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Add New Products
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>dcadmin/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo base_url() ?>dcadmin/products/view_products"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>  View Products </a></li>
      <!-- <li class="active">View Categories</li> -->
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Add New Products</h3>
          </div>

          <?php if (!empty($this->session->flashdata('smessage'))) {  ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            <?php echo $this->session->flashdata('smessage');  ?>
          </div>
          <?php }
                                              if (!empty($this->session->flashdata('emessage'))) {  ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            <?php echo $this->session->flashdata('emessage');  ?>
          </div>
          <?php }  ?>


          <div class="panel-body">
            <div class="col-lg-10">
              <form action=" <?php echo base_url()  ?>dcadmin/products/add_products_data/<?php echo base64_encode(1);  ?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                <div class="table-responsive">
                  <table class="table table-hover">

                    <tr>
                      <td> <strong>Product Name</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <input type="text" name="productname" class="form-control" placeholder="" required value="" /> </td>
                    </tr>
                    <tr>
                      <td> <strong>Category Wise</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="radio" id="category_y" name="is_category" value="1">
                        <label for="category_y"> Yes</label>
                        <input type="radio" checked id="category_n" name="is_category" value="0">
                        <label for="category_n"> No</label><br>
                       </td>
                    </tr>
                    <tr class="desc" id="tr1" style="display: none;">
                      <td> <strong>Category</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <select class="form-control" name="categorys[]">
                          <?php $i=1; foreach($category_data->result() as $data) { ?>
        <option value="<?=$data->id?>"><?=$data->categoryname?></option>
      <?}?>
      </select>
                       </td>
                    </tr>
                    <tr class="desc" id="tr0">
                            <td> <strong>Subcategory Name</strong> <span style="color:red;">*</span></strong> </td>


                            <td>

                              <select class="selectpicker form-control" multiple data-live-search="true" name="sub_category[]">
                                <?php foreach ($subcategory_data->result() as $value) {?>
                                <option value="<?=$value->id;?>"><?=$value->subcategory?></option>

                                <?php } ?>
                              </select>
                          </tr>

                    <tr>
                      <td> <strong>Image</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <input type="file" name="image" class="form-control" placeholder="" required value="" />
                        <label style="color:red;">Size 1000*1000</label>
                       </td>
                    </tr>
                    <tr>
                      <td> <strong>Image1</strong></td>
                      <td> <input type="file" name="image1" class="form-control" placeholder=""  value="" />
                        <label style="color:red;">Size 1000*1000</label>
                       </td>
                    </tr>
                    <tr>
                      <td> <strong>Image2</strong></td>
                      <td> <input type="file" name="image2" class="form-control" placeholder=""  value="" />
                        <label style="color:red;">Size 1000*1000</label>
                       </td>
                    </tr>
                    <tr>
                      <td> <strong>Image3</strong></td>
                      <td> <input type="file" name="image3" class="form-control" placeholder=""  value="" />
                        <label style="color:red;">Size 1000*1000</label>
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>MRP</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <input type="text" name="mrp" class="form-control" placeholder="" required value="" onkeypress="return isNumberKey(event)"/> </td>
                    </tr>
                    <tr>
                      <td> <strong>Selling Price</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <input type="text" name="selling_price" class="form-control" placeholder="" required value="" onkeypress="return isNumberKey(event)"/> </td>
                    </tr>
                    <tr>
                      <td> <strong>Short Description</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <textarea name="s_description" id="editor4" rows="3" cols="80" required></textarea>
                    </tr>
                    <tr>
                      <td> <strong>Long Description</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <textarea name="productdescription" id="editor1" rows="3" cols="80" required></textarea>
                    </tr>
                    <tr>
                      <td> <strong>Features</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <textarea name="feature" id="editor2" rows="3" cols="80" required></textarea>
                    </tr>
                    <tr>
                      <td> <strong>Care Instruction</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <textarea name="careinstruction" id="editor3" rows="3" cols="80" required></textarea>
                    </tr>
                    <tr>
                      <td> <strong>Model No.</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <input type="text" name="modelno" class="form-control" placeholder="" required value="" /> </td>
                    </tr>
                    <tr>
                      <td> <strong>Inventory</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <input type="text" name="inventory" class="form-control" placeholder="" required value="" onkeypress="return isNumberKey(event)"/> </td>
                    </tr>
                    <tr>
                      <td> <strong>Best Seller Product</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="radio" id="vehicle1" name="bestsellerproduct" value="1">
                        <label for="vehicle1"> Yes</label>
                        <input type="radio" checked id="vehicle2" name="bestsellerproduct" value="0">
                        <label for="vehicle2"> No</label><br>
                       </td>
                    </tr>


                    <tr>
                      <td colspan="2">
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



<script type="text/javascript" src=" <?php echo base_url()?>assets/slider/ajaxupload.3.5.js"></script>
<link href=" <?php echo base_url()  ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
<script type="text/javascript">
  $('select').selectpicker();
</script>
<script>
$(document).ready(function() {
  $("input[name$='is_category']").click(function() {
      var test = $(this).val();

      $("tr.desc").hide();
      $("#tr" + test).show();
  });
});
</script>
<script>
var cid_obj = {}
cid_obj.ids = []
localStorage.setItem('cid_arr', JSON.stringify(cid_obj))

function c_id(e) {
  var vf = e.target.value;
  alert(e.target.getAttribute("data"));

  // var yr = $("#year_id option:selected").val();
  if (vf == "") {
    console.log("!")
    const arr = JSON.parse(localStorage.getItem('cid_arr'));
    console.log(arr)
    // alert("fgfdf",e.target.getAttribute("data"))
    var index = arr.ids.indexOf(e.target.getAttribute("data"))
    console.log(index)

    if (index > -1) {
      arr.ids.splice(index, 1);
    }
    localStorage.setItem("cid_arr", JSON.stringify(arr))

    e.target.value = e.target.getAttribute("data");

    $('#sid option').remove();

    return false;

  } else {
    // var arr = [];
    // if(localStorage.getItem('cid_arr')!==null){
    console.log("!")

    const arr = JSON.parse(localStorage.getItem('cid_arr'));
    // alert(arr);

    const newData = {};

    newData.ids = [...arr.ids, e.target.value]
    localStorage.setItem("cid_arr", JSON.stringify(newData))
    // }
    $('#sid option').remove();
    var opton = "<option value=''>Please Select </option>";
    var data = JSON.parse(localStorage.getItem('cid_arr'))
    // console.log('data',data)
    $.ajax({
      url: base_url + "dcadmin/products/getSubcategory",
      data: data,
      type: "post",
      success: function(html) {
        if (html != "NA") {

          console.log(html)
          var s = jQuery.parseJSON(html);
          console.log(s);
          $.each(s, function(i) {
            opton += '<option value="' + s[i]['sub_id'] + '">' + s[i]['sub_name'] + '</option>';
          });
          $('#sid').append(opton);
          //$('#city').append("<option value=''>Please Select State</option>");

          //var json = $.parseJSON(html);
          //var ayy = json[0].name;
          //var ayys = json[0].pincode;
        } else {
          alert('No Subcategory Found');
          return false;
        }

      }

    })
    e.target.value = "";
  }


}
</script>
<script src="<?php echo base_url() ?>assets/admin/plugins/ckeditor/ckeditor.js"></script>

<script>
  // Replace the <textarea id="editor1"> with a CKEditor

  // instance, using default configuration.

  CKEDITOR.replace('editor1');
  CKEDITOR.replace('editor2');
  CKEDITOR.replace( 'editor3' );
  CKEDITOR.replace( 'editor4' );
  //
</script>

<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
