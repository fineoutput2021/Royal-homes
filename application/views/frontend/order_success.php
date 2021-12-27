
<section class="section-b-space"style="height:90vh;justify-content:center; align-items:center;display:flex;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="success-text" style="line-height:60px;text-align:center;font-family: Lato, sans-serif;"><i class="fa fa-check-circle" aria-hidden="true" style="font-size: 50px;color: #4ead4e;"></i>
                        <h2 style="color:green;">Thank you</h2>
                        <p  style="font-size: 18px; color:green;  text-transform: inherit;">Order is successfully placed and your order is on the way</p>
                        <p style="color:green;">Order Id = <?=$order_id?> | Amount = Rs.<?=$amount?></p>

                      <div class="d-flex justify-content-center align-items-center">
                        <a  style="margin-right:18px;" href="<?=base_path?>my_orders" class="btn btn-success">View Orders</a>
                        <a class="btn btn-primary" type="button" href="<?=base_path?>">  Continue to shopping..</a>
                      </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
