
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
  <div class="row reverse m-3" style="border:1px solid #ccc">
    <!-- <div class="col-xs-12 "> -->
    <div class="col-md-4 ">
      <h3 style="text-align:center;" class="mt-3">Custom Brochers</h3>
      <section class="overflow-hidden c_slider ">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-md-12 pt-2 pl-5 pr-5 pb-1">
              <div class="swiper-wrapper fist_slider ">
                <?php $i=1; foreach($custom_brochers->result() as $data) { ?>
                <div class="swiper-slide">
                  <a href="<?=base_url().$data->file?>" download title="Custom_brocher_<?=$i?>">
                    <img src="<?=base_url().$data->image?>" alt="" class="img-fluid">
                  </a></div>
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
      <img src="<?=base_url().$custom_banner->image?>" class="img-fluid" />
    </div>
  </div>
  <hr />
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0">Custom Order</h5>
        </div>
        <div class="card-body">
          <form action="<?=base_url()?>Home/custom_order_data" method="post" enctype="multipart/form-data">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="name">Name<span class="sp">*</span></label>
                  <input type="text" id="name" name="name" class="form-control mt-1" required />
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="email">Email<span class="sp">*</span></label>
                  <input type="email" id="email" name="email" class="form-control mt-1" required />
                </div>
              </div>
            </div>

            <!-- Text input -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="c_name">Business/company Name<span class="sp">*</span></label>
                  <input type="text" id="c_name" name="c_name" class="form-control mt-1" required  />
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="phone">Phone<span class="sp">*</span></label>
                  <input type="text" id="phone" name="phone" maxlength="10" minlength="10" class="form-control mt-1" required />
                </div>
              </div>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="message">Message<span class="sp">*</span></label>
              <textarea class="form-control" id="message" name="message" rows="4" required ></textarea>
            </div>
          <div class="g-recaptcha mt-4" data-sitekey=<?=CAPTCHA_KEY_HTML?> name="captcha_response"></div>
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
