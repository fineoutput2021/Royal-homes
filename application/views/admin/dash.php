
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> </a> Dashboard</li>
            <!-- <li class="active">Dashboard</li> -->
          </ol>
        </section>


        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="<?=base_url()?>dcadmin/users/view_users">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Users</span>
                  <span class="info-box-number"><? $this->db->select('*');
                  $this->db->from('tbl_users');
                  //$this->db->where('id',$usr);
                  $users= $this->db->count_all_results(); echo $users;?>
              </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="<?=base_url()?>dcadmin/products/view_products">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Products</span>
                  <span class="info-box-number"> <?        $this->db->select('*');
                  $this->db->from('tbl_products');

                  $products= $this->db->count_all_results(); echo $products;?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="<?=base_url()?>dcadmin/Orders/view_new_orders">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-truck"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">New Orders</span>
                  <span class="info-box-number"><?              $this->db->select('*');
                  $this->db->from('tbl_order1');
                  $this->db->where('order_status',1);
                  $order1= $this->db->count_all_results(); echo $order1;?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


    </div><!-- ./wrapper -->
