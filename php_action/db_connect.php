<?php 	

$localhost = "127.0.0.1";
$username = "root";
$dbname = "sisalmacen";
$password = "";
$port = "3308";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname, $port);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>