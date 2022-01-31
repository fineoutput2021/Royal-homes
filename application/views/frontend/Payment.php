<script src="<?=base_url()?>/<?=base_url()?>assets/frontend/assets/rxp-js-1.5.0/dist/rxp-js.js"></script>
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
  <div class="col-md-4"></div>
  <div class="col-md-4 mb-4">
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Card Details</h5>
      </div>
      <div class="card-body">
        <form name="myForm" method="POST" enctype='multipart/form-data' autocomplete="off" action="https://serverSdkEndpoint">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col-md-12 col-12">
              <div class="form-outline">
                <label class="form-label" for="cardNumber">Card Number<span class="sp">*</span></label>
                <input type="tel" id="cardNumber" name="card-number" class="form-control mt-0" required/>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-12 col-12">
              <div class="form-outline">
                <label class="form-label" for="cardholderName">Cardholder Name<span class="sp">*</span></label>
                <input type="text" id="cardholderName" name="cardholder-name" class="form-control mt-0" required/>
              </div>
            </div>
          </div>

          <!-- Text input -->
          <div class="row mb-4">
            <div class="col-md-6 col-12">
              <div class="form-outline">
                <label class="form-label" for="Expiry_Date">Expiry Date<span class="sp">*</span></label>
                <div class="" style="display:flex">
                <input type="tel" id="expiryDateMM" name="expiry-date-mm" placeholder="MM" style="width:50%" class="form-control mt-0" required/>
                <input type="tel" id="expiryDateYY" name="expiry-date-yy" placeholder="YY" style="width:50%" class="form-control mt-0" required/>
              </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-outline">
                <label class="form-label" for="cvn">Security Code<span class="sp">*</span></label>
              <input type="tel" id="cvn" name="cvn" placeholder="cvn" class="form-control mt-0" required/>
              </div>
            </div>
          </div>
          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-2">
            <button class="chk" value="Pay Now" type="submit" name="submit" onclick="validate();" style="width:50%">
            Pay Now
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
<script type="text/javascript">
function validate() {
   // basic form validation using the JS Library given as an example
   var cardNumberCheck = RealexRemote.validateCardNumber(document.getElementById('cardNumber').value);
   var cardHolderNameCheck = RealexRemote.validateCardHolderName(document.getElementById('cardholderName').value);
   var expiryDate = document.getElementById('expiryDateMM').value.concat(document.getElementById('expiryDateYY').value);
   var expiryDateFormatCheck = RealexRemote.validateExpiryDateFormat(expiryDate);
   var expiryDatePastCheck = RealexRemote.validateExpiryDateNotInPast(expiryDate);
   if (document.getElementById('cardNumber').value.charAt(0) == "3") {
      cvnCheck = RealexRemote.validateAmexCvn(document.getElementById('cvn').value);
   } else {
      cvnCheck = RealexRemote.validateCvn(document.getElementById('cvn').value);
   }
   if (cardNumberCheck == false || cardHolderNameCheck == false || expiryDateFormatCheck == false || expiryDatePastCheck == false || cvnCheck == false) {
      // code here to inform the cardholder of an input error and prevent the form submitting
      return false;
   } else {
      return true;
   }}
</script>
