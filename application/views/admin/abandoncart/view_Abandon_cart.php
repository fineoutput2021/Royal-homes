    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Abandon Cart
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>dcadmin/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <!-- <li><a href="<?php echo base_url() ?>admin/college"><i class="fa fa-dashboard"></i> All Abandon Cart </a></li>
          <li class="active">View Abandon Cart</li> -->
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-lg-12">
            <a class="btn custom_btn" href="<?php echo base_url() ?>dcadmin/Abandoncart/view_percentage" role="button" style="margin-bottom:12px;"> View Discount Percentage</a>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>View Cart</h3>
              </div>
              <div class="panel panel-default">

                <?php if (!empty($this->session->flashdata('smessage'))) { ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Alert!</h4>
                  <?php echo $this->session->flashdata('smessage'); ?>
                </div>
                <?php }
                                                          if (!empty($this->session->flashdata('emessage'))) { ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                  <?php echo $this->session->flashdata('emessage'); ?>
                </div>
                <?php } ?>


                <div class="panel-body">
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-hover table-striped" id="userTable">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>User Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach ($cart_data->result() as $data) {
                                                              $this->db->select('*');
                                                              $this->db->from('tbl_users');
                                                              $this->db->where('id', $data->user_id);
                                                              $this->db->where('is_active', 1);
                                                              $user_data= $this->db->get()->row(); ?>
                        <tr>
                          <td><?php echo $i ?> </td>
                          <td><?php if (!empty($user_data->fname && $user_data->lname)) {
                                                                  echo $user_data->fname." ".$user_data->lname;
                                                              } ?></td>
                          <td>
                            <div class="btn-group" id="btns<?php echo $i ?>">
                              <div class="btn-group">
                                <a href="<?=base_url()?>dcadmin/Abandoncart/view_cart_details/<?=base64_encode($data->user_id)?>"><button type="button" class="btn btn-default" aria-expanded="false"> View Details </button></a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <?php $i++;
                                                          } ?>
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
