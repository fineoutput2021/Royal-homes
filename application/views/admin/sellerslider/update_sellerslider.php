<div class="content-wrapper">
<section class="content-header">
   <h1>
  Update Sellerslider
  </h1>

</section>
<section class="content">
<div class="row">
<div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Update Sellerslider </h3>
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
                           <form action=" <?php echo base_url(); ?>dcadmin/sellerslider/add_sellerslider_data/<? echo base64_encode(2); ?>/<?=$id;?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table table-hover">
<tr>
<td> <strong>Name</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="name"  class="form-control" placeholder="" required value="<?=$sellerslider_data->name;?>" />  </td>
</tr>
<tr>
<td> <strong>Image</strong>  <span style="color:red;"></span></strong> </td>
<td> <input type="file" name="Image"  class="form-control" placeholder="" />
<?php if($sellerslider_data->Image!=""){ ?> <img id="slide_img_path" height=200 width=300 src="<?php echo base_url().$sellerslider_data->Image; ?> "> <?php }else{ ?> Sorry No File Found <?php } ?>  </td>
</tr>
<tr>
<td> <strong>Image</strong>  <span style="color:red;"></span></strong> </td>
<td> <input type="file" name="Image1"  class="form-control" placeholder="" />
<?php if($sellerslider_data->Image1!=""){ ?> <img id="slide_img_path" height=200 width=300 src="<?php echo base_url().$sellerslider_data->Image1; ?> "> <?php }else{ ?> Sorry No File Found <?php } ?>  </td>
</tr>
<tr>
<td> <strong>Image</strong>  <span style="color:red;"></span></strong> </td>
<td> <input type="file" name="Image2"  class="form-control" placeholder="" />
<?php if($sellerslider_data->Image2!=""){ ?> <img id="slide_img_path" height=200 width=300 src="<?php echo base_url().$sellerslider_data->Image2; ?> "> <?php }else{ ?> Sorry No File Found <?php } ?>  </td>
</tr>
<tr>
<td> <strong>Image</strong>  <span style="color:red;"></span></strong> </td>
<td> <input type="file" name="Image3"  class="form-control" placeholder="" />
<?php if($sellerslider_data->Image3!=""){ ?> <img id="slide_img_path" height=200 width=300 src="<?php echo base_url().$sellerslider_data->Image3; ?> "> <?php }else{ ?> Sorry No File Found <?php } ?>  </td>
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


<script type="text/javascript" src=" <?php echo base_url()  ?>assets/slider/ajaxupload.3.5.js"></script>
<link href=" <? echo base_url()  ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
