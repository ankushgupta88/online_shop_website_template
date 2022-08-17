<?php
include('../config.php');
if(isset($_REQUEST['submit'])){
$slide_image = $_FILES['choosefile']['name'];
$slide_image_tmp = $_FILES['choosefile']['tmp_name'];
$target_path ="../../images/slide_image/";
$target_result = $target_path.basename($_FILES['choosefile']['name']);
move_uploaded_file($slide_image_tmp,$target_result);
}
$insert_product = "INSERT INTO logo_slider (image) VALUES ('$slide_image')";

$insert_query_product= mysqli_query($conn,$insert_product);

if($insert_query_product){
    echo "inserted";
    header('location:../logo_slider/add-logo.php');
}else{

    echo "not";
}
?>