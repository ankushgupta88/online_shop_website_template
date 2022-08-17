<?php 
include('../config.php');
if(isset($_REQUEST['submit'])){
$product_name = $_POST['product_name'];
$type = $_POST['type'];
$type1 = $_POST['type1'];
$Mrp = $_POST['Mrp'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$meta_desc = $_POST['meta_desc'];
$desc_text = $_POST['desc_text'];
$keyword = $_POST['keyword'];
$slide_image = $_FILES['choosefile']['name'];
$slide_image_tmp = $_FILES['choosefile']['tmp_name'];
$target_path ="../../images/slide_image/";
$target_result = $target_path.basename($_FILES['choosefile']['name']);
move_uploaded_file($slide_image_tmp,$target_result);
}
$insert_product = "INSERT INTO `products`(`product_name`, `cat_id`, `sub_id`, `mrp`, `price`, `quantity`, `meta_desc`, `desc_text`, `keyword`, `image`) VALUES ('$product_name','$type','$type1','$Mrp','$price','$quantity','$meta_desc','$desc_text','$keyword','$slide_image')";
$insert_query_product= mysqli_query($conn,$insert_product);

if($insert_query_product){
    echo "inserted";
    header('location:../products/add-product.php');
}else{

    echo "not";
}
?>