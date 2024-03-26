<?php
// $db['db_host'] = 'localhost';
// $db['db_user'] = 'root';
// $db['db_pass'] = '';
// $db['db_name'] = 'cms';



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amd";

// foreach ($db as $key => $value) {
//    define (strtoupper($key),$value);
// }
// Create connection
// $conn = mysqli_connect(DB_HOST, DB_USER,DB_PASS, DB_NAME);
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>