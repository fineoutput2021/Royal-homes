<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orange Tree</title>
  <link rel="stylesheet" href="<?=base_url()?>assets/frontend/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/frontend/assets/css/mainnav.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/frontend/assets/css/new.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/frontend/assets/css/productdetail.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
  <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&family=Zen+Antique+Soft&family=Zen+Old+Mincho&display=swap" rel="stylesheet">

   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&family=Zen+Antique+Soft&family=Zen+Old+Mincho&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/assets/css/bootstrap.css">
    <!-- <script src="<?=base_url()?>assets/frontend/assets/js/bootstrap.js"></script> -->
<script src="<?=base_url()?>assets/frontend/assets/js/bootstrap-notify.min.js"></script>
  <style>

    @media(max-width:640px) {
      .heimed1 {
        height: 1518px !important;
      }
    }

    @media(max-width:640px) {
      .btmed232 {
        width: 5%;
      }

      .btmed231 {
        margin-left: 150px;
      }
    }

    @media(max-width:640px) {
      .NONE1 {
        display: none;
      }

      #main {
        margin-left: 242px;
      }

      #mobch13 {
        margin-right: 30px;
        margin-left: -2px;
        margin-top: -74px;
      }

      .ch234 {
        margin-right: -133px !important;
        margin-left: 123px !important;
        margin-top: -74px;
      }

      .img1111 {
        width: 102% !important;
        margin-left: 0px !important;
      }

      .logo {
        width: 47% !important;
        margin-left: 88px !important;
      }
    }

    @media (min-width:300px) {
      .sidenav a {
        padding: 0px 23px 0px 25px;
        font-size: 21px;
      }
    }
  </style>
  <style>
    .body {
      font-family: 'Montserrat', sans-serif;
      font-family: 'Zen Antique Soft', serif;
      font-family: 'Zen Old Mincho', serif;
    }
  </style>
  <style>
    .items {
      width: 90%;
      margin: 0px auto;
      margin-top: 100px
    }

    img {
      width: 100%;
    }
  </style>
  <style>
    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      right: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    .openbtn {
      font-size: 15px;
      margin-top: 7px;
      padding: 4px;
      cursor: pointer;
      background-color: transparent;
      color: white;
      padding: 0px;
      border: none;
    }

    #main {
      transition: margin-left .5s;
      padding: 18px;
      margin-left: -23px;
      margin-right: -23px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidebar {
        padding-top: 15px;
      }

      .sidebar a {
        font-size: 18px;
      }
    }

    /* new style add  */

    * {
      font-family: roboto;
    }

    *h2 {
      color: #666666;
    }

    .center {
      text-align: center;
    }

    .container1 {
      width: auto;
      margin: auto;
    }

    .w200 {
      margin: 100px 0px;
    }

    .w50 {
      margin-bottom: 50px;
    }

    .w100 {
      margin: 50px 0px;
    }

    .nbv p {
      border-bottom: solid 1px #ccc;
      border-top: solid 1px #ccc;
      padding: 10px 0px;
    }

    .details p {
      border-bottom: solid 1px #ccc;
    }

    .cc {
      padding-left: 40px;
    }

    .cc i {
      font-size: 7px;
      margin-right: 10px;
    }

    .rr {
      border-left: solid 1px #ccc;
      padding-left: 20px;
    }

    .rr a {
      text-decoration: none;
      color: #ccc;
    }

    .rr h2 {
      padding-top: 40px;
    }

    .d-flex {
      display: flex;
    }

    .sb {
      justify-content: space-between;
    }

    .bvf {
      width: 35%;
    }

    .vfds {
      width: 50%;
    }

    .vfds {
      border-top: solid 1px #ccc;
      margin-top: 14px;
    }

    .vfds p {
      font-size: 16px;
      padding-left: 20px;
      padding-top: 10px;
    }

    .xc span {
      color: #ff6633;
    }

    .rrcs a {
      color: #fff;
      background: #ff6633;
      padding: 10px 28px;
      border-radius: 40px;
    }

    .rrcs a:hover {
      background: #0000;
    }

    .rrcs i {
      font-size: 20px;
      padding-right: 10px;
      padding-top: 10px;
      padding-left: 10px;
    }

    .ky {
      border-bottom: solid 1px #ccc;
      padding-bottom: 10px;
    }

    .gfh img {
      width: 100%;
    }

    .im h2 {
      padding: 40px 0px;
    }

    .ww {
      background: #fff;
      padding: 10px 0px;
    }

    .ww p {
      padding: 20px 20px;
    }

    .im {
      border-bottom: solid 1px #ccc;
    }

    .imm h2 {
      padding-bottom: 40px;
    }

    .imm {
      border-bottom: solid 1px #ccc;
    }

    .dfg i {
      font-size: 30px;
      padding-right: 6px;
    }

    .dfg p {
      padding: 18px 0px 0px 0px
    }

    .nji {
      padding-top: inherit;
    }

    .nji p {
      padding-left: 140px;
    }

    .ii i {
      font-size: 30px;
      padding-right: 10px;
      padding-left: 10px;
      padding-top: 6px;
    }

    .mjyt input {
      width: 40%;
      border: none;
      border-bottom: solid 1px #ccc;
      padding-top: 20px;
    }

    .lkjj a {
      text-decoration: none;
      color: #6666;
      padding-top: 10px;
      display: inline-block;
    }

    .lkjj a:hover {
      border-bottom: solid 1px #6666;
    }

    .gfh p {
      padding-top: 20px;
    }

    .bvf {
      border-top: solid 1px #cccc;
    }

    .section {
      margin: 0px 40px;
    }

    .gtre {
      padding-top: 0px;
    }

    .voc h2 {
      padding-left: 200px;
    }

    .bbb {
      border-top: solid 1px #6666;
      margin-top: 40px;
      width: 50%;
    }

    .firr {
      margin-left: 40px;
    }

    .firrr h4 {
      padding: 10px 0px;
    }

    .firrrr h4 {
      padding: 10px 0px;
    }

    .loi img {
      justify-content: center;
    }

    @media(max-width:1000px) {
      p {
        font-size: 14px;
      }

      .rrcs a {
        padding: inherit;
        padding: 8px 14px;
        margin-bottom: 10px;
        display: inline-block;
      }

      img {
        width: 100%;
      }

      .ky {
        border-bottom: none;
      }

      .bvf p {
        align-items: center;
      }
    }

    @media(max-width: 1320px) {

      .firrr img {
        width: 100%;
      }

      .firrrr img {
        width: 100%;
      }



    }



    @media (max-width: 768px) {
      p {
        font-size: 20px;
        text-align: center;
      }

      .first {
        text-align: center;
      }

      .ky {
        text-align: center;
      }

      h2 {
        text-align: center;
      }

      .ii {
        display: none;
      }

      .dfg i {
        display: none;
      }

      .voc {
        display: none;
      }

      .gtre {
        display: none;
      }

      .pp {
        text-align: center;
      }

      .bbb {
        text-align: center;
        margin-left: 60px;
      }

      .firrr img {
        width: 100%;
      }

      .firrrr h4 {
        text-align: center;
      }

      .firrrr img {
        width: 100%;
      }

      .firrr h4 {
        text-align: center;
      }

      .firrrr {
        display: none;
      }

      .gfh img {
        width: 90%;
      }

      .gfh p {
        text-align: center;
        font-size: 30px;
      }

      .cc h4 {
        text-align: center;
      }

      .vfds p {
        text-align: center;
      }

      .bvf p {
        text-align: center;
      }
    }

    @media(max-width: 580px) {
      .nbv p {
        font-size: 20px;
        text-align: center;
      }

      .details p {
        text-align: center;
      }

      .vfds p {
        margin-left: 500px;
        border: none;
      }

      .bvf p {
        text-align: center;
        margin-left: 520px;
      }

      .vfds {
        border: none;
      }

      .bvf {
        border: none;
      }

      .gfh img {
        width: 234%;
      }

      .gfh p {
        margin-left: 510px;
      }

      .iuy {
        display: none;
      }
    }

    @media all and (max-width: 360px) {
      .sidebar a {
        font-size: 17px;
        padding: 7px 21px 13px 38px;
      }

      .sidenav a {
        font-size: 18px !important;
        padding: 0px 8px 4px 36px !important;
      }
    }
  </style>

  <style>
    @media(min-width: 300px) and (max-width: 900px) {

      .brand_logo {
        display: flex;
        justify-content: center;
      }

      .side_bar {
        position: fixed;
        left: 0;
        top: 0;
        background: #fff;
        z-index: 5000;
        height: 100%;
        width: 100%;
        transform: translateX(-900px);
        transition: 0.5s ease-in-out;
        overflow: auto;
      }

      .first_ul {
        display: block !important;
      }

      .top_menu ul li {
        position: relative;
        border-bottom: 1px solid #dadada;
      }



      .top_menu ul li::after {
        content: '';
        position: absolute;
        display: inline-block;
        height: 10px;
        width: 10px;
        border-color: #74aa62;
        border-style: solid;
        border-width: 1px 1px 0 0;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        top: 50%;
        margin-top: -5px;
        right: 15px;
      }

      .sub_menu .col-md-3 {
        border: none;
      }

      .top_menu ul {
        overflow: scroll;
        height: inherit;
      }

      .top_menu ul li:hover .sub_menu {
        display: block;
      }


      .top_menu ul li:hover::after {
        transform: rotate(134deg);
      }



    }
  </style>

  <style>
    /* The side navigation menu */
    .sidenav {
      height: 100%;
      /* 100% Full-height */
      width: 0;
      /* 0 width - change this with JavaScript */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Stay on top */
      top: 0;
      /* Stay at the top */
      left: 0;
      background-color: #111;
      /* Black*/
      overflow-x: hidden;
      /* Disable horizontal scroll */
      padding-top: 60px;
      /* Place content 60px from the top */
      transition: 0.5s;
      /* 0.5 second transition effect to slide in the sidenav */
    }

    /* The navigation menu links */
    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover {
      color: #f1f1f1;
    }

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
      transition: margin-left .5s;
      padding: 12px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }

    @media all and (max-width: 360px) {
      .mg {
        margin-bottom: 20px;
      }

      .mj {
        margin-top: 30px;
      }
    }

/* ------model class------------ */
.model{
  display:none;
  position:fixed;
  padding-top: 100px;
  top:0;
  left:0;
  z-index:1;
  overflow:auto;
  width: 100%;
  height: 100%;
  background-color:rgba(0,0,0,0.4);
}

.model-content{
  position: relative;
  width:80%;
  margin:auto;
  background-color:#fff;
  animation-name: animatetop;
  animation-duration: 0.4s
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

  </style>
</head>

<body>
  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 d-sx-none menu change" style="width: 100%;">
          <nav class="navbar">
            <ul class="d-flex">
              <?php
            $this->db->select('*');
            $this->db->from('tbl_category');
$this->db->where('is_active', 1);
$category_data= $this->db->get();
 foreach ($category_data->result() as $data) {
     ?>
              <li>
                <a class="headerlinks" href="<?=base_url()?>Home/all_Product/<?=base64_encode($data->id)?>/<?=base64_encode(1)?>"><?=$data->categoryname?></a>
                <div class="mega-box">
                  <div class="content">
                    <div class="d-flex">
                      <ul class="mega-links d-flex flex-column">
                        <?php
     $this->db->select('*');
     $this->db->from('tbl_subcategory');
     $this->db->where('category_id', $data->id);
     $subdata= $this->db->get();
     foreach ($subdata->result() as $sub) {
         ?>
                        <li><a href="<?=base_url()?>Home/all_Product/<?=base64_encode($data->id)?>/<?=base64_encode(2)?>"><?php echo $sub->subcategory ?></a></li>
                        <?php
     } ?>
                      </ul>
                    </div>
                    <!-- <div class="d-flex">
                      <ul class="mega-links high d-flex flex-column">
                        <li><a href="all product.html">Collections</a></li>
                        <li><a href="all product.html">SantoriniNew</a></li>
                        <li><a href="all product.html">GiftingNew</a></li>
                        <li><a href="all product.html">Tribe</a></li>
                        <li><a href="all product.html">Alchemy</a></li>
                        <li><a href="all product.html">Architainment</a></li>
                        <li><a href="all product.html">Japon</a></li>
                        <li><a href="all product.html">Minoo</a></li>
                      </ul>
                    </div> -->
                  </div>
                  <div class="full">
                    <div>
                      <img src="<?=base_url().$data->image?>" class="img1" alt="full">
                    </div>
                    <!-- <div>
                      <img src="<?=base_url()?>assets/frontend/assets/img/img.jpg" class="img2" alt="flower">
                    </div> -->
                  </div>
                </div>
              </li>
              <?php
 } ?>
            </ul>
          </nav>
        </div>
        <div class="col-md-4 col-xs-6 logch1">
          <div class="logo logochan">
            <a href="<?=base_url()?>"><img src="https://www.orangetree.in/pub/static/version1632556275/frontend/Digital/desktop/en_US/images/logo_base.png" id="logohed" alt="" style="width: 82%;"></a>
          </div>
        </div>
        <div class="col-md-4 col-xs-6 menu">
          <ul style="margin-right: 30px; margin-left: -2px; margin-top:14px">
            <li>
              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" id="menucloseopen" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="all product.html">Lighting</a>
                <a href="all product.html">Decor</a>
                <a href="all product.html">Living</a>
                <a href="all product.html">Dining</a>
                <a href="all product.html">Bedroom</a>
              </div>
              <ul id="mobch13">
                <span onclick="openNav()">
                  <li class="media_q_change"><button><i class="fa fa-bars"></i></button></li>
                </span>
              </ul>
              <div id="main">
              </div>
            </li>
            <li class="media_q_change1"><i class="fa fa-search" aria-hidden="true"></i></li>
            <li class="media_q_change1"><a href="wish list.html" style="color: #fff;"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
            <div id="mySidebar" class="sidebar">
              <a href="javascript:void(0)" class="closebtn" id="account_open_close" onclick="closeNav2()">×</a>
              <a href="sign up.html">Sign up</a>
              <a href="login.html">login in</a>
              <a href="addresssetting.html">ACCOUNT SETTINGS</a>
              <a href="My Addresses.html">ADDRESSES</a>
              <a href="Address form.html">ADDRESS Form</a>
              <a href="new my order.html">My Order list</a>
              <a href="/">Log Out</a>
            </div>
            <div id="main" class="ch234">
              <?if(!empty($this->session->userdata('user_data'))){?>
              <i class="fa fa-user-o openbtn btn_change_change media_q_change2" aria-hidden="true" id="account_open_close" onclick="openNav2()"></i>
              <?}else{?>
                <i class="fa fa-user-o openbtn btn_change_change media_q_change2" aria-hidden="true" data-id="model" data-target="#mymodel"></i>
                <?}?>
            </div>
            <li><a href="<?=base_url()?>Home/view_cart" style="color: #fff;"><i class="fa fa-shopping-bag NONE1" aria-hidden="true"></i></a></li>
            <li class="media_q_change1"><a href="#" style="color: #fff;"><i class='fa fa-truck' style='font-size: 19px'></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
