<?php 
include('../config.php');
if(isset($_REQUEST['submit'])){
$sub_name = $_POST['sub_name'];
$category_name = $_POST['category_name'];

}
$insert_category = "INSERT INTO sub_category (sub_name,cat_id) VALUES ('$sub_name','$category_name')";
$insert_query_category= mysqli_query($conn,$insert_category);

if($insert_query_category){
    echo "inserted";
    header('location:../sub_category/add-sub.php');
}else{

    echo "not";
}
?>

