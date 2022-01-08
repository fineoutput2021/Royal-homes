
<!--Start Newsletter -->
<section class="n_latter my-5 overflow-hidden bg-white">
  <div class="container1 bg-white">
    <div class="row bg-white">
      <div class="col-md-12 bg-white">
        <div class="text-center bg-white">
          <br>
          <br>
          <h2 style="font-size: 33px;">Sign up for our newsletter</h2>
          <br>
          <p style="font-size: 12px;">Enter your email to stay in the loop on new collections, upcoming events, and
            more.</p>
        </div>
        <form class="" action="<?=base_url()?>Home/add_news_letter" method="post">
          <div class="d-flex justify-content-center">
            <br>
            <input type="email" name="email" placeholder="Email id" style="background-color:  #f5f5f5; outline: none;">
          </div>
          <br>
          <div style="text-align: center;">
            <button type="submit" class="news">Submit</button>
        </form>
        <br>
        <br>
      </div>
    </div>
  </div>
  </div>
</section>

<!--End Newsletter-->

<!--footer Start-->
<section class="footer overflow-hidden heimed1" style="height: 590px;">
  <div class="container-fluid my-5" style="max-width: 90%;">
    <div class="row">
      <div class="col-md-12 text-center  mb-5">
        <div class="col-5 mx-auto mt-3">
          <img src="https://www.orangetree.in/pub/media/wysiwyg/footer-logo.png" alt="">
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-3">
        <h5 style="font-weight: 900;">
          Navigate
        </h5>
        <ul class="mb-4  mt-4 p-0 mobile-inlist">
          <li class="head"><a href="/bedroom"><span class="heading" style="font-weight: 700;">BEDROOM</span></a></li>
          <li><a href="/bedroom/beds" style="color: gray;">Beds</a></li>
          <li><a href="/living/side-tables" style="color: gray;">Side Tables</a></li>
        </ul>
        <ul class="mb-4  mt-4 p-0 mobile-inlist">
          <li class="head"><a href="/dining"><span class="heading" style="font-weight: 700;">DINING</span></a></li>
          <li><a href="/dining/dining-table" style="color: gray;">Tables</a></li>
          <li><a href="/dining/chairs" style="color: gray;">Chairs</a></li>
        </ul>
        <ul class="mb-4  mt-4 p-0 mobile-inlist">
          <li class="head"><a href="/living"><span class="heading" style="font-weight: 700;">LIVING</span></a></li>
          <li><a href="/living/sofas" style="color: gray;">Sofas</a></li>
          <li><a href="/living/lounger-chairs" style="color: gray;">Chairs</a></li>
        </ul>

        <ul class="mb-4  mt-4 p-0 mobile-inlist">
          <li class="head light"><a href="/lighting"><span class="heading"
                style="font-weight: 700;">LIGHTING</span></a></li>
          <li class="head"><a href="/decor"><span class="heading" style="font-weight: 700;">DECOR</span></a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 style="font-weight: 900;">
          Customer Care
        </h5>
        <br>
        <h5>
          <p class="mb-5" style="font-size: 16px; text-align: left;">on - Sat | 10:30 am - 6:00 pm (IST)<a
              href="tel:9001190790"><img src="https://www.orangetree.in/pub/media/wysiwyg/ph.jpg"
                style="width: 150px !important;" alt="ph"></a>
            <a href="mailto:care@orangetree.in"><img src="https://www.orangetree.in/pub/media/wysiwyg/email.jpg"
                style="width: 150px !important;" alt="email"></a>
          </p>
          <a href="contact us.html" style="text-decoration: none;">Visit Us</a>
        </h5>
        <br>
        <!-- <br> -->
        <p style="font-size: 16px; text-align: left;">View our Store locations</p>
        <br>
        <h5 style="font-weight: 700;">
          Social
        </h5>
        <ul>
          <li style="color: gray;" onmouseover="this.style.color='white'" onMouseOut="this.style.color='gray'">
            facebook</li>
          <li style="color: gray;" onmouseover="this.style.color='white'" onMouseOut="this.style.color='gray'">
            instagram</li>
        </ul>
        <br>
        <h5>
          <a href="Terms.html" style="text-decoration: none;">Terms & Conditions</a>
        </h5>
        <br>
      </div>
      <div class="col-md-3">

        <h5><a href="about us.html" style="font-weight: 700;">About us</a></h5>
        <br>
        <p style="font-size: 16px; text-align: left ; color: gray;">For over two decades Basant has been exporting
          Home decor products to some of the best brands in the world.
          A part of the vision Mr. Vinay Kumar had for Basant, was to framework a homegrown branch for the domestic
          market.</p>
        <br>
        <h5><a href="blog.html"
            style="text-decoration: none; color: white;font-weight: 700;">Blog</a></h5>
        <br>
        <h5 style="font-weight: 700;">Track Your Order</h5>
        <br>
        <h5 style="font-weight: 700;">Corporate Gifting</h5>
      </div>
      <div class="col-md-3 mj">
        <div class="eclipse border border-light rounded-circle text-center"><img class="d-inline-block align-middle"
            src="https://www.orangetree.in/pub/media/wysiwyg/footer_icon.png" alt="Orange Tree"></div>



      </div>
    </div>
</section>

<!-- End footer-->

</body>

<script>
$(document).ready(function() {
<?php if(!empty($this->session->flashdata('emessage'))){ ?>
 loadErrorNotify("<?=$this->session->flashdata('emessage');?>");
<?php  } ?>

<?php  if(!empty($this->session->flashdata('validationemessage'))){
$valid_errors = $this->session->flashdata('validationemessage');
$valid_errors = substr($valid_errors, 0, -1); ?>
loadErrorNotify("<?=$valid_errors?>");
<?php  } ?>

<?php if(!empty($this->session->flashdata('smessage'))){ ?>
  var succ_message = '<?php echo $this->session->flashdata('smessage');?>';
  loadSuccessNotify(succ_message);
 <?php  } ?>

});
function loadSuccessNotify(succ_message){
  $.notify({
             icon: 'fa fa-check',
             title: 'Alert!',
             message: succ_message
         },{
             element: 'body',
             position: null,
             type: "success",
             allow_dismiss: true,
             newest_on_top: false,
             showProgressbar: false,
             placement: {
                 from: "top",
                 align: "right"
             },
             offset: 20,
             spacing: 10,
             z_index: 1031,
             delay: 1000,
             animate: {
                 enter: 'animated fadeInDown',
                 exit: 'animated fadeOutUp'
             },
             icon_type: 'class',
             template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
             '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
             '<span data-notify="icon"></span> ' +
             '<span data-notify="title">{1}</span> ' +
             '<span data-notify="message">{2}</span>' +
             '<div class="progress" data-notify="progressbar">' +
              '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
             '<a href="{3}" target="{4}" data-notify="url"></a>' +
             '</div>'
         });

}

    function loadErrorNotify(message){
      $.notify({
                 icon: 'fa fa-cancel',
                 title: 'Alert!',
                 message: message
             },{
                 element: 'body',
                 position: null,
                 type: "danger",
                 allow_dismiss: true,
                 newest_on_top: false,
                 showProgressbar: false,
                 placement: {
                     from: "top",
                     align: "right"
                 },
                 offset: 20,
                 spacing: 10,
                 z_index: 1031,
                 delay: 1000,
                 animate: {
                     enter: 'animated fadeInDown',
                     exit: 'animated fadeOutUp'
                 },
                 icon_type: 'class',
                 template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                 '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                 '<span data-notify="icon"></span> ' +
                 '<span data-notify="title">{1}</span> ' +
                 '<span data-notify="message">{2}</span>' +
                 '<a href="{3}" target="{4}" data-notify="url"></a>' +
                 '</div>'
             });

    }

//-----------add to cart offline-----

  function addToCartOffline(obj){

    var product_id = $(obj).attr("product_id");
    var quantity = $(obj).attr("quantity");
    var base_path = "<?=base_url();?>";
       $.ajax({
       url:'<?=base_url();?>Cart/addToCartOffline',
       method: 'post',
       data: {product_id: product_id, quantity: quantity},
       dataType: 'json',
       success: function(response){
       if(response.data == true){
         // alert(response.data_message)
          // var msg = response.data_message;
              $.notify({
                        icon: 'fa fa-check',
                        title: 'Alert!',
                        message: "Item successfully added in your cart"
                    },{
                        element: 'body',
                        position: null,
                        type: "success",
                        allow_dismiss: true,
                        newest_on_top: false,
                        showProgressbar: true,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 20,
                        spacing: 10,
                        z_index: 1031,
                        delay: 5000,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        },
                        icon_type: 'class',
                        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                        '<span data-notify="icon"></span> ' +
                        '<span data-notify="title">{1}</span> ' +
                        '<span data-notify="message">{2}</span>' +
                        '<a href="{3}" target="{4}" data-notify="url"></a>' +
                        '</div>'
                    });
                    window.setTimeout(function(){location.reload()},2000)

       }else if(response.data == false){
         var msg = response.data_message;
               $.notify({
                           icon: 'fa fa-cancel',
                           title: 'Alert!',
                           message: msg
                       },{
                           element: 'body',
                           position: null,
                           type: "danger",
                           allow_dismiss: true,
                           newest_on_top: false,
                           showProgressbar: true,
                           placement: {
                               from: "top",
                               align: "right"
                           },
                           offset: 20,
                           spacing: 10,
                           z_index: 1031,
                           delay: 5000,
                           animate: {
                               enter: 'animated fadeInDown',
                               exit: 'animated fadeOutUp'
                           },
                           icon_type: 'class',
                           template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                           '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                           '<span data-notify="icon"></span> ' +
                           '<span data-notify="title">{1}</span> ' +
                           '<span data-notify="message">{2}</span>' +
                           '<a href="{3}" target="{4}" data-notify="url"></a>' +
                           '</div>'
                       });
                       window.setTimeout(function(){location.reload()},2000)
       }
     }
       });

  }

///-----------add to cart online-----------

  function addToCartOnline(obj){

    var product_id = $(obj).attr("product_id");
    var quantity = $(obj).attr("quantity");
    var base_path = "<?=base_url();?>";
       $.ajax({
       url:'<?=base_url();?>Cart/addToCartOnline',
       method: 'post',
       data: {product_id: product_id, quantity: quantity},
       dataType: 'json',
       success: function(response){
       if(response.data == true){
         // alert(response.data_message)
          // var msg = response.data_message;
              $.notify({
                        icon: 'fa fa-check',
                        title: 'Alert!',
                        message: "Item successfully added in your cart"
                    },{
                        element: 'body',
                        position: null,
                        type: "success",
                        allow_dismiss: true,
                        newest_on_top: false,
                        showProgressbar: true,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 20,
                        spacing: 10,
                        z_index: 1031,
                        delay: 5000,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        },
                        icon_type: 'class',
                        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                        '<span data-notify="icon"></span> ' +
                        '<span data-notify="title">{1}</span> ' +
                        '<span data-notify="message">{2}</span>' +
                        '<a href="{3}" target="{4}" data-notify="url"></a>' +
                        '</div>'
                    });
                    window.setTimeout(function(){location.reload()},2000)

       }else if(response.data == false){
         var msg = response.data_message;
               $.notify({
                           icon: 'fa fa-cancel',
                           title: 'Alert!',
                           message: msg
                       },{
                           element: 'body',
                           position: null,
                           type: "danger",
                           allow_dismiss: true,
                           newest_on_top: false,
                           showProgressbar: true,
                           placement: {
                               from: "top",
                               align: "right"
                           },
                           offset: 20,
                           spacing: 10,
                           z_index: 1031,
                           delay: 5000,
                           animate: {
                               enter: 'animated fadeInDown',
                               exit: 'animated fadeOutUp'
                           },
                           icon_type: 'class',
                           template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                           '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                           '<span data-notify="icon"></span> ' +
                           '<span data-notify="title">{1}</span> ' +
                           '<span data-notify="message">{2}</span>' +
                           '<a href="{3}" target="{4}" data-notify="url"></a>' +
                           '</div>'
                       });
                       window.setTimeout(function(){location.reload()},2000)

       }
     }
       });

  }

//---------------wishlist----------
function wishlist(obj) {
  var product_id = $(obj).attr("product_id");
  var user_id = $(obj).attr("user_id");
  var status = $(obj).attr("status");
  // alert(product_id);
  // alert(user_id);
  // alert(status);
  // return;
  $.ajax({
    url: '<?=base_url();?>Cart/wishlist',
    method: 'post',
    data: {
      product_id: product_id,user_id: user_id,status : status
    },
    dataType: 'json',
    success: function(response) {
      // alert(response.data_message)
      if (response.data == true) {
        $.notify({
          icon: 'fa fa-check',
          title: '',
          message: response.data_message
        }, {
          element: 'body',
          position: null,
          type: "success",
          allow_dismiss: true,
          newest_on_top: false,
          showProgressbar: false,
          placement: {
            from: "top",
            align: "right"
          },
          offset: 20,
          spacing: 10,
          z_index: 1031,
          delay: 1000,
          animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
          },
          icon_type: 'class',
          template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });

        window.setTimeout(function(){location.reload()},3000)

      } else if (response.data == false) {
        $.notify({
          icon: 'fa fa-cancel',
          title: '',
          message: response.data_message
        }, {
          element: 'body',
          position: null,
          type: "danger",
          allow_dismiss: true,
          newest_on_top: false,
          showProgressbar: true,
          placement: {
            from: "top",
            align: "right"
          },
          offset: 20,
          spacing: 10,
          z_index: 1031,
          delay: 5000,
          animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
          },
          icon_type: 'class',
          template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
        window.setTimeout(function(){location.reload()},1000)
      }
      // window.setTimeout(function(){location.reload()},10000)

    }
  });
}


</script>

<script type="text/javascript">
$(".fa-bars").click(function () {
  $(".side_bar").css({
    transform: 'translateX(0px)',
  });
});
$(".close_side").click(function () {
  $(".side_bar").css({
    transform: 'translateX(-900px)',
  });
});
</script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script> -->
<!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
function openNav2() {
  document.getElementById("mySidebar").style.width = "250px";
  // document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("account_open_close").addEventListener("click", () => { closeNav2() });
  document.getElementById("account_open_close").removeEventListener("click", () => { openNav2() });
}

function closeNav2() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("account_open_close").addEventListener("click", () => { openNav2() });
  document.getElementById("account_open_close").removeEventListener("click", () => { closeNav2() });
}
</script>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "block";
    btnText.innerHTML = '<p style=" color: #de542d !important;">Read More</p>';
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = '<p style=" color: #de542d !important;">Read Less</p>';
    moreText.style.display = "block";
  }
}
</script>
<script>
$(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
      $(".header").addClass("active");
      $(".btn_change_change").addClass("black");
      $(".logochan").addClass("active");
      $(".logochan").html('<a href="<?=base_url()?>" style="text-decoration: none;  text-align: center;"><span style="color: #d76a46; font-size:40px !important;border-bottom: 2px solid grey ;">O</span></a>');
      $(".headerlinks").css("color", "black")
    } else {
      //remove the background property so it comes transparent again (defined in your css)
      $(".header").removeClass("active");
      $(".btn_change_change").removeClass("black");
      $(".logochan").removeClass("active");
      $(".headerlinks").css("color", "white")
      $(".logochan").html('<a href="<?=base_url()?>" style="text-decoration: none;"><img src="https://www.orangetree.in/pub/static/version1632556275/frontend/Digital/desktop/en_US/images/logo_base.png" class="img1111"></a>');
    }
  });
});
</script>


<script type="text/javascript">

$('.autoplay').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
{
  breakpoint: 768,
  settings: {
  slidesToShow: 1,
  centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
  slidesToScroll: 1
  }
}
]
});

$('.decor').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

$('.fist_slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

$('.say').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

</script>


<script>
// window.onload = () => {
//   document.getElementById("button1").click()
// }
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "80%";
  document.getElementById("main").style.marginLeft = "0px";
  document.getElementById("menucloseopen").addEventListener("click", () => { closeNav() });
  document.getElementById("menucloseopen").removeEventListener("click", () => { openNav() });
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";

  document.getElementById("menucloseopen").addEventListener("click", () => { openNav() });
  document.getElementById("menucloseopen").removeEventListener("click", () => { closeNav() });
}
</script>
<!-- Initialize Swiper -->
<!-- <script>
 var swiper = new Swiper(".mySwiper", {
   spaceBetween: 5,
   centeredSlides: true,
   autoplay: {
     delay: 2500,
     disableOnInteraction: false,
   },
   pagination: {
     el: ".swiper-pagination",
     clickable: true,
   },
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
 });
</script> -->

<!-- second slider -->

<!-- <script>
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 3,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
</script>  -->




<!-- thred slider -->

<!-- <script>
  var swiper = new Swiper(".flover", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>  -->


<!-- <script>
var swiper = new Swiper(".decor", {
  slidesPerView: 2,
  spaceBetween: 30,
  slidesPerGroup: 2,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
</script>  -->

<!-- add script  -->

<script>
function toggleHide() {
  let btn = document.getElementById('btn');
  let para = document.getElementById('para');
  if (para.style.display != 'none') {
    para.style.display = 'none';
  }
  else {
    para.style.display = 'block';
  }
}
</script>
<script>
function toggleHide() {
  let btn4 = document.getElementById('btn4');
  let para = document.getElementById('para');
  if (para.style.display != 'none') {
    para.style.display = 'none';
  }
  else {
    para.style.display = 'block';
  }
}
</script>
<script>
function toggleHide() {
  let btn3 = document.getElementById('btn3');
  let para = document.getElementById('para');
  if (para.style.display != 'none') {
    para.style.display = 'none';
  }
  else {
    para.style.display = 'block';
  }
}
</script>
<script>
function toggleHide() {
  let btn2 = document.getElementById('btn2');
  let para = document.getElementById('para');
  if (para.style.display != 'none') {
    para.style.display = 'none';
  }
  else {
    para.style.display = 'block';
  }
}
</script>
<script>
function toggleHide() {
  let btn1 = document.getElementById('btn1');
  let para = document.getElementById('para');
  if (para.style.display != 'none') {
    para.style.display = 'none';
  }
  else {
    para.style.display = 'block';
  }
}
</script>
<script>
$(document).ready(function () {



  $('.items').slick({
    infinite: true,
    lazyLoad: 'ondemand',
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: null,
    nextArrow: null,
    responsive: [
  {
    breakpoint: 768,
    settings: {
    slidesToShow: 1,
    centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
    slidesToScroll: 1
    }
  }
  ]
  });






});
</script>
<script>
var unit = 0;
var total;
// if user changes value in field
$('.field').change(function () {
  unit = this.value;
});
$('.add').click(function () {
  unit++;
  var $input = $(this).prevUntil('.sub');
  $input.val(unit);
  unit = unit;
});
$('.sub').click(function () {
  if (unit > 0) {
    unit--;
    var $input = $(this).nextUntil('.add');
    $input.val(unit);
  }
});
</script>
<script>
function togglediv(id) {
  document.querySelectorAll(".TableBody").forEach(function (div) {
    // TableBody = "active";
    if (div.id == id) {
      // Toggle specified DIV
      div.style.display = div.style.display == "none" ? "block" : "none";
    } else {
      // Hide other DIVs
      div.style.display = "none";
    }
  });
}
</script>

<script src="<?=base_url()?>assets/frontend/assets/js/bootstrap-notify.min.js"></script>

</html>
