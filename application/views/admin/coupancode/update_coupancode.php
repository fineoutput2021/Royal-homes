<div class="content-wrapper">
<section class="content-header">
   <h1>
  Update Couponcode
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url() ?>dcadmin/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url() ?>dcadmin/coupancode/view_coupancode"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>  View Couponcode  </a></li>
    <!-- <li class="active">View Categories</li> -->
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Update Couponcode </h3>
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
                           <form action=" <?php echo base_url(); ?>dcadmin/coupancode/add_coupancode_data/<? echo base64_encode(2); ?>/<?=$id;?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table table-hover">
<tr>
<td> <strong>Name</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="name"  class="form-control" placeholder="" required value="<?=$coupancode_data->name;?>" />  </td>
</tr>
<!-- <tr>
<td> <strong>Start Date</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="date" name="startdate"  class="form-control" placeholder="" required value="<?$coupancode_data->startdate;?>" />  </td>
</tr> -->
<tr>
<td> <strong>Expire Date</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="date" id="datepicker" name="enddate"  class="form-control" placeholder="" required value="<?=$coupancode_data->expdate;?>" />  </td>
</tr>
<tr>
<td> <strong>Cart Amount </strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="cartamount"  class="form-control" placeholder="" required value="<?=$coupancode_data->minorder;?>" />  </td>
</tr>
<tr>
<td> <strong>Gift Percent </strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="percentageoff"  class="form-control" placeholder="" required value="<?=$coupancode_data->giftpercent;?>" />  </td>
</tr>
<tr>
<td> <strong>Maximum Discount </strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="maximumdiscount"  class="form-control" placeholder="" required value="<?=$coupancode_data->maxorder;?>" />  </td>
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
  <script>
  $(function(){
      var dtToday = new Date();

      var month = dtToday.getMonth() + 1;
      var day = dtToday.getDate();
      var year = dtToday.getFullYear();
      if(month < 10)
         month = '0' + month.toString();
     if(day < 10)
         day = '0' + day.toString();

     var maxDate = year + '-' + month + '-' + day;
     // alert(maxDate);

      $('#datepicker').attr('min', maxDate);
  });
  </script>


<script type="text/javascript" src=" <?php echo base_url()  ?>assets/slider/ajaxupload.3.5.js"></script>
<link href=" <? echo base_url()  ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
