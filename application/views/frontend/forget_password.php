<style>
.chk1{
background: #d76a46;
color: white;
border: none;
}
.chk1:hover{
  background: black;
  color: white;
}
</style>
<div class="ggty" style="line-height:4rem;" ></div>
		<section >
			<div class="container">
				<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 item-justify">
				<div class="heading mb-4">
					<h2>Reset Password</h2>
					<p>Please enter your email address below to receive a password reset link.</p>
				</div>
  <? if(!empty($this->session->flashdata('smessage'))){ ?>
        <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Alert!</h4>
  <? echo $this->session->flashdata('smessage'); ?>
  </div>
    <? }
     if(!empty($this->session->flashdata('emessage'))){ ?>
     <div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-ban"></i> Alert!</h4>
<? echo $this->session->flashdata('emessage'); ?>
</div>
  <? } ?>
				<form action="<?=base_url()?>User_login/form_submit_forgotpassword" method="post">
					<div class="form-group required-field">
						<label for="reset-email">Email</label>
						<input type="email" class="form-control" id="reset_email" name="reset_email" required>
					</div><!-- End .form-group -->

					<div class="form-footer w-100 center">
						<button type="submit" class="btn chk1">Reset My Password</button>
					</div><!-- End .form-footer -->

				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
			</div><!-- End .container -->
		</section><!-- End .main -->
