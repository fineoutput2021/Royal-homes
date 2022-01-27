<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Update Subcategory
    </h1>

  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Update Subcategory </h3>
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
              <form action=" <?php echo base_url(); ?>dcadmin/subcategory/add_subcategory_data/<? echo base64_encode(2); ?>/<?=$id;?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <tr>
                      <td> <strong>Category </strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <select class="form-control" name="category_id">
                          <?
foreach($category_data->result() as $value) {?>
                          <option value="<?=$value->id;?>" <?php if($subcategory_data->category_id == $value->id){ echo "selected"; } ?>><?=$value->categoryname;?></option>
                          <?}?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Name</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <input type="text" name="subcategory" class="form-control" placeholder="" required value="<?=$subcategory_data->subcategory;?>" /> </td>
                    </tr>
                    <tr>
                      <td> <strong>Description</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                          <textarea name="description" class="form-control" required value="" rows="8" cols="80"><?if(!empty($subcategory_data->description)){echo $subcategory_data->description;}?></textarea>
                 </td>
                    </tr>
                    <tr>
                      <td> <strong>Image</strong> <span style="color:red;">*</span></strong> </td>
                      <td> <input type="file" name="image" class="form-control" placeholder=""  value="" />
                        <?if(!empty($subcategory_data->image)){?>
                        <img src="<?=base_url().$subcategory_data->image?>" width="30%"/>
                        <?}else{
                          echo "No image"?>
                        <?}?>
                        <label style="color:red;">Size 752*499</label>
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
