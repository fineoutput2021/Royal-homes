<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Royal Homes</title>
  <link rel="stylesheet" href="<?=base_url()?>assets/frontend/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/frontend/assets/css/mainnav.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/frontend/assets/css/new.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/frontend/assets/css/productdetail.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;1,200&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/assets/css/animate.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/assets/css/bootstrap.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="<?=base_url()?>assets/frontend/assets/js/bootstrap.js"></script> -->
  <script src="<?=base_url()?>assets/frontend/assets/js/bootstrap-notify.min.js"></script>
  <script>
    window.addEventListener("pageshow", function(event) {
      var historyTraversal = event.persisted ||
        (typeof window.performance != "undefined" &&
          window.performance.navigation.type === 2);
      if (historyTraversal) {
        // Handle page restore.
        window.location.reload();
      }
    });
  </script>
  <style>
    body {
      font-family: Brandon Text !important;
      scroll-behavior: smooth;
    }

    .news{
      background: #d76a46;
      color: white;
      border: none;
      width:10%;
    }
    .news:hover{
      background: black;
      color: white;
    }
    /* The Modal (background) */

    .modal1 {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 3;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    .modal {
      display: none;
      z-index: 1;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
      cursor: pointer;
    }

    .primary {
      background: #e66c48;
      border: 1px solid #e66c48;
      border-radius: 0;
      font-size: 14px;
      text-transform: uppercase;
      font-weight: 400;
      letter-spacing: 2px;
      transition: all .2s ease-in-out;
      border-radius: 18px;
    }

    .logoimg {
      margin-left: 15rem;
      height: 25px !important;
      width: 32px !important;
      margin-top: 1rem;
      margin-bottom: 1rem;
    }

    text-button {
      text-align: center;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 3;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 38%;
    }

    .social {
      width: 8px;
      height: 18px;
    }

    .social1 {
      width: 18px;
      height: 18px;
    }

    .button {
      width: 100%;
      margin-top: 20px !important;
      background-color: #e66c48;
      border-radius: 18px !important;
      color: white;
      padding: 10px 22px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .btn {
      /* width: 270px; */
      background-color: white;
    }

    .btn1 {
      /* width: 241px; */
      background-color: white;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .formforgot-wrap a {
      color: #000;
      font-family: 'euclid light';
    }

    .formforgot-wrap {
      margin-top: 20px;
      margin-left: 0.5rem;
      font-size: 12px;
    }

    .logosection {
      height: 200px;
      margin-left: -20px;
      margin-right: -20px;
      margin-top: -48px;
      background: #f1f1f1;
    }

    .close {
      /* margin-left: 39rem; */
    }

    input[type=password],
    input[type=search],
    input[type=text],
    input[type=url] {
      background: #fff;
      background-clip: padding-box;
      border-bottom: 1px solid #c2c2c2;
      border-radius: 1px;
      font-size: 14px;
      height: 32px;
      line-height: 1.42857143;
      padding: 0 9px;
      vertical-align: baseline;
      width: 100%;
      box-sizing: border-box;
      margin-top: 20px;
    }

    input[type=email],
    input[type=number],
    input[type=password],
    input[type=search],
    input[type=text] input[type=url] {
      background: #fff;
      background-clip: padding-box;
      /* border: 1px solid #c2c2c2; */
      border-bottom: 1px solid #ccc;
      border-radius: 1px;

      /* font-size: 14px; */
      /* height: 32px; */
      line-height: 1.42857143;
      padding: 0 9px;
      vertical-align: baseline;
      width: 100%;
      box-sizing: border-box;
    }

    @media(max-width:720px) {
      .heimed1 {
        height: 100% !important;
      }
    }

    @media(max-width:640px) {
      .btmed232 {
        width: 5%;
      }

      .btmed231 {
        margin-left: 150px;
      }

      .modal-content {
        width: 89%;
      }
    }

    @media (max-width:1024px) {
      .modal-content {
        width: 54%;
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
        /* margin-right: 30px; */
        margin-right: 200px;
        margin-left: -2px;
        margin-top: -74px;
      }

      .ch234 {
        margin-right: -133px !important;
        margin-left: 123px !important;
        margin-top: -74px;
      }

      /* .logo {
        width: 71% !important;
        margin-left: 88px !important;
      }
    } */
    }

    @media (max-width:720px) {
      .img1111 {
        /* width: 102% !important; */
        /* margin-left: 0px !important; */
        /* padding:0 40px 0 40px; */
        width: 75% !important;
        margin-left: 15vw!important;
      }

      .menu ul li {
        line-height: 1.5;
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

    input[type=email],
    input[type=number],
    input[type=password],
    input[type=search],
    input[type=text],
    input[type=url] {
      background: #fff;
      background-clip: padding-box;
      /* border: 1px solid #c2c2c2; */
      border-radius: 1px;
      font-size: 14px;
      height: 32px;
      line-height: 1.42857143;
      padding: 0 9px;
      vertical-align: baseline;
      width: 100%;
      box-sizing: border-box;
    }

    .formset {
      height: 40px;
      font-size: 14px;
      position: relative;
      font-family: 'euclid light';
      border: 0;
      font-weight: 400;
      border-bottom: 1px solid #ccc;
    }

    .setform {
      width: 100%;
      flex-basis: 100%;
      padding: 25px 40px 30px;
      position: relative;
    }

    .setcolumn {
      height: 40px;
      font-size: 14px;
      position: relative;
      font-family: 'euclid light';
      border: 0;
      font-weight: 400;
      border-bottom: 1px solid #ccc;
    }


    @media (max-width:540px) {
      .respns1 {
        width: 20rem;
      }

      .respns2 {
        width: 12rem;
      }
    }

    @media (max-width:768px) {
      .btn1 {
        font-size: 8px !important;
      }

      .btn {
        font-size: 8px !important;
      }

      .logoimg {
        margin-left: 12rem !important;
      }
    }

    @media (max-width: 375px) {
      .logoimg {
        margin-left: 9rem !important;
      }

      .respns1 {
        width: 8rem;
      }
    }

    @media (max-width: 414px) {
      .modal-content {
        width: 95%;
      }

      .respns1 {
        width: 8rem;
      }

      .logoimg {
        margin-left: 11rem;
      }
    }

    @media (max-width:576px) {

      .modal-content {
        width: 98%;
      }
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
      font-family: Brandon Text !importants;
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
        padding-left: 2vw!important;
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
      padding-top: 30px;
      /* Place content 60px from the top */
      transition: 0.5s;
      /* 0.5 second transition effect to slide in the sidenav */
      overflow-y: scroll;
      -webkit-overflow-scrolling: touch; // mobile safari
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
      color: #d76a46;
    }

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
      position: absolute;
      top: -17px;
      right: 0px;
      font-size: 55px !important;
      margin-left: 50px;
      font-weight: 600;
      color: #d76a46;
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
    .model {
      display: none;
      position: fixed;
      padding-top: 100px;
      top: 0;
      left: 0;
      z-index: 1;
      overflow: auto;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .model-content {
      position: relative;
      width: 80%;
      margin: auto;
      background-color: #fff;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    @keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    .close {
      color: black;
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

    .modal-body {
      padding: 2px 16px;
    }

    .modal-footer {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
    }

    /* .form_method_name{
      padding:14px 24px;
    } */

    [data-toggle="collapse"]:after {
      display: inline-block;
      display: inline-block;
      font: normal normal normal 14px/1 FontAwesome;
      font-size: inherit;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      content: "\f054";
      transform: rotate(90deg);
      transition: all linear 0.25s;
      float: right;
    }

    [data-toggle="collapse"].collapsed:after {
      transform: rotate(0deg);
    }

    .count {
      color: #fff;
      text-align: center;
      line-height: 9px;
      font-size: 13px;
      background: #d76a46;
      border-radius: 50%;
      padding: 4px;
      position: absolute;
      margin-left: 9px;
      margin-top: 4px;
    }

    @media(max-width:780px) {
      .hide {
        display: none;
      }
    }

    .sl {
      display: flex;
      flex-direction: row;
      align-items: center;


    }

    li input.search_inp {
      max-width: 9rem;
      right: 18rem;
      top: 5px;
      transition: max-width 400ms linear;
    }

    .sb {
      position: relative;

    }

    .sb:hover li input.search_inp {
      max-width: 9rem;
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
                <?
                $this->db->select('*');
                $this->db->from('tbl_subcategory');
                $this->db->where('category_id', $data->id);
                $subdata= $this->db->get();
                $subcheck=$subdata->row();
                if(!empty($subcheck)){
                ?>
                <div class="mega-box">
                  <div class="content">
                    <div class="d-flex">
                      <ul class="mega-links d-flex flex-column">
                        <?php

     foreach ($subdata->result() as $sub) {
         ?>
                        <li><a href="<?=base_url()?>Home/all_Product/<?=base64_encode($sub->id)?>/<?=base64_encode(2)?>"><?php echo $sub->subcategory ?></a></li>
                        <?php
     } ?>
                      </ul>
                    </div>
                  </div>
                  <div class="full">
                    <div>
                      <img src="<?=base_url().$data->image?>" class="img1" alt="full">
                    </div>
                    <div>
                      <img src="<?=base_url().$data->image2?>" class="img2" alt="flower">
                    </div>
                  </div>
                </div>
                <?}?>
              </li>
              <?php
 } ?>
            </ul>
          </nav>
        </div>
        <div class="col-md-4 col-xs-6 logch1 img1111">
          <div class="logo logochan">
            <a href="<?=base_url()?>"><img src="https://www.orangetree.in/pub/static/version1632556275/frontend/Digital/desktop/en_US/images/logo_base.png" id="logohed" alt=""></a>
          </div>
        </div>
        <div class="col-md-4 col-xs-6 menu">
          <ul style="margin-right: 12px;
    margin-left: 101px;
    margin-top: 14px;">
            <li>
              <div id="mySidenav" class="sidenav">
                <div class="w-100 center mb-2">
                  <span style="color: #d76a46; font-size:40px !important;border-bottom: 2px solid white ;">O</span>
                </div>
                <a href="javascript:void(0)" id="menucloseopen" class="closebtn" onclick="closeNav()">&times</a>
                <div id="accordion" role="tablist">
                  <?php
            foreach ($category_data->result() as $data) {
                ?>

                  <div class="card" style="background:unset">
                    <div class="card-header" role="tab" id="heading_<?=$data->id?>">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse_<?=$data->id?>" aria-expanded="false" aria-controls="collapse_<?=$data->id?>">
                          <?=$data->categoryname?>
                        </a>
                      </h5>
                    </div>
                    <div id="collapse_<?=$data->id?>" class="collapse" role="tabpanel" aria-labelledby="heading_<?=$data->id?>" data-parent="#accordion">
                      <div class="card-body" style="color:white">
                        <ul style="display:unset;line-height:1.7!important">
                          <?php
       $this->db->select('*');
                $this->db->from('tbl_subcategory');
                $this->db->where('category_id', $data->id);
                $subdata= $this->db->get();
                $subcheck=$subdata->row();
                foreach ($subdata->result() as $sub) {
                    ?>
                          <li><a href="<?=base_url()?>Home/all_Product/<?=base64_encode($sub->id)?>/<?=base64_encode(2)?>"><?php echo $sub->subcategory ?></a></li>
                          <?
                } ?>
                        </ul>
                        <div class="mt-2 w-100 center">
                          <img src="<?=base_url().$data->image?>" style="padding:10px;width:250px;height:250px" class="img-fluid" />
                          <img src="<?=base_url().$data->image2?>" style="padding:10px;width:250px;height:250px" class="img-fluid" />
                        </div>

                      </div>
                    </div>
                  </div>
                  <?
            }?>
                  <div class="mt-2">
                    <ul style="color:white!important;list-style-type:none">
                      <?if (empty($this->session->userdata('user_data'))) {?>
                      <li>
                        Login/Resigter
                      </li>
                      <?} else {?>
                      <li>
                        Logout
                      </li>
                      <?}?>
                    </ul>
                  </div>
                </div>
              </div>
              <ul id="mobch13">
                <span onclick="openNav()">
                  <li class="media_q_change"><button style="background:none;border:none;color:#d76a46;font-size:25px; margin-left:-33vw;margin-top: -1vh;"><i class="fa fa-bars"></i></button></li>
                </span>
              </ul>
            </li>
            <li class="hide sl">
              <i class="fa fa-search btn_change_change sb" aria-hidden="true"></i>
              <!-- <input type="text" name="search" class="search_inp" /> -->
            </li>
            <?if (!empty($this->session->userdata('user_data'))) {
              $user_id = $this->session->userdata('user_id');
                          $this->db->select('*');
              $this->db->from('tbl_wishlist');
              $this->db->where('user_id',$user_id);
              $wish_count= $this->db->count_all_results();
              ?>
            <li class="hide"><a href="<?=base_url()?>Home/view_wishlist/<?=base64_encode($this->session->userdata('user_id'))?>" style="color:unset;"><span class="count">
                  <?if (!empty($wish_count)) {
                echo $wish_count;
            }else{
              echo 0;
            }?>
                </span><i class="fa fa-heart btn_change_change " aria-hidden="true"></i></a></li>
            <?}?>
            <div id="mySidebar" class="sidebar">
              <a href="javascript:void(0)" class="closebtn" id="account_open_close" onclick="closeNav2()">×</a>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
              <a href="addresssetting.html">ACCOUNT SETTINGS</a>
              <a href="My Addresses.html">ADDRESSES</a>
              <a href="Address form.html">ADDRESS Form</a>
              <a href="new my order.html">My Order list</a>
              <a href="<?=base_url()?>/User_login/user_logout">Log Out</a>
            </div>
            <div id="main" class="ch234 hide">
              <?if (!empty($this->session->userdata('user_data'))) {?>
              <i class="fa fa-user openbtn btn_change_change media_q_change2" aria-hidden="true" id="account_open_close" onclick="openNav2()"></i>
              <!-- <p style="font-size:13px;">
            <?=$this->session->userdata('user_name')?>
          </p> -->
              <?} else {?>
              <i class="fa fa-user openbtn btn_change_change media_q_change2" aria-hidden="true" id="myBtn"></i>
              <?}?>
            </div>

            <?if (empty($this->session->userdata('user_data'))) {
                $cart_data = $this->session->userdata('cart_data');
                if (!empty($cart_data)) {
                    $count = count($cart_data);
                } else {
                    $count="0";
                }
            } else {
                $user_id = $this->session->userdata('user_id');
                $this->db->select('*');
                $this->db->from('tbl_cart');
                $this->db->where('user_id', $user_id);
                $cart_data= $this->db->count_all_results();
                if (!empty($cart_data)) {
                    $count=$cart_data;
                } else {
                    $count="0";
                }
            }
              ?>
            <li class="hide"><a href="<?=base_url()?>Home/view_cart" style="color: unset;"><span class="count">
                  <?if (!empty($count)) {
                echo $count;
            }else{
              echo 0;
            }?>
                </span><i class="fa fa-shopping-bag NONE1 btn_change_change" aria-hidden="true"></i>
              </a></li>
            <?if(!empty($this->session->userdata('user_data'))){
  $user_id = $this->session->userdata('user_id');
  ?>
            <li class="media_q_change1 hide"><a href="<?=base_url()?>Home/my_orders/<?=base64_encode($user_id)?>" style="color: unset;"><i class='fa fa-truck btn_change_change' style='font-size: 19px'></i></a></li>
            <?}?>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div id="myModals1" class="modal1 close3" style="z-index:1000;">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" onclick="myFunction8()" style='margin-left:-2rem;margin-top: -1rem;'>&times;</span>
        </button>
        <div class="logosection" style="
    display: flex;
    flex-direction: column;
    /* align-items: center; */
    justify-content: center;
">
          <div class="logoimg">
            <img src="https://www.orangetree.in/pub/static/version1640069162/frontend/Digital/desktop/en_US/images/logo.png" alt="Logo" title="Orange tree">
          </div>
          <div class="badge  text-black mt-4 textres" style="    text-align: center;
    font-size: 18px;
    color: #000;
    text-transform: uppercase;
    margin-bottom: 20px;font-weight: 400;">
            SIGN UP TO CONTINUE
          </div>
          <div class="row g-3 justify-content-center" style="margin-bottom:40px;">
            <div class="col-md-4 respns1" style="padding-right: 0px;">
              <button class="btn" style="text-transform: None;
    font-size: 12px;
    width: auto;
    cursor: pointer;
    font-weight: 400;
    border: 0;
    padding: 8px 15px;
    background: #fff;"><img class="social" src="https://www.orangetree.in/pub/static/version1640069162/frontend/Digital/desktop/en_US/images/facebook.svg" alt="social"> Sign In With Facebook</button>
            </div>
            <div class="col-md-4 respns2">
              <button class="btn1" style="    text-transform: None;
    font-size: 12px;
    width: auto;
    cursor: pointer;
    font-weight: 400;
    border: 0;
    padding: 8px 15px;
    background: #fff;
  "><img class="social1" src="https://www.orangetree.in/pub/static/version1640069162/frontend/Digital/desktop/en_US/images/google.svg" alt="social"> Sign In With Google

              </button>
            </div>

          </div>

        </div>
        <form action="<?=base_url()?>User_login/user_register" method="post" enctype="multipart/form-data" style="    width: 100%;
    float: none;
    padding-right: 30px;
    position: relative;    max-width: 620px;
    width: 100%;
    padding: 40px;
    border: 0;
    margin: 0;
    border-radius: 10px;">
          <div class="badge  text-black text-wrap textres1 textmar" style="display:flex;justify-content:center;    text-align: center;
    font-size: 14px;
    margin-bottom: 15px;font-weight:unset;font-weight:400;    line-height: 2;color:rgba(0,0,0,0);">
            Creating an account has many benefits: check out faster, keep more than one address, track orders and more.
          </div>
          <div>
          </div>
          <form>
            <div class="form_method_name">
              <div class="row g-3">
                <div class="col-sm-6">
                  <input type="text" class="form-control formset" placeholder="First name" aria-label="First name" name="fname">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control formset" placeholder="Last name" aria-label="Last name" name="lname">
                </div>

              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <input type="text" class="form-control formset" placeholder="email" aria-label="Email" name="email">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control formset" placeholder="phonumber" aria-label="Phone nnuber" name="phone" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)">
                </div>

              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <input type="password" class="form-control formset" placeholder="password" aria-label=" Password" name="password">
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control formset" placeholder="confirm" aria-label="Confirm Password" name="confirm_password">
                </div>
              </div>
              <div>
                <button class="button btnres" type="submit" style="font-size: 14px;
    text-transform: uppercase;
    font-weight: 400;
    letter-spacing: 2px;">CREATE AN ACCOUNT</button>
              </div>
            </div>
            <div class="badge  text-black text-wrap textresp" style="color: #000;
    padding: 0 5px;
    text-transform: none;
    font-size: 12px;
    letter-spacing: 0;
    margin-top: 20px;
    display: flex;
    justify-content: center;" id="pop_myBtn">
              <span style="    color: #000;
    padding: 0 5px;
    text-transform: none;
    font-size: 12px;
    letter-spacing: 0;"> Already have an Account</span> <span style="    text-align: center;
    font-size: 12px;
    text-transform: capitalize;
    letter-spacing: 1px;
    color: #000;font-weight:400;">? Sign In</span>
            </div>
          </form>


        </form>
      </div>
    </div>

  </div>

  <!-- second modal -->
  <div id="myModals" class="modal  close2" style="z-index: 1000;">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="">
        <span class="close" onclick="myFunction7()" style='margin-left:-2rem;    margin-top: -1rem;'>&times;</span>

        <div class="logosection " style="
    display: flex;
    flex-direction: column;
    /* align-items: center; */
    justify-content: center;
">

          <div class="logoimg">
            <img src="https://www.orangetree.in/pub/static/version1640069162/frontend/Digital/desktop/en_US/images/logo.png" alt="Logo" title="Orange tree">
          </div>
          <div class="badge  text-black mt-4 textres" style="    text-align: center;
    font-size: 18px;
    color: #000;
    text-transform: uppercase;
    margin: 20px 0;
  font-weight: 400;">
            SIGN IN TO CONTINUE
          </div>
          <div class="row g-3 justify-content-center">
            <div class="col-md-4 respns1" style="padding-right: 0px;">
              <button class="btn" style="
   text-transform: None;
    font-size: 12px;
    width: auto;
    cursor: pointer;
    font-weight: 400;
    border: 0;
    padding: 8px 15px;
    background: #fff;
    "><img class="social" src="https://www.orangetree.in/pub/static/version1640069162/frontend/Digital/desktop/en_US/images/facebook.svg" alt="social"> Sign In With Facebook</button>
            </div>
            <div class="col-md-4 respns2">
              <button class="btn1" style="border:0px;border-radius:3px;    text-transform: None;
    font-size: 12px;
    width: auto;
    cursor: pointer;
    font-weight: 400;
    border: 0;
    padding: 8px 15px;
    background: #fff;
    "><img class="social1" src="https://www.orangetree.in/pub/static/version1640069162/frontend/Digital/desktop/en_US/images/google.svg" alt="social"> Sign In With Google

              </button>
            </div>

          </div>

        </div>
        <form action="<?=base_url()?>User_login/user_login" method="post" enctype="multipart/form-data" class="setform">

          <div class="badge  text-black text-wrap textres1 textmar" style="display:flex;justify-content:center;margin-bottom: 30px;
    font-size: 12px;
    text-align: center;
       font-weight: 400;
    font-size: 12px;">
            Sign in with your email address.
          </div>
          <div>

          </div>
          <div class="form_method_name">


            <div class="field email required">
              <div class="control" style="margin-top:13px;">
                <input placeholder="Email" name="email" type="email" class="input-text setcolumn" title="Email">
              </div>
            </div>
            <div class="field email required">
              <div class="control" style="margin-top:13px;">
                <input placeholder="Password" name="password" value="" type="password" class="setcolumn">
              </div>
            </div>

            <div class="badge  text-black text-wrap textres" style="font-size:12px;font-weight:400;font-family:'euclid light';    padding-top: 1.5rem;">
              <span>Forget Password</span>
            </div>

            <button class="button ressing" type="submit" style="border-radius:34px !important; font-size:14px;font-family: 'euclid light';">SIGN IN</button>
          </div>
          <div class="d-flex justify-content-center">
            <div class="badge  text-black text-wrap textresp" style="color: #000;
    padding: 0 5px;
    text-transform: none;
    font-size: 12px;
    letter-spacing: 0;
    margin-top: 20px;font-weight:400; " id="myBtn1">
              New Here?<span style="cursor:pointer;    color: #000;
    padding: 0 5px;
    text-transform: none;
    font-size: 12px;
    letter-spacing: 0;
    margin-top: 20px; font-weight:400;"> Sign Up</span>
            </div>
          </div>
        </form>

      </div>
    </div>


    <div>

    </div>

    </form>
  </div>


  <!-- login script -->
  <script>
    // Get the modal
    var modal1 = document.getElementById("myModals1");
    var modal = document.getElementById("myModals");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn1");

    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close1")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {

      modal1.style.display = "block";
      modal.style.display = "none";
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
      modal1.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal1) {
        modal1.style.display = "none";
      }
    }
  </script>

  <!-- create account sctript -->

  <script>
    //--------sign model------

    // Get the modal
    var modal = document.getElementById("myModals");
    var modal1 = document.getElementById("myModals1");

    // Get the button that opens the modal
    var btn1 = document.getElementById("myBtn");
    var btn2 = document.getElementById("pop_myBtn");

    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn1.onclick = function() {

      modal.style.display = "block";
      modal1.style.display = "none";

    }
    btn2.onclick = function() {

      modal.style.display = "block";
      modal1.style.display = "none";

    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <script type="text/javascript">
    function myFunction7() {
      var x = document.querySelector('.close2');
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
  <script type="text/javascript">
    function myFunction8() {
      var x = document.querySelector('.close3');
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>

  <script>
    function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }
  </script>
