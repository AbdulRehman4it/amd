<?php 

session_start();


$page_title = "Password Change";


include('inc/top.php');



include('inc/navbar.php');

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
              Change Password
            </h5>
          </div>
          <div class="card-body">
            <form action="password-reset-code.php" method="post">
                <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){ echo $_GET['token'];}?>">
              <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="text" id="email" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];}?>" name="email" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" placeholder="Enter New Password" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter New Password" class="form-control">
              </div>
              <div class="form-group mb-3">
                <button type="submit" name="password_update" class="btn btn-success w-100">Update Password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 

require_once('inc/bottom.php');

?>