<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shoping";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
 //Check connection
//if (!$conn) {
   //die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";

//define 
define('SITE_URL','http://localhost/online-shop-website-template/admin/');
?>