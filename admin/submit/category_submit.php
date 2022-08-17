<?php 
include('../config.php');
if(isset($_REQUEST['submit'])){
$category_name = $_POST['category_name'];
$cat_desc = $_POST['cat_desc'];
$status = $_POST['status'];
}
$insert_category = "INSERT INTO category (cat_name,cat_desc,status) VALUES ('$category_name','$cat_desc','$status')";
$insert_query_category= mysqli_query($conn,$insert_category);

if($insert_query_category){
    echo "inserted";
    header('location:../category/add-category.php');
}else{

    echo "not";
}
?>