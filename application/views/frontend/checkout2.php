<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<style media="screen">
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css */
*,::after,::before{box-sizing:border-box;}
h3,h4{margin-top:0;margin-bottom:.5rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;}
a:hover{color:#0056b3;text-decoration:underline;}
label{display:inline-block;margin-bottom:.5rem;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button,input,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,input{overflow:visible;}
button,select{text-transform:none;}
select{word-wrap:normal;}
[type=submit],button{-webkit-appearance:button;}
[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
textarea{overflow:auto;resize:vertical;}
h3,h4{margin-bottom:.5rem;font-weight:500;line-height:1.2;}
h3{font-size:1.75rem;}
h4{font-size:1.5rem;}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-lg-12,.col-lg-6,.col-md-12,.col-md-6,.col-sm-12{position:relative;width:100%;padding-right:15px;padding-left:15px;}
@media (min-width:576px){
.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
@media (min-width:768px){
.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
.col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
@media (min-width:992px){
.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
.col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
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
.form-control:disabled{background-color:#e9ecef;opacity:1;}
textarea.form-control{height:auto;}
.d-flex{display:-ms-flexbox!important;display:flex!important;}
.mr-4{margin-right:1.5rem!important;}
.pb-3{padding-bottom:1rem!important;}
.pt-5{padding-top:3rem!important;}
.pb-5{padding-bottom:3rem!important;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css */
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button,input,select,textarea{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
textarea{overflow:auto;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
h3,h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h3{margin-top:20px;margin-bottom:10px;}
h4{margin-top:10px;margin-bottom:10px;}
h3{font-size:24px;}
h4{font-size:18px;}
.row{margin-right:-15px;margin-left:-15px;}
.col-lg-12,.col-lg-6,.col-md-12,.col-md-6,.col-sm-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:768px){
.col-sm-12{float:left;}
.col-sm-12{width:100%;}
}
@media (min-width:992px){
.col-md-12,.col-md-6{float:left;}
.col-md-12{width:100%;}
.col-md-6{width:50%;}
}
@media (min-width:1200px){
.col-lg-12,.col-lg-6{float:left;}
.col-lg-12{width:100%;}
.col-lg-6{width:50%;}
}
label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700;}
.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;}
.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);}
.form-control::-moz-placeholder{color:#999;opacity:1;}
.form-control:-ms-input-placeholder{color:#999;}
.form-control::-webkit-input-placeholder{color:#999;}
.form-control::-ms-expand{background-color:transparent;border:0;}
textarea.form-control{height:auto;}
.row:after,.row:before{display:table;content:" ";}
.row:after{clear:both;}
/*! CSS Used from: https://www.fineoutput.co.in/jewellery2/public/frontend/assets/css/style.css */
a{font-size:13px!important;}
@media print{
*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href)")";}
}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
button,input{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
@media print{
*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href)")";}
}
*,:after,:before{box-sizing:border-box;}
:after{box-sizing:border-box;}
:after,:before{box-sizing:border-box;}
select{-webkit-appearance:none;}
select{text-transform:none;}
.row{padding-left:20px;margin-right:-5px;padding-top:10px;display:-ms-flexbox;display:flex;-ms-flex:0 1 auto;flex:0 1 auto;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;}
input[type=text],textarea{height:50px;padding:0 20px;width:50px;border-radius:0;}
input[type=text],textarea{border:1px solid #c3c6cb;letter-spacing:.5px;line-height:20px;height:100px;padding:0 20px;width:100%;border-radius:0;background-clip:padding-box;font-weight:300;font-size:15px;}
textarea{overflow:auto;}
textarea{color:inherit;font:inherit;margin-top:0;}
a{color:#000;background:0 0;overflow:hidden;text-decoration:none;}
a:hover{color:#1f0b00!important;}
input[type=text]{border:1px solid #E6E7E8;letter-spacing:1px;height:50px;padding:0 20px;border-radius:0;background-clip:padding-box;font-weight:400;}
input[type=text]::-moz-placeholder{color:#7b7b7b;opacity:1;}
input[type=text]:-ms-input-placeholder{color:#7b7b7b;}
input[type=text]::-webkit-input-placeholder{color:#7b7b7b;}
@media (max-width: 991px){
input[type=text]{font-size:14px;}
}
@media print{
a[href]:after{content:"";}
}
@media print{
*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href)")";}
}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href)")";}
}
*,:after,:before{box-sizing:border-box;}
a{color:#000;background:0 0;overflow:hidden;text-decoration:none;}
a:hover{color:#1f0b00!important;}
@media print{
a[href]:after{content:"";}
}
@media print{
*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href)")";}
}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href)")";}
}
*,:after,:before{box-sizing:border-box;}
a{color:#000;background:0 0;overflow:hidden;text-decoration:none;}
a:hover{color:#1f0b00!important;}
@media print{
a[href]:after{content:"";}
}
@media print{
*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href)")";}
h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href)")";}
h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h3{margin-top:20px;margin-bottom:10px;}
h3{font-size:24px;}
*,:after,:before{box-sizing:border-box;}
a{color:#000;background:0 0;overflow:hidden;text-decoration:none;}
a:hover{color:#1f0b00!important;}
@media print{
a[href]:after{content:"";}
}
a{text-decoration:none;color:#929292;}
a{color:inherit;text-decoration:none!important;}
@media (min-width:312px) and (max-width:900px){
.row{margin:0;width:100%;}
}
::-moz-selection{background:#ee1f71;color:#fff;text-shadow:none;}
::-moz-selection{background:#ee1f71;color:#fff;text-shadow:none;}
::selection{background:#ee1f71;color:#fff;text-shadow:none;}
@media all{
::selection{background:rgba(78,84,200,.15);}
::-moz-selection{background:rgba(78,84,200,.15);}
::-webkit-scrollbar{width:10px;}
::-webkit-scrollbar-track{box-shadow:inset 0 0 5px grey;border-radius:10px;}
::-webkit-scrollbar-thumb{background:#1f0b00;border-radius:10px;}
::-webkit-scrollbar-thumb:hover{background:#b30000;}
@media screen, print{
html *,html :after,html :before{-webkit-box-sizing:inherit;box-sizing:inherit;}
h3{line-height:35px;}
@media print{
*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
@media print{
a[href]:after{content:"";}
}
}
}
/*! CSS Used from: Embedded */
.add_address_form label{display:block;margin-top:1.05rem;}
.add_address_form input,select{width:100%;height:40px;border:1px solid lightgrey;}
.save_btn{border:none;background:#210113;color:#fff;padding:10px 15px;}
.back_btn{border:none;background:grey;color:#fff;padding:10px 15px;}
/*! CSS Used from: Embedded */
a{font-size:14.5px;}
  .space {
    padding-top: 7rem;
  }

  *,
  ::after,
  ::before {
    box-sizing: border-box;
  }

  p {
    margin-top: 0;
    margin-bottom: 1rem;
  }

  b {
    font-weight: bolder;
  }

  img {
    vertical-align: middle;
    border-style: none;
  }

  input {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
  }

  input {
    overflow: visible;
  }

  @media print {

    *,
    ::after,
    ::before {
      text-shadow: none !important;
      box-shadow: none !important;
    }

    img {
      page-break-inside: avoid;
    }

    p {
      orphans: 3;
      widows: 3;
    }
  }

  /*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css */
  b {
    font-weight: 700;
  }

  img {
    border: 0;
  }

  input {
    color: inherit;
    font: inherit;
    margin: 0;
  }

  input::-moz-focus-inner {
    border: 0;
    padding: 0;
  }

  input {
    line-height: normal;
  }

  @media print {

    *,
    :after,
    :before {
      color: #000 !important;
      text-shadow: none !important;
      background: 0 0 !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
    }

    img {
      page-break-inside: avoid;
    }

    img {
      max-width: 100% !important;
    }

    p {
      orphans: 3;
      widows: 3;
    }

    .label {
      border: 1px solid #000;
    }
  }

  * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  :after,
  :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  input {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
  }

  img {
    vertical-align: middle;
  }

  .thumbnail>img {
    display: block;
    max-width: 100%;
    height: auto;
  }

  p {
    margin: 0 0 10px;
  }

  .label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
  }

  .label:empty {
    display: none;
  }

  .thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
  }

  .thumbnail>img {
    margin-right: auto;
    margin-left: auto;
  }

  /*! CSS Used from: https://www.fineoutput.co.in/jewellery2/public/frontend/assets/css/style.css */
  p {
    font-size: 15px !important;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    img {
      page-break-inside: avoid;
    }

    img {
      max-width: 100% !important;
    }

    p {
      orphans: 3;
      widows: 3;
    }

    .label {
      border: 1px solid #000;
    }
  }

  img {
    border: 0;
  }

  input {
    color: inherit;
    font: inherit;
    margin: 0;
  }

  input::-moz-focus-inner {
    border: 0;
    padding: 0;
  }

  input {
    line-height: normal;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    img {
      page-break-inside: avoid;
    }

    img {
      max-width: 100% !important;
    }

    p {
      orphans: 3;
      widows: 3;
    }

    .label {
      border: 1px solid #000;
    }
  }

  p {
    margin: 0 0 10px;
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
  }

  :after {
    box-sizing: border-box;
  }

  :after,
  :before {
    box-sizing: border-box;
  }

  @media print {
    .label {
      border: 0;
    }
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    img {
      page-break-inside: avoid;
    }

    img {
      max-width: 100% !important;
    }

    p {
      orphans: 3;
      widows: 3;
    }
  }

  img {
    border: 0;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    img {
      page-break-inside: avoid;
    }

    img {
      max-width: 100% !important;
    }

    p {
      orphans: 3;
      widows: 3;
    }
  }

  p {
    margin: 0 0 10px;
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    img {
      page-break-inside: avoid;
    }

    img {
      max-width: 100% !important;
    }
  }

  img {
    border: 0;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    img {
      page-break-inside: avoid;
    }

    img {
      max-width: 100% !important;
    }
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    img {
      page-break-inside: avoid;
    }

    img {
      max-width: 100% !important;
    }

    p {
      orphans: 3;
      widows: 3;
    }
  }

  img {
    border: 0;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    img {
      page-break-inside: avoid;
    }

    img {
      max-width: 100% !important;
    }

    p {
      orphans: 3;
      widows: 3;
    }
  }

  p {
    margin: 0 0 10px;
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
  }

  span,
  p {
    text-align: inherit;
  }

  ::-moz-selection {
    background: #ee1f71;
    color: #fff;
    text-shadow: none;
  }

  ::-moz-selection {
    background: #ee1f71;
    color: #fff;
    text-shadow: none;
  }

  ::selection {
    background: #ee1f71;
    color: #fff;
    text-shadow: none;
  }

  @media all {
    ::selection {
      background: rgba(78, 84, 200, .15);
    }

    ::-moz-selection {
      background: rgba(78, 84, 200, .15);
    }

    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background: #1f0b00;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #b30000;
    }

    @media screen,
    print {
      span {
        margin: 0;
        padding: 0;
        border: 0;
        font-weight: inherit;
        font-style: inherit;
        font-family: inherit;
        text-align: inherit;
        vertical-align: baseline;
      }

      html *,
      html :after,
      html :before {
        -webkit-box-sizing: inherit;
        box-sizing: inherit;
      }

      @media print {

        *,
        :after,
        :before {
          background: 0 0 !important;
          color: #000 !important;
          box-shadow: none !important;
          text-shadow: none !important;
        }

        img {
          page-break-inside: avoid;
        }

        img {
          max-width: 100% !important;
        }

        .label {
          border: 1px solid #000;
        }
      }

      img {
        border: 0;
      }

      @media print {
        .label {
          border: 0;
        }
      }
    }
  }

  /*! CSS Used from: Embedded */
  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  ::-moz-focus-inner {
    border: 0;
  }

  ::-webkit-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  ::-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-ms-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :focus {
    outline: none;
  }

  img {
    border: 0;
  }

  .css-1abnf4d {
    font-size: 1.1rem;
  }

  .css-5rnr3f {
    display: flex;
    height: 42px;
    padding: 0px 16px;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
  }

  @media (min-width: 993px) {
    .css-5rnr3f {
      display: none;
    }
  }

  .css-5rnr3f .title {
    font-family: mulilight;
    color: rgb(35, 21, 53);
    position: relative;
  }

  .css-5rnr3f .title .text {
    margin-right: 10px;
  }

  .css-5rnr3f .title i {
    position: absolute;
  }

  .css-5rnr3f .title i.down-arrow {
    top: 3px;
  }

  .css-5rnr3f .price {
    font-family: mulisemibold;
    text-align: right;
    color: rgb(35, 21, 53);
    font-size: 1.6rem;
  }

  .css-18g5l5m {
    padding: 20px 16px;
  }

  .css-18g5l5m .line-item {
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
  }

  .css-18g5l5m .price {
    font-family: mulisemibold;
    text-align: right;
    color: rgb(35, 21, 53);
  }

  .css-18g5l5m .shipping-type {
    margin-left: 5px;
    color: rgb(51, 51, 51);
  }

  .css-18g5l5m .sub-total {
    margin-bottom: 10px;
  }

  .css-17ss6c3 {
    border-top: 1px solid rgb(230, 220, 230);
    padding: 10px 16px 20px;
  }

  .css-17ss6c3.line-item {
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
  }

  .css-17ss6c3 .price {
    font-family: mulisemibold;
    text-align: right;
    color: #eec782;
    font-size: 1.6rem;
  }

  @media (min-width: 993px) {
    .css-17ss6c3 .price {
      font-size: 2rem;
    }
  }

  .css-1wird2e .cart-item {
    padding: 20px 16px;
    display: flex;
    border-bottom: 1px solid rgb(230, 220, 230);
  }

  .css-1wird2e .cart-item .thumbnail {
    flex: 1 1 0%;
  }

  .css-1wird2e .cart-item .thumbnail img {
    background: rgb(242, 242, 242);
    width: 48px;
  }

  @media (min-width: 993px) {
    .css-1wird2e .cart-item .thumbnail img {
      width: 60px;
    }
  }

  .css-1wird2e .cart-item .details {
    flex: 5 1 0%;
    margin-left: 16px;
    line-height: 1.64;
    color: rgb(35, 21, 53);
  }

  .css-1wird2e .cart-item .details .title {
    display: inline;
  }

  .css-1wird2e .cart-item .details .title {
    padding-right: 4px;
  }

  .css-1wird2e .cart-item .price {
    font-family: mulisemibold;
    text-align: right;
    color: rgb(35, 21, 53);
    display: flex;
    align-items: flex-end;
    -webkit-box-pack: end;
    justify-content: flex-end;
    flex-direction: column;
    flex: 1 1 0%;
  }

  .css-yqnuxd {
    padding: 15px 16px 10px;
    font-family: begummedium;
    font-size: 1.8rem;
    color: rgb(35, 21, 53);
  }

  @media (max-width: 992px) {
    .css-yqnuxd {
      display: none;
    }
  }

  .css-1bh2wnb {
    font-family: mulilight;
    overflow-y: hidden;
    transition: max-height 1s ease-in-out 0s;
    max-height: 0px;
  }

  @media (min-width: 993px) {
    .css-1bh2wnb {
      max-height: 2000px;
      background: linear-gradient(181deg, #e4e4e4, white);
    }
  }

  .css-zw473k {
    border-style: solid;
    border-color: black;
    border-image: initial;
    border-width: 0px 1px 1px 0px;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
  }

  *,
  ::before,
  ::after {
    background-repeat: no-repeat;
  }

  ::before,
  ::after {
    text-decoration: inherit;
    vertical-align: inherit;
  }

  ::-moz-selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  img {
    vertical-align: middle;
  }

  img {
    border-style: none;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  :-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: .54;
  }

  * {
    font-size: 13px;
  }

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  ::-moz-focus-inner {
    border: 0;
  }

  ::-webkit-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  ::-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-ms-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :focus {
    outline: none;
  }

  *,
  ::before,
  ::after {
    background-repeat: no-repeat;
  }

  ::before,
  ::after {
    text-decoration: inherit;
    vertical-align: inherit;
  }

  ::-moz-selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  :-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: .54;
  }

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  ::-moz-focus-inner {
    border: 0;
  }

  ::-webkit-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  ::-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-ms-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :focus {
    outline: none;
  }

  input:focus {
    outline: none !important;
  }

  input {
    font-size: 1.6rem;
  }

  *,
  ::before,
  ::after {
    background-repeat: no-repeat;
  }

  ::before,
  ::after {
    text-decoration: inherit;
    vertical-align: inherit;
  }

  ::-moz-selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  input {
    background-color: transparent;
    border-style: none;
    color: inherit;
    font-size: 1em;
    margin: 0;
  }

  input {
    overflow: visible;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  :-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: .54;
  }

  input {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
  }

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  ::-moz-focus-inner {
    border: 0;
  }

  ::-webkit-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  ::-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-ms-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :focus {
    outline: none;
  }

  input:focus {
    outline: none !important;
  }

  input {
    font-size: 1.6rem;
  }

  *,
  ::before,
  ::after {
    background-repeat: no-repeat;
  }

  ::before,
  ::after {
    text-decoration: inherit;
    vertical-align: inherit;
  }

  ::-moz-selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  input {
    background-color: transparent;
    border-style: none;
    color: inherit;
    font-size: 1em;
    margin: 0;
  }

  input {
    overflow: visible;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  :-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: .54;
  }

  input {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
  }

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  ::-moz-focus-inner {
    border: 0;
  }

  ::-webkit-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  ::-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-ms-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :focus {
    outline: none;
  }

  input:focus {
    outline: none !important;
  }

  input {
    font-size: 1.6rem;
  }

  *,
  ::before,
  ::after {
    background-repeat: no-repeat;
  }

  ::before,
  ::after {
    text-decoration: inherit;
    vertical-align: inherit;
  }

  ::-moz-selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  input {
    background-color: transparent;
    border-style: none;
    color: inherit;
    font-size: 1em;
    margin: 0;
  }

  input {
    overflow: visible;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  :-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: .54;
  }

  input {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
  }
  .in_prodiv button {
    position: absolute;
    top: 121px;
    padding: 1rem;
    right: 35px;
    height: 44px;
    background: none;
    border: 0;
}
.settype{
  width: 18rem !important;
  margin-top: 0px !important;
}
</style>
<style>
  *,
  ::after,
  ::before {
    box-sizing: border-box;
  }

  a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
  }

  a:hover {
    color: #0056b3;
    text-decoration: underline;
  }

  input {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
  }

  input {
    overflow: visible;
  }

  input[type=radio] {
    box-sizing: border-box;
    padding: 0;
  }

  @media print {

    *,
    ::after,
    ::before {
      text-shadow: none !important;
      box-shadow: none !important;
    }

    a:not(.btn) {
      text-decoration: underline;
    }
  }

  /*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css */
  a {
    background-color: transparent;
  }

  a:active,
  a:hover {
    outline: 0;
  }

  input {
    color: inherit;
    font: inherit;
    margin: 0;
  }

  input::-moz-focus-inner {
    border: 0;
    padding: 0;
  }

  input {
    line-height: normal;
  }

  input[type=radio] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
  }

  @media print {

    *,
    :after,
    :before {
      color: #000 !important;
      text-shadow: none !important;
      background: 0 0 !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
    }

    a,
    a:visited {
      text-decoration: underline;
    }

    a[href]:after {
      content: " ("attr(href) ")";
    }
  }

  * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  :after,
  :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  input {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
  }

  a {
    color: #337ab7;
    text-decoration: none;
  }

  a:focus,
  a:hover {
    color: #23527c;
    text-decoration: underline;
  }

  a:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
  }

  input[type=radio] {
    margin: 4px 0 0;
    margin-top: 1px\9;
    line-height: normal;
  }

  input[type=radio]:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
  }

  /*! CSS Used from: https://www.fineoutput.co.in/jewellery2/public/frontend/assets/css/style.css */
  a {
    font-size: 13px !important;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    a,
    a:visited {
      text-decoration: underline;
    }

    a[href]:after {
      content: " ("attr(href)")";
    }
  }

  a {
    background-color: transparent;
  }

  a:active,
  a:hover {
    outline: 0;
  }

  input {
    color: inherit;
    font: inherit;
    margin: 0;
  }

  input::-moz-focus-inner {
    border: 0;
    padding: 0;
  }

  input {
    line-height: normal;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    a,
    a:visited {
      text-decoration: underline;
    }

    a[href]:after {
      content: " ("attr(href)")";
    }
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
  }

  :after {
    box-sizing: border-box;
  }

  :after,
  :before {
    box-sizing: border-box;
  }

  a {
    color: #000;
    background: 0 0;
    overflow: hidden;
    text-decoration: none;
  }

  a:hover {
    color: #1f0b00 !important;
  }

  @media print {
    a[href]:after {
      content: "";
    }
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    a,
    a:visited {
      text-decoration: underline;
    }

    a[href]:after {
      content: " ("attr(href)")";
    }
  }

  a {
    background-color: transparent;
  }

  a:active,
  a:hover {
    outline: 0;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    a,
    a:visited {
      text-decoration: underline;
    }

    a[href]:after {
      content: " ("attr(href)")";
    }
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
  }

  a {
    color: #000;
    background: 0 0;
    overflow: hidden;
    text-decoration: none;
  }

  a:hover {
    color: #1f0b00 !important;
  }

  @media print {
    a[href]:after {
      content: "";
    }
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    a,
    a:visited {
      text-decoration: underline;
    }

    a[href]:after {
      content: " ("attr(href)")";
    }
  }

  a {
    background-color: transparent;
  }

  a:active,
  a:hover {
    outline: 0;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    a,
    a:visited {
      text-decoration: underline;
    }

    a[href]:after {
      content: " ("attr(href)")";
    }
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
  }

  a {
    color: #000;
    background: 0 0;
    overflow: hidden;
    text-decoration: none;
  }

  a:hover {
    color: #1f0b00 !important;
  }

  @media print {
    a[href]:after {
      content: "";
    }
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    a,
    a:visited {
      text-decoration: underline;
    }

    a[href]:after {
      content: " ("attr(href)")";
    }
  }

  a {
    background-color: transparent;
  }

  a:active,
  a:hover {
    outline: 0;
  }

  @media print {

    *,
    :after,
    :before {
      background: 0 0 !important;
      color: #000 !important;
      box-shadow: none !important;
      text-shadow: none !important;
    }

    a,
    a:visited {
      text-decoration: underline;
    }

    a[href]:after {
      content: " ("attr(href)")";
    }
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
  }

  a {
    color: #000;
    background: 0 0;
    overflow: hidden;
    text-decoration: none;
  }

  a:hover {
    color: #1f0b00 !important;
  }

  @media print {
    a[href]:after {
      content: "";
    }
  }

  a {
    text-decoration: none;
    color: #929292;
  }

  span {
    text-align: inherit;
  }

  a {
    color: inherit;
    text-decoration: none !important;
  }

  ::-moz-selection {
    background: #ee1f71;
    color: #fff;
    text-shadow: none;
  }

  ::-moz-selection {
    background: #ee1f71;
    color: #fff;
    text-shadow: none;
  }

  ::selection {
    background: #ee1f71;
    color: #fff;
    text-shadow: none;
  }

  @media all {
    ::selection {
      background: rgba(78, 84, 200, .15);
    }

    ::-moz-selection {
      background: rgba(78, 84, 200, .15);
    }

    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background: #1f0b00;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #b30000;
    }

    @media screen,
    print {
      span {
        margin: 0;
        padding: 0;
        border: 0;
        font-weight: inherit;
        font-style: inherit;
        font-family: inherit;
        text-align: inherit;
        vertical-align: baseline;
      }

      html *,
      html :after,
      html :before {
        -webkit-box-sizing: inherit;
        box-sizing: inherit;
      }

      @media print {

        *,
        :after,
        :before {
          background: 0 0 !important;
          color: #000 !important;
          box-shadow: none !important;
          text-shadow: none !important;
        }

        a,
        a:visited {
          text-decoration: underline;
        }

        a[href]:after {
          content: " ("attr(href) ")";
        }
      }

      @media print {
        a[href]:after {
          content: "";
        }
      }
    }
  }

  /*! CSS Used from: Embedded */
  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  ::-moz-focus-inner {
    border: 0;
  }

  ::-webkit-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  ::-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-ms-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :focus {
    outline: none;
  }

  *,
  ::before,
  ::after {
    background-repeat: no-repeat;
  }

  ::before,
  ::after {
    text-decoration: inherit;
    vertical-align: inherit;
  }

  ::-moz-selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  :-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: .54;
  }

  * {
    font-size: 13px;
  }

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  a {
    -webkit-text-decoration: none;
    text-decoration: none;
    color: #33363e;
  }

  a,
  a:active,
  a:hover {
    outline: 0;
  }

  ::-moz-focus-inner {
    border: 0;
  }

  ::-webkit-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  ::-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-ms-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :focus {
    outline: none;
  }

  a:focus {
    outline: none !important;
  }

  .css-ld7inj {
    margin: 0px;
    padding: 0px;
    display: block;
    text-decoration: none;
    outline: 0px;
    cursor: pointer;
    font-family: muliregular;
    color: rgb(222, 87, 229);
    font-size: inherit;
  }

  @media (max-width: 992px) {
    .css-ld7inj {
      cursor: default;
    }
  }

  *,
  ::before,
  ::after {
    background-repeat: no-repeat;
  }

  ::before,
  ::after {
    text-decoration: inherit;
    vertical-align: inherit;
  }

  ::-moz-selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  a {
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
  }

  a:hover {
    outline-width: 0;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  :-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: .54;
  }

  a {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
  }

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  ::-moz-focus-inner {
    border: 0;
  }

  ::-webkit-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  ::-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-ms-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :focus {
    outline: none;
  }

  input:focus {
    outline: none !important;
  }

  input {
    font-size: 1.6rem;
  }

  *,
  ::before,
  ::after {
    background-repeat: no-repeat;
  }

  ::before,
  ::after {
    text-decoration: inherit;
    vertical-align: inherit;
  }

  ::-moz-selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  input {
    background-color: transparent;
    border-style: none;
    color: inherit;
    font-size: 1em;
    margin: 0;
  }

  input {
    overflow: visible;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  :-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: .54;
  }

  input {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
  }

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  a {
    -webkit-text-decoration: none;
    text-decoration: none;
    color: #33363e;
  }

  a,
  a:active,
  a:hover {
    outline: 0;
  }

  ::-moz-focus-inner {
    border: 0;
  }

  ::-webkit-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  ::-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-ms-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :focus {
    outline: none;
  }

  input:focus,
  a:focus {
    outline: none !important;
  }

  input {
    font-size: 1.6rem;
  }

  .css-ld7inj {
    margin: 0px;
    padding: 0px;
    display: block;
    text-decoration: none;
    outline: 0px;
    cursor: pointer;
    font-family: muliregular;
    color: rgb(222, 87, 229);
    font-size: inherit;
  }

  @media (max-width: 992px) {
    .css-ld7inj {
      cursor: default;
    }
  }

  .css-1b1zfbw {
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    justify-content: space-between;
  }

  .css-1gvurk0 {
    position: relative;
    padding: 16px;
  }

  @media (min-width: 993px) {
    .css-1gvurk0 {
      padding: 24px 32px;
    }
  }

  .css-1mv2nhv {
    font-family: mulilight;
    font-size: 1.1rem;
    flex: 0 0 100%;
  }

  @media (min-width: 768px) {
    .css-1mv2nhv {
      font-size: 1.2rem;
      flex: 0 0 100%;
    }
  }

  .css-1a9sku1 {
    border: 1px solid rgb(31 11 0);
    font-size: 1.1rem;
    font-family: mulilight;
    border-radius: 4px;
    margin-bottom: 10px;
    position: relative;
    cursor: pointer;
    padding: 1px;
    min-height: 80px;
    max-width: 548px;
  }

  .street {
    width: 70%;
  }

  @media (min-width: 768px) {
    .css-1a9sku1 {
      font-size: 1.2rem;
    }
  }

  @media (min-width: 768px) {
    .css-1a9sku1 {
      min-height: 90px;
    }
  }

  .css-1a9sku1 .address {
    background: rgb(255, 255, 255);
    display: block;
    padding: 8px;
    border-radius: 2px;
    min-height: 76px;
  }

  @media (min-width: 768px) {
    .css-1a9sku1 .address {
      min-height: 86px;
    }
  }

  .css-1a9sku1 .name {
    font-family: mulisemibold;
  }

  .css-1a9sku1 .action-buttons {
    position: absolute;
    font-family: muliregular;
    top: 10px;
    right: 5px;
  }

  .css-1a9sku1 .action-buttons>* {
    display: inline;
  }

  .css-1a9sku1 .action-buttons>a {
    padding: 5px;
  }

  .css-1a9sku1 .selected-icon {
    position: absolute;
    display: inline-block;
    bottom: 5px;
    right: 5px;
  }

  .css-1a9sku1 .name {
    font-family: mulisemibold;
  }

  .css-ad8ff6 {
    background: url(https://assets.cltstatic.com/images/responsive/spriteImage1.png?t=1580384077297) -680px -372px / 832px no-repeat;
    display: block;
    cursor: pointer;
    width: 28px;
    height: 28px;
  }

  @media (max-width: 992px) {
    .css-ad8ff6 {
      cursor: default;
    }
  }

  .css-1ex41it {
    border: 1px solid rgb(233, 233, 233);
    border-radius: 4px;
    margin-bottom: 10px;
    position: relative;
    cursor: pointer;
    padding: 1px;
    min-height: 80px;
    max-width: 350px;
  }

  @media (min-width: 768px) {
    .css-1ex41it {
      min-height: 90px;
    }
  }

  .css-1ex41it.new {
    background: rgb(237 237 237);
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
  }

  .css-1ex41it .add {
    font-family: muliregular;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .css-1ex41it .add .icon {
    display: inline-block;
  }

  .css-ilzi1t {
    background: url(https://assets.cltstatic.com/images/responsive/spriteImage1.png?t=1580384077297) -696px -16px / 832px no-repeat;
    display: block;
    cursor: pointer;
    width: 14px;
    height: 14px;
  }

  @media (max-width: 992px) {
    .css-ilzi1t {
      cursor: default;
    }
  }

  *,
  ::before,
  ::after {
    background-repeat: no-repeat;
  }

  ::before,
  ::after {
    text-decoration: inherit;
    vertical-align: inherit;
  }

  ::-moz-selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  a {
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
  }

  a:hover {
    outline-width: 0;
  }

  input {
    background-color: transparent;
    border-style: none;
    color: inherit;
    font-size: 1em;
    margin: 0;
  }

  input {
    overflow: visible;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  :-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  [type="radio"] {
    padding: 0;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: .54;
  }

  a,
  input {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
  }

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  a {
    -webkit-text-decoration: none;
    text-decoration: none;
    color: #33363e;
  }

  a,
  a:active,
  a:hover {
    outline: 0;
  }

  ::-moz-focus-inner {
    border: 0;
  }

  ::-webkit-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  ::-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-ms-input-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :-moz-placeholder {
    font-family: 'mulilight';
    font-size: 1.1rem;
    color: #9e9fa5;
  }

  :focus {
    outline: none;
  }

  input:focus,
  a:focus {
    outline: none !important;
  }

  input {
    font-size: 1.6rem;
  }

  .css-ld7inj {
    margin: 0;
    padding: 0;
    display: block;
    -webkit-text-decoration: none;
    text-decoration: none;
    outline: 0;
    cursor: pointer;
    font-family: muliregular;
    color: rgb(31 11 0);
    font-size: inherit;
  }

  @media (max-width:992px) {
    .css-ld7inj {
      cursor: default;
    }
  }

  *,
  ::before,
  ::after {
    background-repeat: no-repeat;
  }

  ::before,
  ::after {
    text-decoration: inherit;
    vertical-align: inherit;
  }

  ::-moz-selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  ::selection {
    background-color: #b3d4fc;
    color: #000000;
    text-shadow: none;
  }

  a {
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
  }

  a:hover {
    outline-width: 0;
  }

  input {
    background-color: transparent;
    border-style: none;
    color: inherit;
    font-size: 1em;
    margin: 0;
  }

  input {
    overflow: visible;
  }

  ::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  :-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  [type="radio"] {
    padding: 0;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: .54;
  }

  a,
  input {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
  }

  /*! CSS Used from: Embedded */
  a {
    font-size: 14.5px;
  }


  .in_prodiv input {
    width: 100%;
    border: 1px solid #1f0b00 !important;
    padding: 1rem 5rem 1rem 1rem;
    border-radius: 0px;
    height: 44px;
  }

  input[type=text] {
    border: 1px solid #E6E7E8;
    letter-spacing: 1px;
    /* height: 50px; */
    padding: 0 20px;
    /* width: 26rem; */
    border-radius: 0;
    background-clip: padding-box;
    font-weight: 400;
  }

  .in_prodiv {
    display: flex;
  }
</style>






<div class="container-fluid space">
  <div class="row" style="justify-content: space-around;">
    <h1 class="col-md-12" style="padding-bottom: 2rem;padding-top: 1rem;">Check Out</h1>
    <div class="accordion accordion-flush col-md-6" id="accordionFlushExample">
      <!-- <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div> -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">

            1. Shipping/Address Information

          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="css-1gvurk0 ez4e8l00 col-md-12">
              <div>
                <div class="css-1b1zfbw">
                  <div style="max-height: 251px;overflow: auto;">
                    <div class="css-1mv2nhv">
                      <div class="address-box compact css-1a9sku1" id="2277789" role="presentation">
                        <form class="add_address_form" action="https://www.fineoutput.co.in/jewellery2/public/add_address_process" method="post">
      <input type="hidden" name="_token" value="GcoFfbNsCYUBsDsQgAz2wtt2S1K9uQsZTAbrZrNb">	<div class="row pt-5 pb-5">
  			<h4 class="pb-3">Contact Information</h4>
        <div class="d-flex" style="    justify-content: space-between;">

        <div class="">
  			<label>Customer Name</label>
  			<input type="text" name="customer_name" placeholder="Enter your Name" class="form-control settype" required="">
            </div>
        <div class="">
        <label>Customer Email </label>
        <input type="email" name="customer_email" placeholder="Enter your email" class="form-control settype" required="">
      </div>
    </div>
  <div class="d-flex" style="    justify-content: space-between;">
    <div class="">

  			<label>Customer Number </label>
  			<input type="text" name="customer_number" class="form-control settype" placeholder="Enter your number" onkeypress="return isNumberKey(event)" pattern="^[0-9]+$" minlength="10" maxlength="10" required="">

      </div>
  		<!-- <div class="col-sm-12 col-md-12 col-lg-12"> -->
      <div class="">

  			<h4 class="pb-3">Address</h4>

  			<!-- <label> Address</label> -->
  			<!-- <input type="text" name=""> -->
        <textarea type="text" name="address" class="form-control settype" id="exampleFormControlTextarea1" rows="3" required=""></textarea>

      </div>
    </div>
   <div class="d-flex" style="    justify-content: space-between;">

    <div class="">
        <label>Doorflat</label>
        <input type="text" name="doorflat" class="form-control settype">
  </div>
  <div class="">

        <label>Landmark</label>
        <input type="text" name="landmark" class="form-control settype">

        </div>

      </div>
        <label>Zip/Postal Code</label>
        <input type="text" name="zipcode" pattern="^[0-9]+$" onkeypress="return isNumberKey(event)" minlength="6" maxlength="6" class="form-control settype" required="">

  		<!-- </div> -->
  		<div class="d-flex">
  			<button class="mr-4 save_btn" type="submit">Save Address</button>
  			<a href="https://www.fineoutput.co.in/jewellery2/public/checkout"><button class="back_btn">Go Back</button></a>
  		</div>
  	</div>
  	</form>
                      </div>
                    </div>





                  </div>

                </div>

              </div>

              <br>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">

            2. Apply Promocode

          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="in_prodiv mb-5">
              <input type="text" placeholder="Enter Code Here" id="gift_promo" name="gift_promo">
              <button class="apply_btn" id="giftPromocode">
                Apply
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="css-1abnf4d col-md-4">
      <div class="css-5rnr3f" role="presentation">
        <div class="title">
          <span class="text">Show Order Summary</span>
          <i direction="down" class="down-arrow css-zw473k e1tt8hgl0"></i>
        </div>
        <div class="price">₹4,860</div>
      </div>
      <div class="css-1bh2wnb">
        <p class="css-yqnuxd">Order Summary</p>
        <div class="css-1wird2e">

          <div class="cart-item">
            <div class="thumbnail">
              <img src="https://www.fineoutput.co.in/jewellery2/public/uploads/ProductUploads/Product94301614429225.jpg" alt="Laura D Bracelet">
            </div>
            <div class="details">
              <div class="title">Test Product</div>

              <div class="sku">Sku: <span class="value">1234546a456</span></div>
              <div class="sku">Color: <span class="value">Blue</span></div>
              <div class="sku">Quantity: <span class="value">1</span> </div>
              <!-- <div class="delivery">Expected Delivery -<span>7th to 8th Sep</span>
           </div> -->
            </div>


            <div class="price">
              <span>$ 1.00 </span>
              <span class=""></span>
            </div>
          </div>




        </div>
        <div class="css-18g5l5m">
          <div class="sub-total line-item">
            <div class="label" style="color: black !important;"><b>SUBTOTAL</b></div>
            <div class="price">$ <span id="subtotal_price">3249.00</span></div>
          </div>

          <input type="hidden" name="qntty" id="qntty" value="15">
          <input type="hidden" name="subtot" id="subtot" value="3249.00">

          <div class="discount line-item">
            <div class="label" style="color: black !important;"><b>PROMOCODE DISSCOUNT</b></div>
            <div class="price">- $ <span id="discount">0</span></div>
          </div>
          <div class="discount line-item">
            <!-- <div class="label" style="color: black !important;"><b>GIFT DISCOUNT</b></div> -->
            <!-- <div class="price"  >- $<span id="discount_gift" >0</span></div> -->
          </div>
          <div class="shipping-charge line-item">
            <div class="label" style="color: black !important;"><b>SHIPPING CHARGES </b><span class="shipping-type">(Standard)</span>
            </div>
            <div class="price" id="shiping">$0</div>
          </div>
        </div>
        <div class="css-17ss6c3 line-item">
          <div class="label" style="color: black !important;"><b>TOTAL COST</b></div>
          <div class="price">$ <span id="total_price" class="price">3249.00</span></div>
        </div>

        <div class="css-17ss6c3 line-item">
          <div class="label" style="color: black !important;"><b>Payment Method</b></div><br>
          <input style="" type="radio" name="payment" id="payment_1" value="1" style="margin-left: 44px;">
          <b> Cash On Delivery</b>


          <input style="" type="radio" name="payment" id="payment_2" value="2" checked>
          <b> Online Payment</b>
        </div>
        <div class="css-17ss6c3 line-item w-100">
    <button>Place Order</button>
        </div>

      </div>

    </div>



  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
