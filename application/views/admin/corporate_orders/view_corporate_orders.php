<div class="content-wrapper">
  <section class="content-header">
    <h1>
      View Corporate Orders
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>dcadmin/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo base_url() ?>dcadmin/Corporate_orders/view_corporate_orders"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> View Corporate Orders </a></li>
      <!-- <li class="active">View Team</li> -->
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <!-- <a class="btn btn-info cticket" href="<?php echo base_url() ?>dcadmin/corporateorder/add_corporateorder"
        role="button" style="margin-bottom:12px;"> Add corporateorder</a> -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>View Corporate Orders</h3>
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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Business/company Name</th>
                      <th>Phone</th>
                      <th>Message</th>
                      <th>Image1</th>
                      <th>Image2</th>
                      <th>Image3</th>
                      <th>Image4</th>
                      <th>Image5</th>
                      <th>Image6</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($corporate_orders_data->result() as $corporate) { ?>
                    <tr>
                      <td><?php echo $i ?> </td>
                      <td><?php echo $corporate->name ?></td>
                      <td><?php echo $corporate->email ?></td>
                      <td><?php echo $corporate->c_name ?></td>
                      <td><?php echo $corporate->phone ?></td>
                      <td><?php echo $corporate->message ?></td>

                      <td>
                        <?php if($corporate->image1!=""){ ?>
                        <img id="slide_img_path" height=200 width=200 src="<?php echo base_url().$corporate->image1
        ?>">
                        <?php }else { ?>
                        Sorry No File Found
                        <?php } ?>
                      </td>
                      <td>
                        <?php if($corporate->image2!=""){ ?>
                        <img id="slide_img_path" height=200 width=200 src="<?php echo base_url().$corporate->image2
        ?>">
                        <?php }else { ?>
                        Sorry No File Found
                        <?php } ?>
                      </td>
                      <td>
                        <?php if($corporate->image3!=""){ ?>
                        <img id="slide_img_path" height=200 width=200 src="<?php echo base_url().$corporate->image3
        ?>">
                        <?php }else { ?>
                        Sorry No File Found
                        <?php } ?>
                      </td>
                      <td>
                        <?php if($corporate->image4!=""){ ?>
                        <img id="slide_img_path" height=200 width=200 src="<?php echo base_url().$corporate->image4
        ?>">
                        <?php }else { ?>
                        Sorry No File Found
                        <?php } ?>
                      </td>
                      <td>
                        <?php if($corporate->image5!=""){ ?>
                        <img id="slide_img_path" height=200 width=200 src="<?php echo base_url().$corporate->image5
        ?>">
                        <?php }else { ?>
                        Sorry No File Found
                        <?php } ?>
                      </td>
                      <td>
                        <?php if($corporate->image6!=""){ ?>
                        <img id="slide_img_path" height=200 width=200 src="<?php echo base_url().$corporate->image6
        ?>">
                        <?php }else { ?>
                        Sorry No File Found
                        <?php } ?>
                      </td>
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
