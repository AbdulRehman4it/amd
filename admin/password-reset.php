<?php 

session_start();

$page_title = "Password Reset";


include('inc/top.php');




?>

<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
              <?php 
              if(isset($_SESSION['status'])){
                  ?>
                  <div class="alert alert-success">
                  <h4><?=$_SESSION['status']?></h4>
                  </div>
                  <?php
                  unset(
                  $_SESSION['status']
                  );
              }
              ?>
        <div class="card shadow">
          <div class="card-header">
            <h5>
              Reset Password
            </h5>
          </div>
          <div class="card-body">
            <form action="password-reset-code.php" method="post">
              <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter Email Address" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" name="pass-res-btn" class="btn btn-primary">Send Password Reset Link</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 

require_once('inc/footer.php');

?>