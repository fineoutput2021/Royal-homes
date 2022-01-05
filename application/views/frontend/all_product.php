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
    font-family: 'euclid bold';
  }

  .add_btn {
    background: #d76a46;
    color: white;
    border: none;
  }

  .add_btn:hover {
    background: #d76a46;
    color: black;
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
    margin-left:-63px;
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
  <div class="container">
<?
$id=base64_decode($id);
$t=base64_decode($t);

if($t==2){
  $this->db->select('*');
$this->db->from('tbl_subcategory');
$this->db->where('id',$id);
$sub_data= $this->db->get()->row();

?>


    <!-- category or subcategory details -->

    <div class="row" style="padding:10px;border:1px solid #ccc">
      <div class="col-md-6">
        <h3><?=$sub_data->subcategory?></h3>
        <p>
          <?=$sub_data->description?>
        </p>
      </div>
      <div class="col-md-6">
        <img src="<?=base_url().$sub_data->image;?>" class="img-fluid" />
      </div>
    </div>
    <?}?>
    <br />
    <div class="row">
      <div class="col-md-6">
        <h3>Paolo</h3>
      </div>
      <div class="col-md-6 text-right">
        <label class="dropdown">
          <div class="dd-button">
            Sort By
          </div>
          <input type="checkbox" class="dd-input" id="test">
          <ul class="dd-menu">
            <li>Price Low To High</li>
            <li>Price High To Low</li>
          </ul>
        </label>
      </div>
    </div>

<!--product fetch-->
    <?php $i=1;

    $product_check = $product_data->row();
    // print_r($product_check);
    // exit;
    if(!empty($product_check)){
    //---------categorywise product-----------
    $product_data1 = [];
    // echo "hi";
    // exit;
    if($t==1){
      foreach($product_data->result() as $data) {
       $cat = json_decode($data->category);
       $count = count($cat);
       if($count>1){
         foreach ($cat as $value) {
           if($value==$id){
             $product_data1[] = array(
               'id' => $data->id,
               'name' => $data->productname,
               'image' => $data->image,
               'mrp' => $data->mrp
             );
           }
         }
       }else{

         if($cat[0]==$id){
           $product_data1[] = array(
             'id' => $data->id,
             'name' => $data->productname,
             'image' => $data->image,
             'mrp' => $data->mrp
           );
         }
       }

      }
    }
    //-------------subcategorywise product---------------
    else{
      // echo "hi";
      // exit;
      foreach($product_data->result() as $data) {
       $sub = json_decode($data->subcategory);
       $count = count($sub);
       if($count>1){
         foreach ($sub as $value) {
           if($value==$id){
             $product_data1[] = array(
               'id' => $data->id,
               'name' => $data->productname,
               'image' => $data->image,
               'mrp' => $data->mrp
             );
           }
         }
       }else{
         if($sub[0]==$id){
           $product_data1[] = array(
             'id' => $data->id,
             'name' => $data->productname,
             'image' => $data->image,
             'mrp' => $data->mrp
           );
         }
       }

      }
    }?>

<!--products--->
    <div class="row">
  <?php $i=1; foreach($product_data1 as $pro) { ?>
      <div class="col-md-3 p-2">
        <img src="<?=base_url().$pro['image']?>" class="img-fluid" />
        <div class="discount">New</div>
        <h6><?=$pro['name']?></h6> <span style="font-weight: bold; font-size: 12px;"> Rs.<?=$pro['mrp']?></span>
        <i class="fa fa-heart-o float-right" aria-hidden="true" style="font-size:20px"></i>
        <div class="w-100">
          <?if(empty($this->session->userdata('user_data'))){?>
          <button class=" add_btn" style="width:100%"
          onclick="addToCartOffline(this)"
          product_id="<?=base64_encode($pro['id'])?>"
          quantity=1
          >Add To Cart</button>
          <?}else{?>
            <button class=" add_btn" style="width:100%"
            onclick="addToCartOnline(this)"
            product_id="<?=base64_encode($pro['id'])?>"
            quantity=1
            >Add To Cart</button>
            <?}?>
        </div>
      </div>
<?}}?>
    </div>
</section>
<br />
<br />
<br />
