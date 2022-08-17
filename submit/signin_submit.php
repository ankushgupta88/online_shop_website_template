<?php
include('../config.php');

if(isset($_REQUEST['submit'])){
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$psw = $_REQUEST['pwd'];
$phone = $_REQUEST['phone'];
$gender = $_REQUEST['gender'];

$filename = $_FILES['fileToUpload']['name'];
$tmp_name = $_FILES['fileToUpload']['tmp_name'];
$target_path = "../images/sign-image/";
$target_result = $target_path.basename($_FILES['fileToUpload']['name']);
move_uploaded_file($tmp_name,$target_result);
}
//check email 
$check_email = "SELECT * FROM shoping_table WHERE email='$email'";
$check_query = mysqli_query($conn,$check_email);
if(mysqli_num_rows($check_query)>=1){
    echo "email is already taken";
}else{

$insert_sign = mysqli_query($conn,"INSERT INTO shoping_table (first_name,last_name,email,psw,phone,gender,image)VALUES('$first_name','$last_name','$email','".md5($psw)."','$phone','$gender','$filename')"); 
//header('location:../sign-in.php');
}

?>