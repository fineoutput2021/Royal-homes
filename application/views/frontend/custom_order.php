
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
    <div class="col-md-5 ">
      <h3 style="text-align:center;">Custom Gifts</h3>
      <section class="overflow-hidden t_slider ">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-md-12" style="padding-left:0;padding-right:0">
              <div class="swiper-wrapper fist_slider ">

                <div class="swiper-slide"><a href="" target="_blank">
                    <img src="https://www.orangetree.in/pub/media/wysiwyg/gifting_1.jpg" alt="">
                  </a></div>
                  <div class="swiper-slide"><a href="" target="_blank">
                      <img src="https://www.orangetree.in/pub/media/wysiwyg/gifting_1.jpg" alt="">
                    </a></div>

              </div>
              <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
              <!-- <div class="swiper-pagination"></div> -->

            </div>
          </div>
        </div>
      </section>




    </div>
    <div class="col-md-7 p-0">
      <img src="https://www.orangetree.in/pub/media/wysiwyg/gifting_1.jpg" class="img-fluid" />
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
