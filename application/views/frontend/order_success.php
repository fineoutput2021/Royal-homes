<style>
.btn_s{
  background: #d76a46;
  color: white;
  border: none;
}
.btn_s:hover{
  color: white;
}
.btn_c{
  background: #306b30;
  color: white!important;
  border: none;
}
.btn_c:hover{
  color: white;
}
</style>
<section class="section-b-space"style="height:90vh;justify-content:center; align-items:center;display:flex;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="success-text" style="line-height:60px;text-align:center;font-family: Lato, sans-serif;"><i class="fa fa-check-circle" aria-hidden="true" style="font-size: 50px;color: #4ead4e;"></i>
                        <h2 style="color:green;">Thank you</h2>
                        <p  style="font-size: 18px; color:green;  text-transform: inherit;">Order is successfully placed and your order is on the way</p>
                        <p style="color:green;">Order Id = <?=$order_id?> | Amount = Rs.<?=$amount?></p>

                      <div class="d-flex justify-content-center align-items-center">
                        <a style="margin-right:18px; background:#d76a46" href="<?=base_url()?>my_orders" class="btn btn_s">View Orders</a>
                        <a class="btn btn_c" href="<?=base_url()?>">  Continue to shopping..</a>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
