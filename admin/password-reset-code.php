<?php

session_start();
include('inc/db.php');



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


function send_pass_reset($get_name,$get_email,$token){
  $mail = new PHPMailer(true);

  // $mail->SMTPDebug = 2;
  $mail->isSMTP();
  $mail->SMTPAuth = true;

  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPSecure = 'tls';
  $mail->Username = 'aesthetic.raza@gmail.com';
  $mail->Password = 'ehgq wnpr pidv auzo';
  $mail->Port = 587;

  $mail->setFrom('aesthetic.raza@gmail.com', $get_name);
  $mail->addAddress($get_email);

  $mail->isHTML(true);
  $mail->Subject = "Reset Pasword Notification";

  $email_template = "
  <h2>Reset Password Email From Ali Raza Blog</h2>
  <h5>Your Are Reciebing this email because we recieved a password reset request for your account</h5>
  <br><br>
  <a href = 'http://localhost/blog/password-change.php?token=$token&email=$get_email'>Click Me</a>
  ";

  $mail->Body    = $email_template;
  $mail->send();
  // echo 'Message has been sent';

}

if(isset($_POST['pass-res-btn'])){
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $token = md5(rand());

  $chechk_email = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
  $chechk_email_run = mysqli_query($conn,$chechk_email);
  if (mysqli_num_rows($chechk_email_run) > 0) {
    $row = mysqli_fetch_array($chechk_email_run);
    $get_name = $row['name'];
    $get_email = $row['email'];

    $update_token =   "UPDATE users SET verify_token='$token' WHERE email = '$email' LIMIT 1";
    $update_token_run = mysqli_query($conn,$update_token);

    if($update_token_run){
      send_pass_reset($get_name,$get_email,$token);
      $_SESSION['status'] = "We Emailed You A Password Reset Link";
      header("Location: password-reset.php");
      exit(0);
    }
    else{
      $_SESSION['status'] = "Something Went Wrong. #1";
      header("Location: password-reset.php");
      exit(0);
    }
  } 
  else {
    $_SESSION['status'] = "No Email Found";
    header("Location: password-reset.php");
    exit(0);
}

}




if(isset($_POST['password_update'])){
  $email = mysqli_real_escape_string($conn, trim($_POST['email']));
  $new_password = mysqli_real_escape_string($conn, trim($_POST['new_password']));
  $confirm_password = mysqli_real_escape_string($conn, trim($_POST['confirm_password']));

  $token = mysqli_real_escape_string($conn, $_POST['password_token']);

  if (!empty($token)) {
      if (!empty($email) && !empty($new_password) && !empty($confirm_password)) {
          $chechk_token = "SELECT verify_token FROM users WHERE verify_token = '$token' LIMIT 1";
          $chechk_token_run = mysqli_query($conn, $chechk_token);

          if (mysqli_num_rows($chechk_token_run) > 0) {
              if ($new_password == $confirm_password) {
                  $update_password = "UPDATE users SET password='$new_password' WHERE verify_token = '$token' LIMIT 1";
                  $update_password_run = mysqli_query($conn, $update_password);

                  if ($update_password_run) {
                      $new_token = md5(rand());
                      $update_to_new_token = "UPDATE users SET verify_token='$new_token' WHERE verify_token = '$token' LIMIT 1";
                      $update_to_new_token_run = mysqli_query($conn, $update_to_new_token);

                      $_SESSION['status'] = "New Password Successfully Updated";
                      header("Location: login.php");
                      exit(0);
                  } else {
                      $_SESSION['status'] = "Did not Update Password. Something went wrong!";
                      header("Location: password-change.php?token=$token&email=$email");
                      exit(0);
                  }
              } else {
                  $_SESSION['status'] = "Password and Confirm Password do not match";
                  header("Location: password-change.php?token=$token&email=$email");
                  exit(0);
              }
          } else {
              $_SESSION['status'] = "Invalid Token";
              header("Location: password-change.php?token=$token&email=$email");
              exit(0);
          }
      } else {
          $_SESSION['status'] = "All Fields Are Required";
          header("Location: password-change.php?token=$token&email=$email");
          exit(0);
      }
  } else {
      $_SESSION['status'] = "No Token available";
      header("Location: password-change.php");
      exit(0);
  }
}


?>