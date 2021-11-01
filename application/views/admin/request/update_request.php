<div class="content-wrapper">
<section class="content-header">
   <h1>
  Update Request
  </h1>

</section>
<section class="content">
<div class="row">
<div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Update Request </h3>
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
                           <form action=" <?php echo base_url(); ?>dcadmin/request/add_request_data/<? echo base64_encode(2); ?>/<?=$id;?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table table-hover">
<tr>
<td> <strong>First Name</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="fname"  class="form-control" placeholder="" required value="<?=$request_data->fname;?>" />  </td>
</tr>
<tr>
<td> <strong>Last Name</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="lname"  class="form-control" placeholder="" required value="<?=$request_data->lname;?>" />  </td>
</tr>
<tr>
<td> <strong>Business/Company Name</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="bname"  class="form-control" placeholder="" required value="<?=$request_data->bname;?>" />  </td>
</tr>
<tr>
<td> <strong>Email</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="email" name="email"  class="form-control" placeholder="" required value="<?=$request_data->email;?>" />  </td>
</tr>
<tr>
<td> <strong>message</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="message"  class="form-control" placeholder="" required value="<?=$request_data->message;?>" />  </td>
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
