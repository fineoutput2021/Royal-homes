            <div class="content-wrapper">
              <section class="content-header">
                <h1>
                  Cart Details
                </h1>
                <ol class="breadcrumb">
                  <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><a href="<?php echo base_url() ?>admin/college"><i class="fa fa-dashboard"></i> Abandon Cart </a></li>
                  <li class="active">View Cart Details</li>
                </ol>
              </section>
              <section class="content">
                <div class="row">
                  <div class="col-lg-12">
                    <!-- <a class="btn btn-info cticket" href="<?php echo base_url() ?>admin/home/add_team" role="button" style="margin-bottom:12px;"> Add Team</a> -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>View Cart Details</h3>
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
                                  <th>Product Name</th>
                                  <th>Quantity</th>
                                  <th>Price</th>
                                  <th>Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach ($cart_data->result() as $cart) {
                                                                      $this->db->select('*');
                                                                      $this->db->from('tbl_products');
                                                                      $this->db->where('id', $cart->product_id);
                                                                      $pro_data= $this->db->get()->row(); ?>
                                <tr>
                                  <td><?php echo $i ?> </td>
                                  <td><?php if (!empty($pro_data->productname)) {
                                                                          echo $pro_data->productname;
                                                                      } ?></td>
                                  <td><?php if (!empty($cart->quantity)) {
                                                                          echo $cart->quantity;
                                                                      } ?></td>
                                  <td><?php if (!empty($pro_data->selling_price)) {
                                                                          echo "£".$pro_data->selling_price;
                                                                      } ?></td>
                                  <td><?php if (!empty($pro_data->selling_price)) {
                                                                          echo "£".$pro_data->selling_price*$cart->quantity;
                                                                      } ?></td>
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
            <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/slider/ajaxupload.3.5.js"></script>
                  <script type="text/javascript" src="<?php echo base_url() ?>assets/slider/rs.js"></script>	  -->
