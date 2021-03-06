<style>
  .hr {
    height: 0 !important;
  }
  .ffty{
    padding-left:5rem;
  }

  @media (max-width:640px) {
    .heacha {
      margin: 0px !important;
      padding-right: 21px !important;
    }
  }

  @media(max-width:640px) {
    .btcha {
      margin: -28px !important;
    }

  }

  #heart {
    color: grey;
    font-size: 20px;
  }

  #heart.red {
    color: red;
  }

  .slick-arrow {
    /* display: none !important; */
  }

  .slick-slide {
    margin: 10px
  }

  .slick-slide img {
    width: 100%;
    border: 0px solid #fff
  }

  /* .hide {
    display: none;
  } */

  .myDIV:hover+.hide {
    display: block;
    color: black;
    margin-top: -38px;
    text-align: center;
    font-size: 24px;
    background-color: white;
  }

  .input-group span.input-group__addon {
    display: inline-block;
    width: 40px;
    text-align: center;
    padding: 7px 0;
    border: 1px solid #ccc;
    cursor: pointer;
    height: 32px;
    font-size: 15px;
    line-height: 1;
  }
</style>
<style>
  .midsection {
    background-color: white;
    margin-top: 13vh;
  }

  @media screen and (min-width: 300px) and (max-width: 960px) {
    .midsection {
      background-color: white;
      margin-top: 8vh;
    }

    .ffty{
      padding:0px!important;
    }
  }
</style>


<!-- web view div start -->

<div class="ggty" ></div>
<div class="product media " style="top: 11vh;z-index: 0; display:flex;">
  <a id="gallery-prev-area" tabindex="-1"></a>
  <div class=" col-md-6 gallery-placeholder product_slick swiper-container swiper-container-fade swiper-container-initialized swiper-container-vertical ">
    <div class="swiper-wrapper" style="transition: all 0ms ease 0s;">
      <div class="swiper-slide"style="height: 518px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;">
        <img id="background" alt="main product photo" class="gallery-placeholder__image" src="<?=base_url().$product_data->image?>" data-zoom="click1ToZoom">
      </div>
    </div>
    <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-bullets-dynamic" style="height: 225px;">
      <span class="swiper-pagination-bullet" style="top: -90px;"></span><span class="swiper-pagination-bullet" style="top: -90px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-prev-prev"
        style="top: -90px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-prev" style="top: -90px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active swiper-pagination-bullet-active-main"
        style="top: -90px; background-color:#d76a46!important;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-next" style="top: -90px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-next-next" style="top: -90px;"></span>
    </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    <div class="product_nav_container ">
      <div class="product_slick_nav swiper-container-initialized swiper-container-vertical swiper-container-thumbs">
        <div class="swiper-wrapper swipperarea" style="transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;">
          <div class="item swiper-slide swiper-slide-visible swiper-slide-next" >
            <img alt="main product photo" class="gallery-placeholder__thumbnail" onclick="changeIt(this.src)" style="height:100px" src="<?=base_url().$product_data->image?>">
          </div>
          <?if(!empty($product_data->image1)){?>
          <div class="item swiper-slide swiper-slide-visible swiper-slide-thumb-active">
            <img alt="main product photo" class="gallery-placeholder__thumbnail" onclick="changeIt(this.src)" style="height:100px" src="<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">">
          </div>
          <?}?>
          <?if(!empty($product_data->image2)){?>
          <div class="item swiper-slide swiper-slide-visible" >
            <img alt="main product photo" class="gallery-placeholder__thumbnail" onclick="changeIt(this.src)" style="height:100px" src="<?=base_url().$product_data->image2?>">
          </div>
          <?}?>
          <?if(!empty($product_data->image3)){?>
          <div class="item swiper-slide swiper-slide-visible">
            <img alt="main product photo" class="gallery-placeholder__thumbnail" onclick="changeIt(this.src)" style="height:100px" src="<?=base_url().$product_data->image3?>">
          </div>
          <?}?>
        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </div>
  </div>

  <script>
  function changeIt(_src) {
    // alert(_src);
     document.getElementById("background").src = _src;
  }
  </script>
  <!-- <div class="action-skip-wrapper"> <a class="action skip gallery-prev-area" href="#gallery-prev-area"><span> Skip to
        the beginning of the images gallery</span></a></div> -->
  <a id="gallery-next-area" tabindex="-1"></a>
  <div class="col-md-4" style="height:100%;width:100%;">

    <div style="padding-bottom: 2rem; background-color: white; padding-left: 0px;" class=>
      <div class="qwer">
        <div class="rr">

          <a href="<?=base_url()?>" style="color: #3e3938;; font-size: 11px; font-weight: 600;">HOME</a>&nbsp;&nbsp;<i class="fas fa-greater-than" style="font-size: 11px;"></i>
          <h3 style="font-size: 40px;text-transform: none;font-weight: 300;line-height: 1.2;color: #3e3938;"><?=$product_data->productname?>
          </h3>
          <br>
          <p class="productdetailcontent" style="font-size: 13px;line-height: 1.7;font-weight: 400;text-transform: none;color: #3e3938 ;justify-content: center;">specimen book. It has survived not only five
            centuries,<br> but also the
            leap
            into
            electronic typesetting,
            remaining <br> essentially unchanged. It was popularised in the 1960s.

          </p>

          <div class="row">
            <div class="col-md-6 col-sm-6">
              <!-- <div class="bvf">
                <p>Price</p>
              </div> -->


            </div>
            <div class="col-md-6 col-sm-12">
              <!-- <div class="vfds">

                <p><b>Special<br>Price:$4,139</b></p>

              </div> -->
            </div>


          </div>


          <div class="xc">
            <br>
            <p>
              <span style="font-size: 14px;color: #212529;font-weight: bold;"><s style="font-size: 12px;text-decoration: line-through;color:red">(Rs.<?=$product_data->mrp?>)</s> </span>
            </p>
            <pre class="pricesection" style="color: #212529;font-size: 14px;">Price: <span style="font-size: 14px;color: #212529;font-weight: bold;">Rs.<?=$product_data->selling_price?></span></pre>
            <br>
            <br>
          </div>


          <div class="bbbs" style="display: flex;align-items: center; cursor: pointer;">
            <p><b style="font-size: 14px;letter-spacing: 2px; margin: 2px">Quantity</b>
            <div class="input-group" style="position: relative;width: 100%;justify-content: center;">
              <span class="input-group__addon" style="border-right: 0;border-top-left-radius: 20px;border-bottom-left-radius: 20px;">
                <div class="input-group__button input-group__button--decrease" id="childMinus" data-bind="click: decreaseQty">
                  <span class="input-group__icon input-group__icon--decrease">-</span>
                </div>
              </span>
              <input name="qty" id="child" value="1" min="1" onchange="qty_set()" style="display: inline-block;width: 50px;text-align: center;pointer-events: none;background: #fff;
                      background-clip: padding-box;
                      border: 1px solid #c2c2c2;
                      border-radius: 1px;
                      font-size: 14px;
                      height: 32px;
                      line-height: 1.42857143;
                      padding: 0 9px;
                      vertical-align: baseline;
                      width: 16%;
                      box-sizing: border-box;">
              <span class="input-group__addon" style="border-left: 0;border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                <div class="input-group__button input-group__button--increase" id="childPlus" data-bind="click: increaseQty">
                  <span class="input-group__icon input-group__icon--increase">+</span>
                </div>
              </span>
            </div>

            </p>
          </div>
          <br>
          <br>

          <div class="row" class="hov_col1" style="align-items:center;" >
            <?if (empty($this->session->userdata('user_data'))) {?>
            <div class="col-md-7 rrcs" style="width:auto;">
              <a href="" class="xmp" style="border-radius: 26px;
                  background-color: #e66b47;
                  z-index: 154;
                  transition: .3s all ease-in-out;
                  font-weight: 400;
                  text-transform: uppercase;
                  font-size: 13px;

                  letter-spacing: 2px;line-height: 2.2rem;
                  padding: 14px 58px;" onclick="addToCartOffline(this)" id="add_cart" product_id="<?=base64_encode($product_data->id)?>" quantity=1>Add To Cart</a>
            </div>
            <?} else {?>
            <div class="col-md-7 rrcs" style="width:auto; padding-left:0px!important;">
              <a href="" class="xmp" style="border-radius: 26px;
                    background-color: #e66b47;
                    z-index: 154;
                    transition: .3s all ease-in-out;
                    font-weight: 400;
                    text-transform: uppercase;
                    font-size: 13px;
                    width: 220px;
                    letter-spacing: 2px;line-height: 2.2rem;
                    padding: 14px 58px;" onclick="addToCartOnline(this)" id="add_cart" product_id="<?=base64_encode($product_data->id)?>" quantity=1>Add To Cart</a>
            </div>
            <?php
                $user_id = $this->session->userdata('user_id');
                            $this->db->select('*');
                $this->db->from('tbl_wishlist');
                $this->db->where('product_id', $product_data->id);
                $this->db->where('user_id', $user_id);
                $wishdata= $this->db->get()->row();
                if (empty($wishdata)) {
                    ?>
            <a href="" style="color:#d76a46">
              <div class="col-md-5">
                <i class="fa fa-heart-o heacha" style="font-size: 1.5rem;" onclick="wishlist(this)" product_id="<?=base64_encode($product_data->id)?>" user_id="<?=base64_encode($this->session->userdata('user_id'))?>" status="add"></i>
              </div>
            </a>
            <?php
                } else {?>
            <a href="" style="color:#d76a46">
              <div class="col-md-5" ><i class="fa fa-heart heacha" style="font-size: 1.5rem;" onclick="wishlist(this)" product_id="<?=base64_encode($product_data->id)?>" user_id="<?=base64_encode($this->session->userdata('user_id'))?>"
                  status="remove"></i>
              </div>
            </a>
            <?}}?>
          </div>
        </div>
      </div>
    </div>


  </div>


</div>


<!-- web view div end -->

<!-- mobile view div start -->


<!--
                <div id="carouselExampleControls" class="carousel slide mobilesde" data-ride="carousel">
                  <div class="carousel-inner">
                    <?if(!empty($product_data->image)){?>
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?=base_url().$product_data->image?>" alt="First slide">
                    </div>
                    <?}?>
                    <?if(!empty($product_data->image1)){?>
                    <div class="carousel-item">
                      <img class="image-fluid" src="<?=base_url().$product_data->image1?>" alt="Second slide">
                    </div>
                      <?}?>
                    <?if(!empty($product_data->image2)){?>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?=base_url().$product_data->image2?>" alt="Second slide">
                    </div>
                      <?}?>
                    <?if(!empty($product_data->image3)){?>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?=base_url().$product_data->image3?>" alt="Third slide">
                    </div>
                      <?}?>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
 -->


<!-- <div class="product media position-fixed swpconh" style="top: 0;z-index: 0;"> <a id="gallery-prev-area" tabindex="-1"></a>
  <div class="gallery-placeholder product_slick swiper-container swiper-container-fade swiper-container-initialized swiper-container-vertical">
    <div class="swiper-wrapper" style="transition: all 0ms ease 0s;">
      <div id="mydiv1" class="swiper-slide"style="height: 518px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;">
        <img id="background" alt="main product photo" class="gallery-placeholder__image" src="<?=base_url().$product_data->image?>" data-zoom="click1ToZoom">
      </div>
      <div id="mydiv2" class="swiper-slide"style="height: 518px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;">
          <img id="background" alt="main product photo" class="gallery-placeholder__image" src="<?=base_url().$product_data->image?>" data-zoom="click1ToZoom">
      </div>
      <div id="mydiv3" class="swiper-slide"style="height: 518px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;">
        <img id="background" alt="main product photo" class="gallery-placeholder__image" src="<?=base_url().$product_data->image2?>" data-zoom="click1ToZoom">
      </div>
      <div id="mydiv4" class="swiper-slide"style="height: 518px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;">
        <img id="background" alt="main product photo" class="gallery-placeholder__image" src="<?=base_url().$product_data->image3?>" data-zoom="click1ToZoom">
      </div>
    </div>
  </div>
</div>
<script>
setTimeout(function() {
  $('#mydiv').fadeOut('fast');
  alert("hi")
}, 1000); // <-- time in milliseconds

</script> -->






<!-- mobile view div end -->

<!-- end this section  -->
<div class="midsection bg-white">
  <div class="below_stirp white_bg pt-4 pb-4 Mb_resp">
    <div class="container">
      <div class="row">
        <div class="product_name text-left">
          <h1 class="product_name"><?=$product_data->productname?></h1>
          <div class="product_little_view"><span class="price">
              <div class="price-box price-final_price" data-role="priceBox" data-product-id="619" data-price-box="product-id-619"> <span class="price-container price-final_price tax weee"> <span id="product-price-619" data-price-amount="2799"
                    data-price-type="finalPrice" class="price-wrapper "><span class="price">Rs.<?=$product_data->mrp?></span></span> </span> </div>
            </span></div>
        </div>
        <?if (empty($this->session->userdata('user_data'))) {?>
        <div class="customize-scroll text-right"><a href=""><button class="buy" onclick="addToCartOffline(this)" product_id="<?=base64_encode($product_data->id)?>" quantity=1>Add To Cart</button></a></div>
        <?} else {?>
        <div class="customize-scroll text-right"><a href=""><button class="buy" onclick="addToCartOnline(this)" product_id="<?=base64_encode($product_data->id)?>" quantity=1>Add To Cart</button></a> </div>

        <?}?>
      </div>
    </div>
  </div>
  <!-- <div class="bg-white"> -->
  <div class="bg-white">
    <div class="row">
      <div class="col-md-12 pt-4" style="background-color: white;">
        <h2 style="font-size:28px;color: #4e4e4e; padding-left: 4rem;">Find out more about what you are buying
        </h2>

      </div>
    </div>
  </div>

  <section class="bg-white">
    <div class="bg-white">
      <div class="row bg-white">

        <!--start product details-->
        <div style="padding-top: 2rem; background-color: white;" class="col-md-3 col-sm-6 ffty">
          <div class="myButtons">
            <div class="btn-group" id="MatchingEntitiesButtons">
              <div class="details det1"  style="padding:0!important;">

                <p><button id="Button1" class="roundBtns active " onclick="togglediv('NamesTable')" type="button" style="font-size: 14px;color:#000;padding: 8px ;background: none;"> Details </button></p>

                <p><button id="Button2" class="roundBtns" onclick="togglediv('PhoneTable')" type="button" style="font-size: 14px;color:#000;padding: 8px ;font-weight: 200;background: none;"> Care Instruction </button></p>

                <p><button id="Button3" class="roundBtns" onclick="togglediv('AddressTable')" type="button" style="font-size: 14px;color:#000;padding: 8px ;font-weight: 200;background: none;"> Shipping & Return</button></p>

                <p><button id="Button4" class="roundBtns" onclick="togglediv('GradesTable')" type="button" style="font-size: 14px;color:#000;padding: 8px;font-weight: 200;background: none;"> Warranty</button></p>

                <p><button id="Button5" class="roundBtns" onclick="togglediv('SchoolTable')" type="button" style="font-size: 14px;color:#000;padding: 8px;font-weight: 200;background: none;"> Features </button></p>

              </div>
            </div>
          </div>
        </div>
        <div style="padding-top: 2rem; background-color: white;" class="col-md-5 col-sm-6 ">
          <div class="cc TableBody" id="NamesTable" class="" style="display:none">

            <h4><b>Details</b></h4>
            <?=$product_data->productdescription?>
          </div>

          <div class="cc TableBody" id="PhoneTable" style="display:none">

            <h4><b>Care Instruction</b></h4>
            <?=$product_data->careinstruction?>

          </div>

          <div class="cc TableBody" id="AddressTable" style="display:none">

            <h4><b>Shipping & Return</b></h4>
            <p><i class="bi bi-circle"></i>Returns of goods will be accepted only for Damaged/Defective products.
            </p>
            <p><i class="bi bi-circle"></i>Replacement shall be considered only if the damage/defect is reported to
              us
              with photographic evidence in writing within 3 working days from the receipt of the product.</p>
            <p><i class="bi bi-circle"></i>To return or replace the goods, customer has to pack the goods on the
              same
              package on which the goods were received and a hard copy of the document provided by the customer
              executive.</p>
            <p><i class="bi bi-circle"></i>Material:Cane and Iron</p>
            <p><i class="bi bi-circle"></i>A refund will be provided in case a replacement for the same product is
              not
              available.</p>
            <p><i class="bi bi-circle"></i>We normally process the refund in 7-9 days from the date of receipt of
              material at our end.</p>

          </div>

          <div class="cc TableBody" id="GradesTable" style="display:none">

            <h4><b>Warranty</b></h4>
            <p>6 months technical and functional issues.</p>

          </div>

          <div class="cc TableBody">

            <h4 style="font-size: 24px;margin-bottom: 20px;color: #3e3938;font-weight: bold;">Details</h4>
            <?=$product_data->productdescription?>

          </div>

          <div class="cc TableBody" id="SchoolTable" style="display:none">

            <h4><b>Features</b></h4>
            <?=$product_data->feature?>


          </div>
        </div>

        <!--end product details-->

        <div style="padding-bottom: 2rem; background-color: white; padding-left: 0px;" class="col-md-4 col-sm-12">
          <div class="qwer">
            <div class="rr">

              <a href="<?=base_url()?>" style="color: #3e3938;; font-size: 11px; font-weight: 600;">HOME</a>&nbsp;&nbsp;<i class="fas fa-greater-than" style="font-size: 11px;"></i>
              <h3 style="font-size: 40px;text-transform: none;font-weight: 300;line-height: 1.2;color: #3e3938;"><?=$product_data->productname?>
              </h3>
              <br>
              <p class="productdetailcontent" style="font-size: 13px;line-height: 1.7;font-weight: 400;text-transform: none;color: #3e3938 ;justify-content: center;">specimen book. It has survived not only five
                centuries,<br> but also the
                leap
                into
                electronic typesetting,
                remaining <br> essentially unchanged. It was popularised in the 1960s.

              </p>

              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <!-- <div class="bvf">
                    <p>Price</p>
                  </div> -->


                </div>
                <div class="col-md-6 col-sm-12">
                  <!-- <div class="vfds">

                    <p><b>Special<br>Price:$4,139</b></p>

                  </div> -->
                </div>


              </div>


              <div class="xc">
                <br>
                <p>
                  <span style="font-size: 14px;color: #212529;font-weight: bold;"><s style="font-size: 12px;text-decoration: line-through;color:red">(Rs.<?=$product_data->mrp?>)</s> </span>
                </p>
                <pre class="pricesection" style="color: #212529;font-size: 14px;">Price: <span style="font-size: 14px;color: #212529;font-weight: bold;">Rs.<?=$product_data->selling_price?></span></pre>
                <br>
                <br>
              </div>


              <div class="bbbs" style="display: flex;align-items: center; cursor: pointer;">
                <p><b style="font-size: 14px;letter-spacing: 2px; margin: 2px">Quantity</b>
                <div class="input-group" style="position: relative;width: 100%;justify-content: center;">
                  <span class="input-group__addon" style="border-right: 0;border-top-left-radius: 20px;border-bottom-left-radius: 20px;">
                    <div class="input-group__button input-group__button--decrease" id="childMinus" data-bind="click: decreaseQty">
                      <span class="input-group__icon input-group__icon--decrease">-</span>
                    </div>
                  </span>
                  <input name="qty" id="child" value="1" min="1" onchange="qty_set()" style="display: inline-block;width: 50px;text-align: center;pointer-events: none;background: #fff;
                          background-clip: padding-box;
                          border: 1px solid #c2c2c2;
                          border-radius: 1px;
                          font-size: 14px;
                          height: 32px;
                          line-height: 1.42857143;
                          padding: 0 9px;
                          vertical-align: baseline;
                          width: 16%;
                          box-sizing: border-box;">
                  <span class="input-group__addon" style="border-left: 0;border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                    <div class="input-group__button input-group__button--increase" id="childPlus" data-bind="click: increaseQty">
                      <span class="input-group__icon input-group__icon--increase">+</span>
                    </div>
                  </span>
                </div>

                </p>
              </div>
              <br>
              <br>

              <div class="row" class="hov_col1" style="align-items:center;" >
                <?if (empty($this->session->userdata('user_data'))) {?>
                <div class="col-md-7 rrcs" style="width:auto;">
                  <a href="" class="xmp" style="border-radius: 26px;
                      background-color: #e66b47;
                      z-index: 154;
                      transition: .3s all ease-in-out;
                      font-weight: 400;
                      text-transform: uppercase;
                      font-size: 13px;

                      letter-spacing: 2px;line-height: 2.2rem;
                      padding: 14px 58px;" onclick="addToCartOffline(this)" id="add_cart" product_id="<?=base64_encode($product_data->id)?>" quantity=1>Add To Cart</a>
                </div>
                <?} else {?>
                <div class="col-md-7 rrcs" style="width:auto; padding-left:0px!important;">
                  <a href="" class="xmp" style="border-radius: 26px;
                        background-color: #e66b47;
                        z-index: 154;
                        transition: .3s all ease-in-out;
                        font-weight: 400;
                        text-transform: uppercase;
                        font-size: 13px;
                        width: 220px;
                        letter-spacing: 2px;line-height: 2.2rem;
                        padding: 14px 58px;" onclick="addToCartOnline(this)" id="add_cart" product_id="<?=base64_encode($product_data->id)?>" quantity=1>Add To Cart</a>
                </div>
                <?php
                    $user_id = $this->session->userdata('user_id');
                                $this->db->select('*');
                    $this->db->from('tbl_wishlist');
                    $this->db->where('product_id', $product_data->id);
                    $this->db->where('user_id', $user_id);
                    $wishdata= $this->db->get()->row();
                    if (empty($wishdata)) {
                        ?>
                <a href="" style="color:#d76a46">
                  <div class="col-md-5">
                    <i class="fa fa-heart-o heacha" style="font-size: 1.5rem;" onclick="wishlist(this)" product_id="<?=base64_encode($product_data->id)?>" user_id="<?=base64_encode($this->session->userdata('user_id'))?>" status="add"></i>
                  </div>
                </a>
                <?php
                    } else {?>
                <a href="" style="color:#d76a46">
                  <div class="col-md-5" ><i class="fa fa-heart heacha" style="font-size: 1.5rem;" onclick="wishlist(this)" product_id="<?=base64_encode($product_data->id)?>" user_id="<?=base64_encode($this->session->userdata('user_id'))?>"
                      status="remove"></i>
                  </div>
                </a>
                <?}}?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end this section -->

  <!---Start you may like------>

  <section class="new_lunc overflow-hidden bg-white">
    <div class="container-fluid bg-white" style="padding: 0px;">
      <div class="row bg-white">
        <div class="col-md-12 bg-white ">

          <h2 style="font-size: 28px; margin-left: 36px; font-weight: 300; color: #4e4e4e;text-align:center;">You may also Like</h2>
        </div>
      </div>
      <div class="row bg-white">
        <div class="col-md-12 bg-white">
          <!-- Swiper -->

          <div class="swiper-wrapper autoplay bg-white">
            <?php $i=1; foreach ($like_data->result() as $like) { ?>
            <a href="<?=base_url()?>Home/product_details/<?=base64_encode($like->id)?>" style="color:unset">
              <div class="swiper-slide" style="padding: 15px;">
                <img src="<?=base_url().$like->image?>" alt="">
                <div class="my-3">
                  <h6><?=$like->productname?></h6> <span style="font-weight: bold; font-size: 12px;">Starts At
                    ???<?=$like->mrp?></span>
                </div>
              </div>
            </a>
            <?php $i++; } ?>

          </div>
        </div>
        <!-- <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-pagination"></div> -->
      </div>
    </div>
  </section>

  <!---end you may like-->

  <!---Start more from collection-->

  <section class="new_lunc overflow-hidden bg-white">
    <div class="container-fluid bg-white" style="padding:0px;">
      <div class="row bg-white">
        <div class="col-md-12 bg-white">
          <h2 style="font-size: 28px; margin-left: 36px; font-weight: 300; color: #4e4e4e; tesxt-align:center;">
            More from collection</h2>
        </div>
      </div>
      <div class="row bg-white">
        <div class="col-md-12 bg-white">
          <div class="swiper-wrapper autoplay">

            <?php $i=1; foreach ($more_data->result() as $more) {
                        $a=0;
                        $cat = json_decode($more->category);
                        $pro_cat = json_decode($product_data->category);
                        foreach ($cat as $value) {
                            foreach ($pro_cat as $pc) {
                                if ($value==$pc) {
                                    $a=1;
                                }
                            }
                        }
                        if ($a==1) {
                            ?>
            <div class="swiper-slide" style="padding: 15px;">
              <img src="<?=base_url().$more->image?>" alt="">
              <div class="my-3">
                <h6><?=$more->productname?></h6> <span style="font-weight: bold; font-size: 12px;">Starts At
                  ???<?=$more->mrp?></span>
              </div>
            </div>
            <?php $i++;
                        }
                    } ?>

          </div>
        </div>
        <!-- <div class="swiper-button-next"></div>
                                                                <div class="swiper-button-prev"></div>
                                                                <div class="swiper-pagination"></div>  -->
      </div>
    </div>
  </section>

  <!--end more from collection-->

  <!-- start Testimonials -->

  <section class="bg-white" style="margin-top:-50px!important; z-index: 999; position:relative; margin-bottom:-48px">
    <div class="container bg-white">
      <div class="w100 bg-white" style="text-align: center; ">
        <h2>What Our Customers Have to Say</h2>
      </div>
    </div>
    <div class="items bg-white" style="
                                        margin: 0px; margin-left: 0!important; width:100%;">
      <?php foreach ($data_testimonal->result() as $testimonals) {
                        $break_string=chunk_split($testimonals->message, 39, "<br>"); ?>
      <div class="col-md-12 bg-white">
        <img src="<?=base_url().$testimonals->image; ?>" class="img-fluid center" style="width:50%; display:block;margin-left:auto;margin-right: auto" />
        <div class="dfg col-md-2"><i class="fa fa-quote-left" style="font-size:25px;"></i></div>
        <div class="dfg" style="width: auto;">
          <p style="text-align: center; font-size:14px;"><?=$break_string; ?></p>
        </div>
        <div class="col-md-10 bg-white">
          <p style="text-align: right; font-size:14px;"><b><?=$testimonals->name?></b></p>
          <div class="col-md-2 ii bg-white" style="margin-left: 273px;"><i class="fa fa-quote-right" style="font-size:25px;"></i></div>
        </div>
      </div>
      <?php
                    } ?>
    </div>
  </section>

  <!-- End testimonals  -->
</div>


<!-- </div>m -->
<!-- </div> -->
<script src="<?=base_url()?>assets/frontend/assets/js/productdetail.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
  $("#childMinus").click(function() {
    if (parseInt($("#child").val()) != 0) {
      let result = parseInt($("#child").val()) - 1;
      $("#child").val(result);
      document.getElementById("add_cart").setAttribute("quantity", result);
    }
  })
  $("#childPlus").click(function(event) {
    var maxLength = parseInt($("#child").attr("max"));
    let result = parseInt($("#child").val()) + 1;
    if (result > maxLength) {
      alert("Max child limit is: " + maxLength);
      event.preventDefault();
      return false;
    } else {
      $("#child").val(result);
      document.getElementById("add_cart").setAttribute("quantity", result);
    }
  })
  // (function() {
  //   const heart = document.getElementById('heart');
  //   heart.addEventListener('click', function() {
  //     heart.classList.toggle('red');
  //   });
  // })();
</script>
