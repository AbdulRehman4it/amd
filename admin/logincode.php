<?php 

session_start();
include('inc/db.php');



if (isset($_POST['login-now-btn'])) {
    if (!empty(trim( $_POST['email']))  && !empty(trim( $_POST['password'])) ) {
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']); 

        $login_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1 ";
        $login_query_run = mysqli_query($conn,$login_query);
        if(mysqli_num_rows($login_query_run) > 0){
            $row = mysqli_fetch_array($login_query_run);
            if($row['verify_status'] == "Approved"){
                $_SESSION['authenticated'] = TRUE ;
                $_SESSION['auth_user'] = [
                    'username' => $row['name'],
                    'phone' => $row['phone'],
                    'email' => $row['email']
                ];
                    $_SESSION['status'] = "You Are Loged in Successfully";
                    header("Location: index.php");
                    exit(0); }
            else{
                $_SESSION['status'] = "Please verify your email address to login";
                header("Location: login.php");
                exit(0);
            }
        }
        else{
            $_SESSION['status'] = "Invalid Email Or Password";
            header("Location: login.php");
            exit(0);
        }
    }
    else{
        $_SESSION['status'] = "All Fields are Required";
        header("Location: login.php");
        exit(0);
    }
}

?>