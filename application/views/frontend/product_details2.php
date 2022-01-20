<br />
<br />
<br />
<br />


<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
<script src="https://unpkg.com/swiper@6.5.4/swiper-bundle.min.js" charset="utf-8"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" charset="utf-8"></script> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" charset="utf-8"></script> -->
<style media="screen">
.product-thumbs .swiper-slide img {
border: 2px #e66b47;
padding:1px ;
object-fit: contain;
cursor: pointer;

}
.product-thumbs .swiper-slide-active img {
border-color: #bc4f38;
}
.product-slider .swiper-button-next:after,
.product-slider .swiper-button-prev:after {
  font-size: 20px;
  color: #e66b47;
  font-weight: bold;
}


</style>
<style media="screen">
/*******************************
* ACCORDION WITH TOGGLE ICONS
* Does not work properly if "in" is added after "collapse".
* Get free snippets on bootpen.com
*******************************/
.panel-group .panel {
  border-radius: 0;
  box-shadow: none;
  border-color: #EEEEEE;
}

.panel-default > .panel-heading {
  padding: 0;
  border-radius: 0;
  color: #212121;
  background-color: #FAFAFA;
  border-color: #EEEEEE;
}

.panel-title {
  font-size: 14px;
}

.panel-title > a {
  display: block;
  padding: 15px;
  text-decoration: none;
}

.more-less {
  float: right;
  color: #212121;
}

.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #EEEEEE;
}


.ffth{

}
.swimg{
height: 600px;
width:600px;
/* margin-left: 42px; */
}
.slimg{
height: 60px;
width: 60px;
/* margin-left: 30px; */
}
.btn:focus{
  box-shadow: 0 0 0 0.2rem rgb(230 107 71 );
}

@media only screen and (max-width :768px){
  .swimg{
  height: 300px;
  width:600px;}
  .btnm{
    font-size: 15px!important;
    font-family: 'Gotham Light'!important;
  }
}
@media (min-width:768px) {
  .swimg{
    margin-left: 35px;
    }
    .slimg{
        margin-left: 37px;
    }
  .rrcs{
    display: flex;
    justify-content: center;
  }
  .fixedElement {
      top: 96px;
       /* bottom:0; */
       position:fixed;
       /* position:sticky;
       width:100%;
       /* overflow-y:scroll;
       overflow-x:hidden; */
  }
  /* .relaxElement {
      top: 96px;
       bottom:0;
       position:relative;
       /* overflow-y:scroll;
       overflow-x:hidden; */
  } */
}
.btnm{
  font-family: 'Gotham Light'!important;
  font-size: 15px;
  font-style:normal;
}
</style>
<style media="screen">
            .form11 {

            margin-left: 40px ;
            text-align: center;
            padding-top: 0px;
            }

            .value-button {
            display: inline-block;
            border: 1px solid #ddd;
            margin: 0px;
            width: 40px;
            height: 40px;
            text-align: center;
            vertical-align: middle;
            padding: 11px 0;
            background: #e66b47;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }

            .value-button:hover {
            cursor: pointer;
            }

            .form11 #decrease {
            margin-right: -4px;
            border-radius: 8px 0 0 8px;
            }

            .form11 #increase {
            margin-left: -4px;
            border-radius: 0 8px 8px 0;
            }

            form #input-wrap {
            margin: 0px;
            padding: 0px;
            }

            input#number {
            text-align: center;
            border: none;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            margin: 0px;
            width: 100px;
            height: 40px;
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }
</style>
<section>
  <!-- slider start -->
<div class="row ffth">
  <div class="col-lg-1"></div>
<div class="col-lg-6 product-left">
  <div class="verslide">


  				<div class="swiper-container product-slider ">
  					<div class="swiper-wrapper ">
  						<div class="swiper-slide">
  							<img src="<?=base_url().$product_data->image?>" alt="..."  class="swimg">
  						</div>
              <?if(!empty($product_data->image1)){?>
  						<div class="swiper-slide">
  							<img src="<?=base_url().$product_data->image1?>" alt="..." class="swimg">
  						</div>
              <?}?>

              <?if(!empty($product_data->image2)){?>
  						<div class="swiper-slide">
  							<img src="<?=base_url().$product_data->image2?>" alt="..."  class="swimg">
  						</div>
              <?}?>

              <?if(!empty($product_data->image3)){?>
  						<div class="swiper-slide">
  							<img src="<?=base_url().$product_data->image3?>" alt="..."  class="swimg">
  						</div>
              <?}?>

  					</div>
  					<div class="swiper-button-next"></div>
  					<div class="swiper-button-prev"></div>
  				</div>
<br>
  				<div class="swiper-container product-thumbs verthumb">
  					<div class="swiper-wrapper">
  						<div class="swiper-slide" >
  							<img src="<?=base_url().$product_data->image?>" alt="..." class="slimg">
  						</div>
              <?if(!empty($product_data->image1)){?>
  						<div class="swiper-slide">
  							<img src="<?=base_url().$product_data->image1?>" alt="..." class="slimg">
  						</div>
              <?}?>

              <?if(!empty($product_data->image2)){?>
  						<div class="swiper-slide">
  							<img src="<?=base_url().$product_data->image2?>" alt="..." class="slimg">
  						</div>
              <?}?>

              <?if(!empty($product_data->image3)){?>
  						<div class="swiper-slide">
  							<img src="<?=base_url().$product_data->image3?>" alt="..." class="slimg">
  						</div>
              <?}?>

    		</div>
  	</div>

</div>

</div>

<!-- slider end -->


<!---order table start ------------------------------------->

  <div class="col-lg-4 ">

    <div style="padding-bottom: 2rem; background-color: white; padding-left: 0px;" id="info" class="fixedElement" >
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


          <div class="bbbs" style="display:flex; align-item:center; cursor: pointer;">


          <p><b style="font-size: 14px;letter-spacing: 2px; margin: 2px">Quantity</b>
            <div class="gfgft" style="display:flex;">
<div class="form11">



            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
            <input type="number" id="number" value="0" />
            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>

</div>
        </div>

        </div>
          <!-- <div class="bbbs" style="display: flex;align-items: center; cursor: pointer;">
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
          </div> -->
          <br>
          <br>

          <div class="row" class="hov_col1" style="align-items:center;" >
            <?if (empty($this->session->userdata('user_data'))) {?>
            <div class="col-md-7 rrcs" style="">
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
  <div class="col-lg-1"></div>




<!-- order table end      ---------------------->
</div>

</section>


<br>
<br>

<section>


<div class="row">

  <div class="col-lg-1"> </div>

  <div class="col-lg-6">
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btnm btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          details
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <?=$product_data->productdescription?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btnm btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Care Instruction
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
          <?=$product_data->careinstruction?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btnm btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Shipping & Return
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">

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
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingfour">
      <h2 class="mb-0">
        <button class="btn btnm btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
          Warranty
        </button>
      </h2>
    </div>
    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
      <div class="card-body">
        And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingfive">
      <h2 class="mb-0">
        <button class="btn btnm btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive" style="box-shadow:#ffffff;">
        Features
        </button>
      </h2>
    </div>
    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
      <div class="card-body">
        And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
      </div>
    </div>
  </div>
  </div>

  </div>

</div>



</section>




<hr>


  <!---Start you may like------>

  <section class="new_lunc overflow-hidden bg-white">
    <div class="container-fluid bg-white" style="padding: 0px;">
      <div class="row bg-white">
        <div class="col-md-12 bg-white">

          <h2 style="font-size: 28px; margin-left: 36px; font-weight: 300; color: #4e4e4e;">You may also Like</h2>
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
                    ₹<?=$like->mrp?></span>
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
          <h2 style="font-size: 28px; margin-left: 36px; font-weight: 300; color: #4e4e4e;">
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
                  ₹<?=$more->mrp?></span>
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


<section>
  <button type="button" onclick="goToTwo()">Click to go to #2</button>




</section>



<script type="text/javascript">
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 945) {
        //clearHeader, not clearheader - caps H
        $("#info").removeClass("fixedElement");
    }else{
      $("#info").addClass("fixedElement");
    }
});
</script>

<script type="text/javascript">
/* product left start */
	if($(".product-left").length){
		var productSlider = new Swiper('.product-slider', {
			spaceBetween: 0,
			centeredSlides: false,
			loop:true,
			direction: 'horizontal',
			loopedSlides: 5,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			resizeObserver:true,
		});
		var productThumbs = new Swiper('.product-thumbs', {
			spaceBetween: 0,
			centeredSlides: true,
			loop: true,
			slideToClickedSlide: true,
			direction: 'horizontal',
			slidesPerView: 5,
			loopedSlides: 5,
		});
		productSlider.controller.control = productThumbs;
		productThumbs.controller.control = productSlider;




	}
	/* 	product left end */

  function goToTwo() {
    var num2 = '#group-2';

    document.querySelector(num2).scrollIntoView();

    $(num2).trigger('click');
}

/*******************************
* ACCORDION WITH TOGGLE ICONS
*******************************/
	function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);

    function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}

</script>
