<div class="content-wrapper">
               <section class="content-header">
                  <h1>
                 Add New Coupancode
                 </h1>

               </section>
           <section class="content">
           <div class="row">
              <div class="col-lg-12">

                               <div class="panel panel-default">
                                   <div class="panel-heading">
                                       <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Add New Coupancode</h3>
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
                                          <form action=" <?php echo base_url()  ?>dcadmin/coupancode/add_coupancode_data/<? echo base64_encode(1);  ?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                                       <div class="table-responsive">
                                           <table class="table table-hover">
  <tr>
<td> <strong>PromoCodeName </strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="name"  class="form-control" placeholder="" required value="" />  </td>
</tr>
  <tr>
<td> <strong>Start Date</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="date" id='date_picker' name="startdate"  class="form-control" placeholder="" required value="" />  </td>
</tr>
  <tr>
<td> <strong>End Date</strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="date" id='datepicker' name="enddate"  class="form-control" placeholder="" required value="" />  </td>
</tr>
  <tr>
<td> <strong>Cart Amount </strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="cartamount"  class="form-control" placeholder="" required value="" />  </td>
</tr>
  <tr>
<td> <strong>Percentage Off </strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="percentageoff"  class="form-control" placeholder="" required value="" />  </td>
</tr>
  <tr>
<td> <strong>Maximum Discount </strong>  <span style="color:red;">*</span></strong> </td>
<td> <input type="text" name="maximumdiscount"  class="form-control" placeholder="" required value="" />  </td>
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
<!--
     <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

       <script>
        $(document).ready(function(){
          var minDate= new Date ();
        $( "#date_picker" ).datepicker({
                  numberOfMonth : 1,
                  minDate: minDate,
            onclose: function(selectedDate){
              $("#datepicker").datepicker("option" ,"minDate",selectedDate)
            }
          });
        } );
        </script> -->

        <!-- <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#datepicker').attr('min',today);
    </script> -->
