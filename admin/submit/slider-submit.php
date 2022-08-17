<?php session_start();
include('../config.php');
if(isset($_REQUEST['submit'])){
$slider_name = $_REQUEST['slider_name'];
$slider_desc = $_REQUEST['slider_desc'];
$slide_image = $_FILES['choosefile']['name'];
$slide_image_tmp = $_FILES['choosefile']['tmp_name'];
$target_path ="../../images/slide_image/";
$target_result = $target_path.basename($_FILES['choosefile']['name']);
move_uploaded_file($slide_image_tmp,$target_result);
}
$slide_insert = "INSERT INTO `slider`(`slider_name`, `slider_desc`, `slider_img`) VALUES ('$slider_name','$slider_desc','$slide_image')";
$slide_query = mysqli_query($conn,$slide_insert);

if($slide_query ){
    echo "entered";
    header('location:../slider/add-slider.php');
}
