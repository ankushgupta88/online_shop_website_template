<?php 
$servername ="localhost";
$username ="root";
$password ="";
$database = "shoping";

//create connection
$conn = mysqli_connect($servername,$username,$password,$database);

//check connection
// if($conn){
//     echo "connection successfully";
// }else{
//     echo "connection not successfully";
// }
define('WEBSITE_URL','http://localhost/online-shop-website-template/');
?>