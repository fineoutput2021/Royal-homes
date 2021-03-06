<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Update Corporate Brochure
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>dcadmin/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo base_url() ?>dcadmin/Corporate_brochers/view_corporate_brochers"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> View Corporate Brochure </a></li>
      <!-- <li class="active">View Team</li> -->
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Update Corporate Brochure </h3>
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
              <form action=" <?php echo base_url(); ?>dcadmin/corporate_brochers/add_corporate_brochers_data/<? echo base64_encode(2); ?>/<?=$id;?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <!-- <tr>
                      <td> <strong>Title</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <input type="text" name="title" class="form-control" placeholder="" required value="<?=$corporate_brochers_data->title;?>" /> </td>
                    </tr> -->
                    <tr>
                      <td> <strong>File</strong> <span style="color:red;"></span></strong> </td>
                      <td> <input type="file" name="file" class="form-control" placeholder="" />
                        <?php if($corporate_brochers_data->file!=""){ echo base_url().$corporate_brochers_data->file; ?>  <?php }else{ ?> Sorry No File Found <?php } ?> </td>
                    </tr>
                    <tr>
                      <td> <strong>image</strong> <span style="color:red;"></span></strong> </td>
                      <td> <input type="file" name="image" class="form-control" placeholder="" />
                        <?php if($corporate_brochers_data->image!=""){ ?> <img id="slide_img_path" height=200 width=300 src="<?php echo base_url().$corporate_brochers_data->image; ?> "> <?php }else{ ?> Sorry No File Found <?php } ?>
                        <label style="color:red;">Size:370*370</label>
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


<script type="text/javascript" src=" <?php echo base_url()  ?>assets/slider/ajaxupload.3.5.js"></script>
<link href=" <? echo base_url()  ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
