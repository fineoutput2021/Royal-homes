<div class="content-wrapper">
  <section class="content-header">
    <h1>
      View Best Seller
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>dcadmin/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <!-- <li><a href="<?php echo base_url() ?>dcadmin/sellerslider/view_sellerslider"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>  View Best Seller </a></li> -->
      <!-- <li class="active">View Categories</li> -->
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <!-- <a class="btn custom_btn" href="<?php base_url() ?>dcadmin/products/add_products"
        role="button" style="margin-bottom:12px;"> Add products</a> -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> View Best Seller</h3>
          </div>
          <div class="panel panel-default">

            <? if(!empty($this->session->flashdata('smessage'))){ ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Alert!</h4>
              <? echo $this->session->flashdata('smessage'); ?>
            </div>
            <? }
        if(!empty($this->session->flashdata('emessage'))){ ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i> Alert!</h4>
              <? echo $this->session->flashdata('emessage'); ?>
            </div>
            <? } ?>


            <div class="panel-body">
              <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped" id="userTable">
                  <thead>
                    <tr>
                      <th>#</th>

                      <th>Product Name</th>
                      <th>Category Name</th>
                      <th>Subcategory Name</th>
                      <th>image</th>
                      <th>image1</th>
                      <th>image2</th>
                      <th>image3</th>
                      <th>MRP</th>
                      <th>Product Description</th>
                      <th>feature</th>
                      <th>Case Instruction</th>
                      <th>Model No.</th>



                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($products_data->result() as $data) { ?>
                    <tr>
                      <td><?php echo $i ?> </td>
                      <td><?php echo $data->productname?></td>

                      <td><?php $category_id=json_decode($data->category);
             foreach($category_id as $value){

                 $this->db->select('*');
       $this->db->from('tbl_category');
       $this->db->where('id',$value);
       $category_data= $this->db->get()->row();

       if(!empty($category_data)){
       echo $category_name=$category_data->categoryname;
       echo ", ";
       }else{
       echo "No Category";
       }
       }
       ?></td>
                      <td><?php $subcategory_id=json_decode($data->subcategory);
if(!empty($subcategory_id)){
foreach($subcategory_id as $value1){
        $this->db->select('*');
$this->db->from('tbl_subcategory');
$this->db->where('id',$value1);
$subcategory_data= $this->db->get()->row();
if(!empty($subcategory_data)){
echo $subcategory_name=$subcategory_data->subcategory;
echo ", ";
}else{
echo "";

}
}
}else{
echo "No Subcategory";
}
?></td>

                      <td>
                        <?php if($data->image!=""){ ?>
                        <img id="slide_img_path" height=50 width=100 src="<?php echo base_url().$data->image
        ?>">
                        <?php }else { ?>
                        Sorry No File Found
                        <?php } ?>
                      </td>


                      <td>
                        <?php if($data->image1!=""){ ?>
                        <img id="slide_img_path" height=50 width=100 src="<?php echo base_url().$data->image1
        ?>">
                        <?php }else { ?>
                        Sorry No File Found
                        <?php } ?>
                      </td>


                      <td>
                        <?php if($data->image2!=""){ ?>
                        <img id="slide_img_path" height=50 width=100 src="<?php echo base_url().$data->image2
        ?>">
                        <?php }else { ?>
                        Sorry No File Found
                        <?php } ?>
                      </td>


                      <td>
                        <?php if($data->image3!=""){ ?>
                        <img id="slide_img_path" height=50 width=100 src="<?php echo base_url().$data->image3
        ?>">
                        <?php }else { ?>
                        Sorry No File Found
                        <?php } ?>
                      </td>

                      <td><?php echo $data->mrp ?></td>
                      <td><?php echo $data->productdescription ?></td>
                      <td><?php echo $data->feature ?></td>
                      <td><?php echo $data->careinstruction ?></td>

                      <td><?php echo $data->modelno ?></td>




                      <!--
        <td><?php if($data->is_active==1){ ?>
        <p class="label bg-green" >Active</p>

        <?php } else { ?>
        <p class="label bg-yellow" >Inactive</p>


        <?php } ?>
        </td> -->
                      <!-- <td>
        <div class="btn-group" id="btns<?php echo $i ?>">
        <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        Action <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">

        <?php if($data->is_active==1){ ?>
        <li><a href="<?php  base_url() ?>dcadmin/products/updateproductsStatus/<?php
        base64_encode($data->id) ?>/inactive">Inactive</a></li>
        <?php } else { ?>
        <li><a href="<?php  base_url() ?>dcadmin/products/updateproductsStatus/<?php
        base64_encode($data->id) ?>/active">Active</a></li>
        <?php } ?>
        <li><a href="<?php  base_url() ?>dcadmin/products/update_products/<?php
        base64_encode($data->id) ?>">Edit</a></li> -->
                      <!-- <li><a href="<?php  base_url() ?>dcadmin/product_type/view_type/<?php
        base64_encode($data->id) ?>">Type</a></li> -->
                      <!-- <li><a href="javascript:;" class="dCnf" mydata="<?php  $i ?>">Delete</a></li>
        </ul>
        </div>
        </div>

        <div style="display:none" id="cnfbox<?php  $i ?>">
        <p> Are you sure delete this </p>
        <a href="<?php  base_url() ?>dcadmin/products/delete_products/<?php
        base64_encode($data->id); ?>" class="btn btn-danger" >Yes</a>
        <a href="javasript:;" class="cans btn btn-default" mydatas="<?php  $i ?>" >No</a>
        </div>
        </td> -->
                    </tr>
                    <?php $i++; } ?>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<style>
  label {
    margin: 5px;
  }
</style>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript">
  $(document).ready(function() {


    $(document.body).on('click', '.dCnf', function() {
      var i = $(this).attr("mydata");
      console.log(i);

      $("#btns" + i).hide();
      $("#cnfbox" + i).show();

    });

    $(document.body).on('click', '.cans', function() {
      var i = $(this).attr("mydatas");
      console.log(i);

      $("#btns" + i).show();
      $("#cnfbox" + i).hide();
    })

  });
</script>
<!-- <script type="text/javascript" src="<?php echo base_url()
        ?>assets/slider/ajaxupload.3.5.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/slider/rs.js"></script> -->
