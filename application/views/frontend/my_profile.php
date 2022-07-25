<style>
.label{display: inline;
    padding: 0.2em 0.6em 0.3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25em;
  }
  .bg-yellow{
    background-color: #f39c12 !important;
  }
  .bg-aqua{
    background-color: #00c0ef !important;
  }
  .bg-blue{
     background-color: #0073b7 !important;
 }
 .bg-green{
    background-color: #00a65a !important;
 }
 .bg-red{
    background-color: #dd4b39 !important;
}
  .text-small {
    font-size: 12px;
    line-height: 20px;
  }

  .my_order {
    background: #ececec;
  }

  .my_order h1 {
    font-weight: 100;
  }

  .my_order img {
    width: 100%;
  }

  .order_cont {
    padding: 2rem;
    padding-bottom: 0;
    border-radius: 6px;
    box-shadow: 0px 2px 7px -1px #bfbfbf;

  }

  .order_small {
    border: none;
    height: 40px;
    width: 35%;
    border-radius: 26px;
  }

  .ordertrack_small {
    border: none;
    height: 40px;
    width: 35%;
    border-radius: 26px;
    color: #fff;
    background: #ffb100;
  }

  .can_btn {
    width: 100%;
    height: 100%;
    border: none;
    background: #fff;
    outline: 0 !important;
    border-right: 1px solid lightgrey;
  }

  .can_btn:hover {
    width: 100%;
    height: 100%;
    border: none;
    background: #fff;
    outline: 0 !important;
    border-right: 1px solid lightgrey;
  }

  @media(min-width: 312px) and (max-width: 900px) {
    .ordertrack_small {
      width: 100%;
    }

    .order_small {
      width: 100%;
    }

    .two_btn {
      display: block !important;
    }

    .sp_od_web {
      display: none;
    }

    .sp_od_mob {
      display: block !important;
    }


    .ab_p_h p,
    h5 {
      font-size: 12px;
    }

    .order_cont {
      padding: 1rem;
      padding-bottom: 0;
    }

    .ab_p_h {
      position: absolute;
    }

    .my_order h4 {
      font-size: 18px !important;
    }

    .my_order i {
      display: contents;
    }

    .text-small {
      font-size: 12px;
      line-height: 20px;
    }

  }
</style>
<div class="ggty" ></div>
<section class="my_order pb-10">
  <div class="container">
    <center>
      <h1>My Profile</h1>
    </center>
    <div class="container bg-white order_cont mb-5">
      <div class="row">

        <div class="col-12 mt-3 pt-3 mb-3" style="border-top: 1px solid lightgrey;">
          <div class="row">
            <div class="col-12 col-lg-2 col-md-2 mb-1">
              <img src="<?php echo  base_url()?>assets/frontend/assets/img/user.jpg">
            </div>
            <div class="col-12 col-lg-10 col-md-10">

              <h4><?=$user_data->fname." ".$user_data->lname?> </h4>
              <p>First Name: <?=$user_data->fname?></p>
              <p>Last Name: <?=$user_data->lname?></p>
              <p>Phone: <?=$user_data->phone?> </p>
              <p>Email: <?=$user_data->email?> </p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  <br>
</section>
