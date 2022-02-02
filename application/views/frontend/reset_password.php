<style>
  .chk1 {
    background: #d76a46;
    color: white;
    border: none;
  }

  .chk1:hover {
    background: black;
    color: white;
  }
</style>
<div class="ggty" style="line-height:4rem;" ></div>
<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 item-justify">
        <div class="login-content">
          <h2>Reset Password</h2>
          <form class="login-form" action="<?=base_url()?>User_login/update_password/<?=$auth?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="local" class="form-control" value="">
            <div class="form-group">
              <input type="password" class="form-control" name="reset_password" placeholder="New Password" required>
            </div>
            <div class="w-100 center">
              <button type="submit" class="chk1">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</section>
