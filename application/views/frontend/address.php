
<style>
.chk{
background: #d76a46;
color: white;
border: none;
width:100%;
}
.chk:hover{
  background: #d76a46;
  color: white;
}
.sp{
  color:red;
}
</style>
<div class="ggty" style="line-height:5rem;" ></div>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8 mb-4">
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Biling details</h5>
      </div>
      <div class="card-body">
        <form action="<?=base_url()?>Order/add_address" method="post" enctype="multipart/form-data">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="name">Name<span class="sp">*</span></label>
                <input type="text" id="name" name="name" class="form-control mt-1" required onkeyup='saveValue(this);'/>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="email">Email<span class="sp">*</span></label>
                <input type="email" id="email" name="email" class="form-control mt-1" required onkeyup='saveValue(this);'/>
              </div>
            </div>
          </div>

          <!-- Text input -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="phone">Contact<span class="sp">*</span></label>
                <input type="text" id="phone" name="phone" maxlength="10" minlength="10" class="form-control mt-1" required onkeypress="return isNumberKey(event)" onkeyup='saveValue(this);'/>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="pincode">Pincode<span class="sp">*</span></label>
                <input type="text" id="pincode" name="pincode" maxlength="6" minlength="6" class="form-control mt-1" required onkeypress="return isNumberKey(event)" onkeyup='saveValue(this);'/>
              </div>
            </div>
          </div>

          <!-- address input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="address">Address<span class="sp">*</span></label>
            <textarea class="form-control" id="address" name="address" rows="4" required onkeyup='saveValue(this);'></textarea>
          </div>

          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-2">
            <button class="chk" style="width:50%">
            Proceed To Checkout
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>

<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<script>
document.getElementById("name").value = getSavedValue("name");
document.getElementById("email").value = getSavedValue("email");
document.getElementById("phone").value = getSavedValue("phone");
document.getElementById("address").value = getSavedValue("address");

function saveValue(e){

var id = e.id;  // get the sender's id to save it .
var val = e.value; // get the value.
localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override .
}

function getSavedValue  (v){
if (!localStorage.getItem(v)) {
return "";// You can change this to your defualt value.
}
return localStorage.getItem(v);
}
</script>
