<div class="content-wrapper">
<section class="content-header">
   <h1>
  Update Image-I
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url() ?>dcadmin/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url() ?>dcadmin/bannerimages/view_bannerimages"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> View Image-1 </a></li>
    <!-- <li class="active">View Team</li> -->
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Update Image-I </h3>
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
                           <form action=" <?php echo base_url(); ?>dcadmin/bannerimages/add_bannerimages_data/<? echo base64_encode(2); ?>/<?=$id;?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table table-hover">
<tr>
<td> <strong>Heading</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="imagename"  class="form-control" placeholder=""  value="<?=$bannerimages_data->imagename;?>" />  </td>
</tr>
<tr>
<td> <strong>Web Image </strong>  <span style="color:red;"></span></strong> </td>
<td> <input type="file" name="image1"  class="form-control" placeholder=""  value="<?=$bannerimages_data->image1;?>"/>
  <?php if($bannerimages_data->image1!=""){ ?> <img id="slide_img_path" height=200 width=300 src="<?php echo base_url().$bannerimages_data->image1; ?> "> <?php }else{ ?> Sorry No File Found <?php } ?>
  <label style="color:red">Size:3501*1751</label>
</td>
</tr>
<tr>
<td> <strong>Mobile Image</strong>  <span style="color:red;"></span></strong> </td>
<td> <input type="file" name="image2"  class="form-control" placeholder="" value="<?$bannerimages_data->image2;?>"/>
  <?php if($bannerimages_data->image2!=""){ ?> <img id="slide_img_path" height=200 width=300 src="<?php  echo base_url().$bannerimages_data->image2; ?> "> <?php }else{ ?> Sorry No File Found <?php } ?>
    <label style="color:red">Size:840*1680</label>
</td>
</tr>
<tr>
<td> <strong>Link </strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="link"  class="form-control" placeholder=""  value="<?=$bannerimages_data->link;?>"/>
</td>
</tr>

<!-- <tr>
<td> <strong>Image </strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="file" name="image3"  class="form-control" placeholder=""value="<?$bannerimages_data->image3;?>" />
<?php if($bannerimages_data->image3!=""){ ?> <img id="slide_img_path" height=200 width=300 src="<?php  base_url().$bannerimages_data->image3; ?> "> <?php }else{ ?> Sorry No File Found <?php } ?>
  </td>
</tr>
<tr>
<td> <strong>Image</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="file" name="image4"  class="form-control" placeholder="" value="<?$bannerimages_data->image4;?>" />
<?php if($bannerimages_data->image4!=""){ ?> <img id="slide_img_path" height=200 width=300 src="<?php base_url().$bannerimages_data->image4; ?> "> <?php }else{ ?> Sorry No File Found <?php } ?>
  </td>
</tr> -->


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


<script type="text/javascript" src=" <?php echo base_url()  ?>assets/slider/ajaxupload.3.5.js"></script>
<link href=" <? echo base_url()  ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
