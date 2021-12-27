<style>
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css */
*,::after,::before{box-sizing:border-box;}
section{display:block;}
h3{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;}
a:hover{color:#0056b3;text-decoration:underline;}
label{display:inline-block;margin-bottom:.5rem;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button,input,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,input{overflow:visible;}
button,select{text-transform:none;}
select{word-wrap:normal;}
[type=button],[type=submit],button{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0;}
textarea{overflow:auto;resize:vertical;}
h3{margin-bottom:.5rem;font-weight:500;line-height:1.2;}
h3{font-size:1.75rem;}
.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-md-12,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-9,.col-sm-12,.col-sm-4,.col-sm-8{position:relative;width:100%;padding-right:15px;padding-left:15px;}
@media (min-width:576px){
.col-sm-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
.col-sm-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
@media (min-width:768px){
.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;}
.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
.col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%;}
.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
.col-md-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%;}
.col-md-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%;}
.col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
.form-control{display:block;width:100%;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.form-control{transition:none;}
}
.form-control::-ms-expand{background-color:transparent;border:0;}
.form-control:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057;}
.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1;}
.form-control::-moz-placeholder{color:#6c757d;opacity:1;}
.form-control:-ms-input-placeholder{color:#6c757d;opacity:1;}
.form-control::-ms-input-placeholder{color:#6c757d;opacity:1;}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1;}
textarea.form-control{height:auto;}
.form-group{margin-bottom:1rem;}
.accordion{overflow-anchor:none;}
.mt-5{margin-top:3rem!important;}
.mb-5{margin-bottom:3rem!important;}
@media (min-width:992px){
.pr-lg-5{padding-right:3rem!important;}
.pl-lg-5{padding-left:3rem!important;}
}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
h3,p{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
/*! CSS Used from: http://localhost/laravel-cementWala/public//frontend/assets/css/style.css */
input,button{outline:0!important;}
a{text-decoration:none;color:inherit;}
a:hover{text-decoration:none;color:inherit;}
span{font-size:14px;}
@media (min-width: 300px) and (max-width: 900px){
ul#wizardStatus{display:block!important;}
}
.cart_page{width:100%;}
.cart_page p{font-size:14px;color:#666;font-weight:500;}
.cart_page .crt_pdge{background:#fff;padding:0;text-align:center;border:1px solid #c2d1ce;}
.discnt h3{color:#666;font-size:15px;font-weight:500;padding-bottom:5px;}
.discnt p{color:#666;font-size:13px;font-weight:400;margin:0 0 10px 0;}
.discnt input{float:left;width:73%;outline:0;height:28px;border:1px solid #c2d1ce;padding-left:7px;}
.discnt button{background:#e98927;color:#fff;border:none;font-size:13px;outline:0;padding:5px 15px 5px 15px;height:28px;}
.discnt{background:#fff;padding:15px 8px 15px 10px;margin:0 0 15px 0;float:right;border:1px solid #c2d1ce;width:100%;}
.subtotal ul li{list-style:none;font-size:14px;color:#666;}
.cost ul li{padding:0 0 10px 0;}
.price ul li{padding:0 0 10px 0;}
.subtotal{border-bottom:1px solid #c2d1ce;float:none;display:table;width:100%;}
.cost ul,.price ul{text-align:right;}
.tprice p{font-size:13px;color:#666;text-align:right;font-weight:600;}
.tprice .cst{color:#e98927;}
.tprice p{padding:9px 0 0 0;}
.check_button ul li{list-style:none;display:inline-block;margin:23px 20px 23px 20px;}
.check_button ul li a:focus{outline:0;}
.check_button ul li:nth-child(1) a{background:#464f54;color:#fff;font-size:17px;padding:12px 20px 12px 20px;}
.check_button{display:table;width:100%;padding:0 13px 0 13px;-webkit-box-shadow:1px 1px 5px 3px #ccc;-moz-box-shadow:1px 1px 5px 3px #ccc;box-shadow:1px 1px 5px 3px #ccc;}
.check_button ul li{float:left;}
.check_button ul li:nth-child(2){float:right;}
.discnt .col-md-6{padding:0 10px 0 10px;}
.tsave p{color:#34a853!important;padding:0;}
.bd_seprate{width:100%;padding:0;}
.cart_page .col-md-3{position:relative;top:-44px;}
.coupan_msg{font-size:14px;position:relative;top:5px;color:#34a853;font-weight:500;}
.aerobtn{position:relative;margin:0;text-decoration:none;}
.next12::after,.prev12::after{content:'';position:absolute;top:0;width:0;height:0;}
.next12::after,.prev12::after{border-style:solid;}
.next12::after{right:-44px;border-width:22px;border-color:transparent transparent transparent #e98927;}
.aerobtn:focus{text-decoration:none;}
.prev12::after{left:-44px;border-color:transparent #464f54 transparent transparent;border-width:22px;}
ul#wizardStatus{list-style:none;border:1px solid #c2d1ce;border-bottom:none;background:#fff;display:flex;}
ul#wizardStatus li{background-color:#fff;color:#3d4c4f;display:inline-block;margin:0;font-size:14px;line-height:30px;padding:6px 26px 6px 59px;position:relative;width:24.66666666%;}
ul#wizardStatus li:after,ul#wizardStatus li:before{background-color:#fff;content:"";display:block;position:absolute;}
ul#wizardStatus li:after{-webkit-border-radius:3px;border-radius:3px;border-right:3px solid #c2d1ce;border-top:3px solid #c2d1ce;height:32px;right:-18px;top:5px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);width:32px;z-index:5;}
ul#wizardStatus li:before{height:30px;right:3px;width:20px;z-index:6;}
ul#wizardStatus li:last-child:after,ul#wizardStatus li:last-child:before{display:none;}
ul#wizardStatus li.current{background-color:#c43600;color:#fff;}
ul#wizardStatus li.current:after,ul#wizardStatus li.current:before{background-color:#c43600;}
@media (max-width:1280px){
ul#wizardStatus li{width:23.666667%;}
.discnt{background:#fff;padding:15px 0 15px 6px;}
}
@media (max-width:1200px){
.discnt input{width:62%;}
.bd_seprate{padding:0;}
.check_button ul li:nth-child(2){float:right;}
ul#wizardStatus li{font-size:13px;padding:6px 14px 6px 33px;}
}
@media (max-width:991px){
.cart_page .col-md-9{text-align:left;}
.cart_page .col-md-9{text-align:left;background:0 0;float:none;padding:0;}
.discnt{margin:10px 0 15px 0;}
.cart_page .col-md-3{top:0;}
.discnt{float:left;}
.subtotal{float:none;display:table;}
.cost ul,.price ul{text-align:left;}
.tprice p{text-align:left;}
.discnt:nth-child(2){float:right;}
ul#wizardStatus li{width:49%;overflow:hidden;padding:6px 6px 6px 6px;}
ul#wizardStatus{background:0 0;}
ul#wizardStatus li:after{-webkit-border-radius:3px;border-radius:3px;border-right:none;border-top:none;}
ul#wizardStatus li:after,ul#wizardStatus li:before{background-color:#fff!important;}
ul#wizardStatus li.current:before{display:none;}
}
@media (max-width:913px){
.discnt:nth-child(2){float:left;}
}
@media (max-width:736px){
.check_button ul li:nth-child(2){float:left;text-align:left;}
.check_button ul li:nth-child(1){margin:23px 20px 10px 20px;}
}
@media (max-width:600px){
.check_button ul li{float:left;display:block;}
.check_button ul li:nth-child(2){float:left;}
.check_button ul li{margin:20px 20px 20px 20px;}
.subtotal{float:left;display:block;width:100%;}
.cart_page .col-md-3{top:0;padding:0;}
.cart_page{overflow-x:hidden;}
.bd_seprate{width:1000px!important;}
ul#wizardStatus{width:622px!important;}
.check_button{width:1000px!important;}
}
a,button{cursor:pointer;}
.discnt{background:#fff;padding:15px 8px 15px 10px;margin:0 0 15px 0;float:right;border:1px solid #c2d1ce;width:100%;}
@media only screen and (min-device-width:320px) and (max-device-width:767px){
.discnt{background:#fff;padding:15px 2px 12px 6px;margin:0;float:right;border:1px solid #c2d1ce;width:100%;border-bottom:0 solid #ddd;}
}
a{background:0 0;}
a:active,a:hover{outline:0;}
button,input{margin:0;font:inherit;color:inherit;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0;}
input{line-height:normal;}
@media print{
*{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a:active,a:hover{outline:0;}
h3,p{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
.cart h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
.cart h3{margin-top:10px;margin-bottom:10px;}
.cart h3{font-size:16px;}
.cart p{margin:10px 0 10px;}
.cart ul{margin-top:0;margin-bottom:10px;}
.cart .col-md-3,.cart .col-md-4,.cart .col-md-6,.cart .col-md-9,.cart .col-xs-6{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
.cart .col-xs-6{float:left;}
.cart .col-xs-6{width:50%;}
@media (min-width:992px){
.cart .col-md-3,.cart .col-md-4,.cart .col-md-6,.cart .col-md-9{float:left;}
.cart .col-md-9{width:75%;}
.cart .col-md-6{width:50%;}
.cart .col-md-4{width:33.33333333%;}
.cart .col-md-3{width:25%;}
}
.cart ul{margin:0;padding:0;}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
@media all{
.cart ul li{font-size:14px;}
.cart label,.cart ul{margin:0;padding:0;}
.cart input[type=checkbox]{display:none;}
.cart .selecta{cursor:pointer;z-index:9;}
.radio{padding-left:20px;outline:0;}
.radio label{display:inline-block;position:relative;padding-left:5px;font-size:14px;}
.radio label::before{content:"";display:inline-block;position:absolute;width:17px;height:17px;left:0;margin-left:-20px;border:1px solid #ccc;border-radius:50%;background-color:#fff;-webkit-transition:border .15s ease-in-out;-o-transition:border .15s ease-in-out;transition:border .15s ease-in-out;top:2px;}
.radio label::after{display:inline-block;position:absolute;content:" ";width:11px;height:11px;left:3px;top:5px;margin-left:-20px;border-radius:50%;background-color:#555;-webkit-transform:scale(0, 0);-ms-transform:scale(0, 0);-o-transform:scale(0, 0);transform:scale(0, 0);-webkit-transition:-webkit-transform .1s cubic-bezier(.8, -.33, .2, 1.33);-moz-transition:-moz-transform .1s cubic-bezier(.8, -.33, .2, 1.33);-o-transition:-o-transform .1s cubic-bezier(.8, -.33, .2, 1.33);transition:transform .1s cubic-bezier(.8, -.33, .2, 1.33);}
.radio input[type=radio]{opacity:0;}
.radio input[type=radio]:focus+label::before{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.radio input[type=radio]:checked+label::after{-webkit-transform:scale(1, 1);-ms-transform:scale(1, 1);-o-transform:scale(1, 1);transform:scale(1, 1);}
.radio input[type=radio]:disabled+label{opacity:.65;}
.radio input[type=radio]:disabled+label::before{cursor:not-allowed;}
.radio-primary input[type=radio]+label::after{background-color:#428bca;}
.radio-primary input[type=radio]:checked+label::before{border-color:#428bca;}
.radio-primary input[type=radio]:checked+label::after{background-color:#428bca;}
.panel-body .input_vg3{border-radius:0;box-shadow:none;border:1px solid #c2d1ce;height:118px!important;color:#666;font-style:italic;}
.bd_seprate{width:100%;padding:0;}
.panel-body label{color:#666;font-size:15px;font-weight:400;padding:0 0 5px 0;}
.panel-body form{text-align:left;}
.panel-body h3{font-size:21px;color:#666;font-weight:400;text-align:left;border-bottom:1px solid #c2d1ce;padding:0 0 6px 0;margin:10px 0 10px 0;}
.panel-body .input_vg{height:38px;border-radius:0;box-shadow:none;border:1px solid #c2d1ce;color:#666;}
.checkbox label:after{content:'';display:table;clear:both;}
.checkbox .cr{position:relative;display:inline-block;border:1px solid #c2d1ce;width:1.3em;height:1.3em;float:left;margin-right:.5em;}
.checkbox .cr .cr-icon{position:absolute;font-size:.8em;line-height:0;top:50%;left:20%;}
.checkbox label input[type=checkbox]{display:none;}
.checkbox label input[type=checkbox]+.cr>.cr-icon{transform:scale(3) rotateZ(-20deg);opacity:0;transition:all .3s ease-in;}
.checkbox label input[type=checkbox]:checked+.cr>.cr-icon{transform:scale(1) rotateZ(0);opacity:1;}
.checkbox label input[type=checkbox]:disabled{opacity:.5;}
.checkbox{text-align:left;}
@media (max-width:1200px){
.bd_seprate{padding:0;}
}
.checkbox label{padding-left:0;}
.checkbox label{padding-left:0;}
.cart input,.cart textarea{margin:0;font:inherit;color:inherit;}
.cart input::-moz-focus-inner{padding:0;border:0;}
.cart input{line-height:normal;}
.cart input[type=checkbox],.cart input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0;}
.cart textarea{overflow:auto;}
@media print{
*{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
.cart h3{orphans:3;widows:3;}
.cart h3{page-break-after:avoid;}
}
.glyphicon{position:relative;top:1px;display:inline-block;font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.glyphicon-ok:before{content:"\e013";}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.col-md-12,.col-md-4,.col-sm-12,.col-sm-4,.col-sm-8{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:768px){
.col-sm-12,.col-sm-4,.col-sm-8{float:left;}
.col-sm-12{width:100%;}
.col-sm-8{width:66.66666667%;}
.col-sm-4{width:33.33333333%;}
}
@media (min-width:992px){
.col-md-12,.col-md-4{float:left;}
.col-md-12{width:100%;}
.col-md-4{width:33.33333333%;}
}
.cart label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700;}
.cart input[type=checkbox],.cart input[type=radio]{margin:4px 0 0;line-height:normal;}
.cart input[type=checkbox]:focus,.cart input[type=radio]:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.cart .form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);-webkit-transition:border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s;}
.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);}
.form-control::-moz-placeholder{color:#777;opacity:1;}
.form-control:-ms-input-placeholder{color:#777;}
.form-control::-webkit-input-placeholder{color:#777;}
textarea.form-control{height:auto;}
.form-group{margin-bottom:15px;}
.checkbox,.radio{position:relative;display:block;min-height:20px;margin-top:10px;margin-bottom:10px;}
.checkbox label,.radio label{padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer;}
.checkbox input[type=checkbox],.radio input[type=radio]{position:absolute;margin-left:-20px;}
.panel-body{padding:15px;}
.panel-body:after,.panel-body:before{display:table;content:" ";}
.panel-body:after{clear:both;}
}
/*! CSS Used from: https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-check:before{content:"\f00c";}
/*! CSS Used from: Embedded */
a,a:hover,a:active{text-decoration:none;color:inherit;}
/*! CSS Used from: Embedded */
button.chek_btn{background:#e98927;color:#fff;border:none;font-size:17px;padding:12px 20px 12px 20px;background-position:10px 14px;}
/*! CSS Used fontfaces */
@font-face{font-family:'FontAwesome';src:url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?v=4.7.0');src:url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.eot#iefix&v=4.7.0') format('embedded-opentype'),url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal;}

.setposition{
  padding-top: 7rem;
}
input{
  overflow: hidden;
}
@media (max-width:360px) {
  .cart .form-control{
    width: 26%;
  }
  .check_button{
     width: 19rem !important;
  }
}
</style>

<section class="mb-5 cart">
<div class="container-fluid pl-lg-5 pr-lg-5 setposition">
<div class="row accordion" id="accordionExample">
<div class="cart_page">
<div class="col-md-9 cart_display  ">
<ul id="wizardStatus">
<li class=" current" type="button">Contact Details</li>
<li></li>
</ul>
</div>
<div class="col-md-9">
<div class="crt_pdge cart_display collapse show " id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="bd_seprate">
<div class="panel-body">
<div class="col-md-12 col-sm-12">
   <h3>Delivery Address</h3>
</div>
<form action="http://localhost/laravel-cementWala/public/place_order" method="post" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="0n5czPrFHvV72c01MakL1QuYOHLLyXIRyDNm8hhw">      <div class="">
      <div class="form-group col-md-4 col-sm-4">
         <label for="name">Name <span style="color:red;">*</span></label><!----><input class="form-control input_vg ng-untouched ng-pristine ng-valid" id="name" name="name" placeholder="" type="text" value="Niteshss" required="" onkeyup="saveValue(this);">
      </div>
      <div class="form-group col-md-4 col-sm-4">
         <label for="phone">Mobile No. <span style="color:red;">*</span></label><!----><!----><input class="form-control input_vg ng-untouched ng-pristine ng-valid" id="phone" name="phone" placeholder="" type="text" value="8387039990" required="" minlengh="10" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" onkeyup="saveValue(this);">
      </div>
      <div class="form-group col-md-4 col-sm-4">
         <label for="gst">Postal Code </label><input class="form-control input_vg ng-untouched ng-pristine ng-valid" id="gst" name="gst" placeholder="" type="text" onkeyup="saveValue(this);" value="">
      </div>
   </div>
   <div class="">
      <div class="form-group col-md-5 col-sm-8">
         <label for="address">Plot Number <span style="color:red;">*</span></label><!---->
         <textarea class="form-control input_vg3 ng-untouched ng-pristine ng-valid" id="plot_no" name="plot_no" onkeyup="saveValue(this);" placeholder="" rows="3" required="">104</textarea>
      </div>
      <div class="form-group col-md-7 col-sm-8">
         <label for="address">Street Name <span style="color:red;">*</span></label>
         <textarea class="form-control input_vg3 ng-untouched ng-pristine ng-valid" id="address" name="address" onkeyup="saveValue(this);" placeholder="" rows="3" required="">scscsc</textarea>
      </div>
      <div class="form-group col-md-4 col-sm-4">
         <label for="state">State <span style="color:red;">*</span></label><!---->
         <singleselect>
            <div class="">
               <div class="">
                 <select class="form-control" aria-label="Default select example" name="state" id="" required="">
                   <option selected="" value="29">Rajasthan [RJ]</option>
<!-- <option value="1"
>
Andaman &amp; Nicobar [AN]</option>
<option value="2"
>
Andhra Pradesh [AP]</option>
<option value="3"
>
Arunachal Pradesh [AR]</option>
<option value="4"
>
Assam [AS]</option>
<option value="5"
>
Bihar [BH]</option>
<option value="6"
>
Chandigarh [CH]</option>
<option value="7"
>
Chhattisgarh [CG]</option>
<option value="8"
>
Dadra &amp; Nagar Haveli [DN]</option>
<option value="9"
>
Daman &amp; Diu [DD]</option>
<option value="10"
>
Delhi [DL]</option>
<option value="11"
>
Goa [GO]</option>
<option value="12"
>
Gujarat [GU]</option>
<option value="13"
>
Haryana [HR]</option>
<option value="14"
>
Himachal Pradesh [HP]</option>
<option value="15"
>
Jammu &amp; Kashmir [JK]</option>
<option value="16"
>
Jharkhand [JH]</option>
<option value="17"
>
Karnataka [KR]</option>
<option value="18"
>
Kerala [KL]</option>
<option value="19"
>
Lakshadweep [LD]</option>
<option value="20"
>
Madhya Pradesh [MP]</option>
<option value="21"
>
Maharashtra [MH]</option>
<option value="22"
>
Manipur [MN]</option>
<option value="23"
>
Meghalaya [ML]</option>
<option value="24"
>
Mizoram [MM]</option>
<option value="25"
>
Nagaland [NL]</option>
<option value="26"
>
Orissa [OR]</option>
<option value="27"
>
Pondicherry [PC]</option>
<option value="28"
>
Punjab [PJ]</option>
<option value="29"
selected>
Rajasthan [RJ]</option>
<option value="30"
>
Sikkim [SK]</option>
<option value="31"
>
Tamil Nadu [TN]</option>
<option value="32"
>
Tripura [TR]</option>
<option value="33"
>
Uttar Pradesh [UP]</option>
<option value="34"
>
Uttaranchal [UT]</option>
<option value="35"
>
West Bengal [WB]</option>
 -->
</select>
                  <!-- <input autocomplete="off" class="form-control input_vg selecta ng-untouched ng-pristine ng-valid" id="state" name="state" placeholder="" type="text" required
                  value="29"> -->
               </div>
            </div>
         </singleselect>
      </div>
      <div class="form-group col-md-4 col-sm-4">
         <label for="city">City <span style="color:red;">*</span></label><!---->

            <div class="">
               <div class="">
                  <!-- <input autocomplete="off" class="form-control input_vg selecta ng-untouched ng-pristine ng-valid" id="city" name="city" placeholder="" type="text"  required onkeyup='saveValue(this);'
                  value="Jaipur"> -->

                  <input type="text" value="Jaipur" class="form-control" id="" name="city" placeholder="" autocomplete="off" readonly="">
               </div>
            </div>
      </div>

      <div class="form-group col-md-4 col-sm-4 ">
         <label for="pincode">Postal Code <span style="color:red;">*</span></label><!---->
         <singleselectpincode>
            <div class="">
               <div class="">
                  <input autocomplete="off" class="form-control input_vg selecta ng-untouched ng-pristine ng-valid" id="pincode" name="pincode" placeholder="" type="text" required="" maxlength="6" onkeyup="saveValue(this);" value="302020"><!---->
               </div>
            </div>
         </singleselectpincode>
      </div>
      <div class="form-group col-md-4 col-sm-4 ">
         <label for="vendor_code">Vendor Code </label><!---->
         <singleselectpincode>
            <div class="">
               <div class="">
                  <input autocomplete="off" class="form-control input_vg selecta ng-untouched ng-pristine ng-valid" id="vendor_code" name="vendor_code" placeholder="" type="text" value="" onkeyup="saveValue(this);"><!---->
               </div>
            </div>
         </singleselectpincode>
      </div>
   </div>
      <!-- <div class="">
      <div class="form-group col-md-8 col-sm-8"><label for="country">Order Notes </label><textarea class="form-control input_vg3 ng-untouched ng-pristine ng-valid" id="delivery_notes" name="delivery_notes" placeholder="Optional Instructions for Order, delivery contact person..." rows="3"></textarea></div>
      <div class="form-group col-md-4 col-sm-4"><label for="sitepersonname">Site Person's Name</label><input class="form-control input_vg ng-untouched ng-pristine ng-valid" id="sitepersonname" name="site_person_name" placeholder="" type="text"></div>
      <div class="form-group col-md-4 col-sm-4"><label for="email">Site Person's Mobile No</label><input class="form-control input_vg ng-untouched ng-pristine ng-valid" id="email" name="phone1" placeholder="" type="text"></div>
   </div> -->

<!-- <div class="col-md-12 col-sm-12">
   <h3>Billing Address</h3>
</div> -->
<!-- <div class="col-md-12 col-sm-12">
   <div class="checkbox"><label><input checked="true" id="check" type="checkbox" value=""><span class="cr">
   	<i class="cr-icon glyphicon glyphicon-ok fa fa-check"></i></span> Billing address is same as shipping address </label></div>
</div> -->
<!----><!----><!---->
<!-- <div class="col-md-12 col-sm-12">
   <div class="checkbox"><label><input id="gst" type="checkbox" value=""><span class="cr"><i class="cr-icon glyphicon glyphicon-ok fa fa-check"></i></span> Do you have GST Number? </label></div>
</div> -->
<!---->
      <input type="hidden" name="payment_type" id="payment_type1" value="2">
</form></div>
</div>
<div class="check_button">
   <ul>
      <li>
      	<a class="prev12 aerobtn" href="http://localhost/laravel-cementWala/public/"> Continue Shopping</a>
      </li>
      <!----><!---->



      <li><button type="submit" id="subform" class="next12 aerobtn chek_btn">Place Order</button></li>

   </ul>
</div>

</div>
</div>
<div class="col-md-3">
<div class="discnt">
<div class="subtotal">
   <div class="col-md-6 col-xs-6 cost">
      <ul>
         <li>Product Total</li>
         <li>Shipping</li>
      <?if(!empty($order_data->promocode_id)){?><li>Promocode Discount</li><?}?>
         <!---->
         <!-- <li  class="gst_cursor"><i  class="fa fa-angle-down"></i> Total GST</li>
         <li  class="br_slide">GST on Products</li>
         <li  class="br_slide">GST on Shipping</li> -->
         <!---->
      </ul>
   </div>
   <div class="col-md-6 col-xs-6 price">
      <ul>

         <li>Rs.<?=$order_data->total_amount?></li>
         <li>+Rs.<?=$order_data->delivery_charge?></li>
         <?if(!empty($order_data->promocode_id)){?><li>-Rs.<?=$order_data->delivery_charge?></li><?}?>
      </ul>
   </div>
</div>
<div class="col-md-6 col-xs-6 tprice">
   <p>Sub Total</p>
</div>
<div class="col-md-6 col-xs-6 tprice">
   <p class="cst">Rs.
     <?if(empty($order_data->promocode_id)){
   echo $order_data->final_amount;
 }else{
   echo $order_data->final_amount - $order_data->p_discount;
 }
   ?></p>
</div>
<div class="">
   <!----><!---->
</div>
</div>
<div class="discnt">
<h3>Apply Coupon Code</h3>

<div class="fields">
  <?
  if(!empty($order_data->promocode_id)){
              $this->db->select('*');
  $this->db->from('tbl_coupancode');
  $this->db->where('id',$order_data->promocode_id);
  $pro_data= $this->db->get()->row();
  ?>
  <div style="color:blue;"><?=$pro_data->name;?>
  <a href="<?=base_url()?>promocode_remove" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></a></div>
<?}?>
    <br>
     <form action="<?=base_url()?>/Order/apply_promocode" method="post" enctype="multipart/form-data">
        <input type="hidden" name="order_id" value="<?=base64_encode($order_data->id)?>">
        <input name="promocode" type="text" id="coupen" value="" class="ng-untouched ng-pristine ng-valid" required="">
      <button type="submit">Apply</button>
   </form>
   <span class="coupan_msg"></span>
</div>
</div>
<div class="discnt">
<h3>Mode of Payment</h3>
<div class="fields">
<div class="radio radio-primary"><input id="radio5" name="payment_type" class="pay12" type="radio" value="1"><label for="radio5">Cash on Delivery </label></div>
<div class="radio radio-primary"><input checked="" id="radio6" name="payment_type" type="radio" class="pay12" value="2"><label for="radio6">Online Payment </label></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
