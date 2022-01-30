<!DOCTYPE html>
<html>
   <head>
      <title>Basic Validation Example</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Available at https://github.com/globalpayments -->
      <script src="<?=base_url()?>/<?=base_url()?>assets/frontend/assets/rxp-js-1.5.0/dist/rxp-js.js"></script>
      <!-- Basic form styling given as an example -->
      <style type="text/css">
         label{display:block; font-size:12px; font-family:arial;}
         input{width:200px;}
         input.small{width:50px;}
         .twoColumn{float:left;margin:0 30px 20px 0;}
         .clearAll{clear:both;}
      </style>
   </head>
   <body>
      <!-- Basic HTML form given as an example -->
      <form name="myForm" method="POST" autocomplete="off" action="https://serverSdkEndpoint">
         <label for="cardNumber">Card Number</label>
         <input type="tel" id="cardNumber" name="card-number" /><br><br>
         <label for="cardholderName">Cardholder Name</label>
         <input type="text" id="cardholderName" name="cardholder-name" /><br><br>
         <p class="twoColumn">
         <label>Expiry Date</label>
         <input type="tel" id="expiryDateMM" name="expiry-date-mm" placeholder="MM" class="small" />
         <input type="tel" id="expiryDateYY" name="expiry-date-yy" placeholder="YY" class="small"  /></p>
         <p class="twoColumn">
         <label for="cvn">Security Code</label>
         <input type="tel" id="cvn" name="cvn" class="small" /></p>
         <p class="clearAll">
         <input value="Pay Now" type="submit" name="submit" onclick="validate();" /></p>
      </form>
   </body>
</html>
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
   }
</script>
