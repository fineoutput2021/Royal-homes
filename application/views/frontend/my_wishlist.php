<br />
<br />
<br />
<br />
<br />
<br />
<style>
  .discount {
    background: #d76a46;
    position: absolute;
    left: 16;
    top: 30px;
    z-index: 5;
    color: #fff;
    padding: 5px 20px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    font-size: 18px;
  }

  .add_btn {
    background: #d76a46;
    color: white;
    border: none;
  }

  .add_btn:hover {
    background: black;
    color: white;
    border: none;
  }


  .dropdown {
    display: inline-block;
    position: relative;
  }

  .dd-button {
    display: inline-block;
    border-radius: 4px;
    padding: 10px 30px 10px 20px;
    background-color: #d76a46;
    cursor: pointer;
    white-space: nowrap;
    color: white;
  }

  .dd-button:after {
    content: '';
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid white;
  }

  .dd-button:hover {
    background-color: #d76a46;
    color: black;

  }


  .dd-input {
    display: none;
  }

  .dd-menu {
    position: absolute;
    top: 100%;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 0;
    margin: 2px 0 0 0;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    list-style-type: none;
    z-index: 1;
    text-align: left;
    margin-left: -63px;
  }

  .dd-input+.dd-menu {
    display: none;
  }

  .dd-input:checked+.dd-menu {
    display: block;
  }

  .dd-menu li {
    padding: 10px 20px;
    cursor: pointer;
    white-space: nowrap;
  }

  .dd-menu li:hover {
    background-color: #d76a46;
  }

  .dd-menu li a {
    display: block;
    margin: -10px -20px;
    padding: 10px 20px;
  }

  .dd-menu li.divider {
    padding: 0;
    border-bottom: 1px solid #cccccc;
  }
</style>

<section>
  <div class="container" >
    <center style="background:#f5f5f5">
      <h1>My Wishlist</h1>
    </center>
    <br />
    <?
    $wish_check = $wishlist_data->row();
    if(!empty($wish_check)){?>
    <!--products--->
    <div class="row">
      <?php $i=1; foreach($wishlist_data->result() as $wish) {
                    $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('id',$wish->product_id);
        $pro= $this->db->get()->row();
        ?>
      <div class="col-md-3 p-2">
        <img src="<?=base_url().$pro->image?>" class="img-fluid" />
        <div class="discount">New</div>
        <h5><?=$pro->productname?></h5><s style="font-size: 12px;text-decoration: line-through;color:red">(£<?=$pro->mrp?>)</s>  <span style="font-weight: bold; font-size: 12px;"> £<?=$pro->selling_price?></span>
        <a href="" style="color:#d76a46"><i class="fa fa-heart float-right" aria-hidden="true" style="font-size:20px" onclick="wishlist(this)"
          product_id="<?=base64_encode($pro->id)?>"
          user_id="<?=base64_encode($this->session->userdata('user_id'))?>"
          status="remove"></i></a>
        <div class="w-100">
          <button class=" add_btn" style="width:100%" onclick="wishlist(this)"
            product_id="<?=base64_encode($pro->id)?>"
            user_id="<?=base64_encode($this->session->userdata('user_id'))?>"
            status="move">Move to cart</button>
        </div>
      </div>
      <?}?>
    </div>
    <?}else{?>
      <center>
        <h2>Wishlist is empty! Please add product to wishlist</h2>
      </center>
      <?}?>
</section>
<br />
<br />
<br />
