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
</style>


<section>
  <div class="container">
    <center style="background:#f5f5f5">
      <h1>Search Results</h1>
    </center>
    <!--product fetch-->
    <?php $i=1;
    $search_check = $search_data->row();
    if(!empty($search_check)){
  ?>

    <!--products--->
    <div class="row">
      <?php $i=1; foreach($search_data->result() as $search) { ?>
      <div class="col-md-3 p-2">
        <a href="<?=base_url()?>Home/product_details/<?=base64_encode($search->id)?>" style="color:unset">
          <img src="<?=base_url().$search->image?>" class="img-fluid" />
          <div class="discount">New</div>
          <h5><?=$search->productname?></h5><s style="font-size: 12px;text-decoration: line-through;color:red">(Rs.<?=$search->selling_price?>)</s> <span style="font-weight: bold; font-size: 12px;"> Rs.<?=$search->mrp?></span>
        </a>
        <?if(!empty($this->session->userdata('user_data'))){
                      $this->db->select('*');
          $this->db->from('tbl_wishlist');
          $this->db->where('product_id',$search->id);
          $this->db->where('user_id',$this->session->userdata('user_id'));
          $wishlist_data= $this->db->get()->row();
          if(empty($wishlist_data)){
          ?>
        <a href="" style="color:#d76a46"><i class="fa fa-heart-o float-right" aria-hidden="true" style="font-size:20px" onclick="wishlist(this)" product_id="<?=base64_encode($search->id)?>"
            user_id="<?=base64_encode($this->session->userdata('user_id'))?>" status="add"></i>
          <?}else{?>
          <a href="" style="color:#d76a46"><i class="fa fa-heart float-right" aria-hidden="true" style="font-size:20px" onclick="wishlist(this)" product_id="<?=base64_encode($search->id)?>"
              user_id="<?=base64_encode($this->session->userdata('user_id'))?>" status="remove"></i></a>
          <?}}?>
        </a>
        <div class="w-100">
          <?if(empty($this->session->userdata('user_data'))){?>
          <button class=" add_btn" style="width:100%" onclick="addToCartOffline(this)" product_id="<?=base64_encode($search->id)?>" quantity=1>Add To Cart</button>
          <?}else{?>
          <button class=" add_btn" style="width:100%" onclick="addToCartOnline(this)" product_id="<?=base64_encode($search->id)?>" quantity=1>Add To Cart</button>
          <?}?>
        </div>
      </div>
      <?}}else{?>
        <center>
        </br>
          <h4>No result found</h4>
        </center>
      <?}?>
    </div>
</section>
<br />
<br />
<br />
