<style media="screen">
.sp{
  color:red;
}
@media(max-width:480px) {
.reverse{
flex-direction: column-reverse !important;
}
  }
</style>
<div class="ggty" style="line-height:5rem;"></div>
<section>
  <?if(!empty($custom_brocher)){?>
  <div class="row reverse m-3" style="border:1px solid #ccc">
    <!-- <div class="col-xs-12 "> -->
    <div class="col-md-4 ">
      <h3 style="text-align:center;" class="mt-3">Corporate Brochers</h3>
      <section class="overflow-hidden c_slider ">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-md-12 pt-2 pl-5 pr-5 pb-1">
              <div class="swiper-wrapper fist_slider ">
                <?php $i=1; foreach($corporate_brochers->result() as $data) { ?>
                <div class="swiper-slide" title="Corporate_brocher_<?=$i?>">
                  <a href="<?=base_url().$data->file?>" download title="Corporate_brocher_<?=$i?>">
                    <img src="<?=base_url().$data->image?>" alt="" class="img-fluid">
                  </a>
                </div>
                  <?php $i++; } ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <p style="text-align:center;">
      Click on image to download
      </p>
    </div>
    <div class="col-md-8 p-0">

      <img src="<?=base_url().$custom_brocher->image?>" class="img-fluid" />
    </div>
  </div>
  <hr />
  <?}?>

  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0">Corporate Order</h5>
        </div>
        <div class="card-body">
          <form action="<?=base_url()?>Home/corporate_order_data" method="post" enctype="multipart/form-data">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col-md-6 col-12">
                <div class="form-outline">
                  <label class="form-label" for="name">Name<span class="sp">*</span></label>
                  <input type="text" id="name" name="name" class="form-control mt-0" required />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-outline">
                  <label class="form-label" for="email">Email<span class="sp">*</span></label>
                  <input type="email" id="email" name="email" class="form-control mt-0" required />
                </div>
              </div>
            </div>

            <!-- Text input -->
            <div class="row mb-4">
              <div class="col-md-6 col-12">
                <div class="form-outline">
                  <label class="form-label" for="c_name">Business/company Name<span class="sp">*</span></label>
                  <input type="text" id="c_name" name="c_name" class="form-control mt-0" required  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-outline">
                  <label class="form-label" for="phone">Phone<span class="sp">*</span></label>
                  <input type="text" id="phone" name="phone" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" class="form-control mt-0" required />
                </div>
              </div>
            </div>

            <div class="form-outline mb-4">
              <div class="col-md-12 col-12">
              <label class="form-label" for="message">Message<span class="sp">*</span></label>
              <textarea class="form-control mt-0" id="message" name="message" cols="50" rows="4" required ></textarea>
            </div>
          </div>

            <div class="row">
            <div class="col-md-4 col-12">
            <div class="form-outline mb-4">
              <label class="form-label" for="image1">select a file:</label>
              <input type="file" class="form-control" id="image1" name="image1" value="">
            </div>
            </div>
            <div class="col-md-4 col-12">
            <div class="form-outline mb-4">
              <label class="form-label" for="image2">select a file:</label>
              <input type="file" class="form-control" id="image2" name="image2" value="">
            </div>
            </div>
            <div class="col-md-4 col-12">
            <div class="form-outline mb-4">
              <label class="form-label" for="image3">select a file:</label>
              <input type="file" class="form-control" id="image3" name="image3" value="">
            </div>
            </div>
            </div>

            <div class="row mb-4">
            <div class="col-md-4 col-12">
            <div class="form-outline mb-4">
              <label class="form-label" for="image4">select a file:</label>
              <input type="file" class="form-control" id="image4" name="image4" value="">
            </div>
            </div>
            <div class="col-md-4 col-12">
            <div class="form-outline mb-4">
              <label class="form-label" for="image5">select a file:</label>
              <input type="file" class="form-control" id="image5" name="image5" value="">
            </div>
            </div>
            <div class="col-md-4 col-12">
            <div class="form-outline mb-4">
              <label class="form-label" for="image6">select a file:</label>
              <input type="file" class="form-control" id="image6" name="image6" value="">
            </div>
            </div>
            </div>
            <div class="col-md-12 col-10">
            <div class="g-recaptcha" id="g-recaptcha-response-custom" data-sitekey=<?=CAPTCHA_KEY_HTML?> name="g-recaptcha-response"></div>
          </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-2">
              <button class="chk" style="width:30%">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</section>

<script>
function isNumberKey(evt){
var charCode = (evt.which) ? evt.which : evt.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
return true;
}
</script>
