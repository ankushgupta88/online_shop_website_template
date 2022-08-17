<?php
include('config.php');
session_start();
$product_id = $_POST['product_id'];
//echo $product_id;exit;
 $product_quantity = $_POST['product_qty'];

$status="";
//add item in cart
if($_POST['action'] == 'add_to_cart'){
	
  //slect data
    $slect_cart = "SELECT* FROM products WHERE product_id ='$product_id'";
	$select_query = mysqli_query($conn,$slect_cart);
	$select_show = mysqli_fetch_assoc($select_query);
//echo($select_show );exit;
        //Check session is set or not
        if(isset($_SESSION["shopping_cart"])){
			//print_r ($_SESSION["shopping_cart"]);exit;
    		$item_array_id = array_column($_SESSION["shopping_cart"], "product_id");
    		if(!in_array($product_id, $item_array_id)){
				//print_r($item_array_id);exit;
    			$count = count($_SESSION["shopping_cart"]);
				//echo($count);exit;
    			$item_array = array(
    			
        			'product_id' =>$product_id,
        			'product_name'	=>	$select_show['product_name'],
        			'price_tag'	=>	$select_show['price'],
        			'keyword'	=>$select_show['keyword'],
        			'desc_text'	=>	$select_show['desc_text'],
        			'image'	=>	$select_show['image'],
        			'quantity_tag'	=>	$product_quantity,
        			
    			);//print_r ($item_array);exit;
    			$_SESSION["shopping_cart"][$count] = $item_array;
    			$status = "<div class='view-cart-page'><a href='".WEBSITE_URL."cart.php"."'>View Cart</a></div><p class='msg-success'>Product is added to your cart!ssdds</p>";
    		} else {
    		    $status = "<p class='msg-unsuccess'>Product is already added to your cart!</p>";	
    		}
    	} else {
    		$item_array = array(
    			'product_id' => $product_id,
    			
    			'product_name'	=>$select_show['product_name'],
    			'price_tag'	=>$select_show['price'],
    			'keyword'	=>$select_show['keyword'],
    			'desc_text'	=>$select_show['desc_text'],
    			'image'	=>	$select_show['image'],
    			'quantity_tag'	=>	$product_quantity,
    		);
    		$_SESSION["shopping_cart"][0] = $item_array;
    		//message
    		$status = "<div class='view-cart-page'><a href='".WEBSITE_URL."cart.php"."'>View Cart</a></div><p class='msg-success'>Product is added to your cartfdf</p>";
    		
    	}
  
    echo $status;
}


// Code for Remove a Product from Cart
// if($_POST["action"] == "delete-product") {
// $item_id = $_POST["product_id"];
// foreach($_SESSION["shopping_cart"] as $keys => $values){
// 	//print_r ($_SESSION["shopping_cart"]);exit;
// 		if($values["product_id"] == $item_id){
// 			//echo $item_id;exit;
// 			unset($_SESSION["shopping_cart"][$keys]);
// }
// }}
//Remove product item from cart
// if($_POST["action"] == "remove_cart_item"){
//     $item_id = $_POST["product_id"]; 
// 	foreach($_SESSION["shopping_cart"] as $keys => $values){
// 		if($values["item_id"] == $item_id){
// 			unset($_SESSION["shopping_cart"][$keys]);
// 			echo "<p class='msg-success'>Product Item Removed From Cart.</p>";
// 		}
// 	}
// }

// Code for Remove a Product from Cart
if($_POST["action"] == "delete-product") {
 
$item_id = $_POST["product_id"]; 
if(!empty($_SESSION["shopping_cart"])) {

    foreach($_SESSION["shopping_cart"] as $select => $val) {  
		if($val["product_id"] == $item_id){
        unset($_SESSION["shopping_cart"][$select]);}

    }
}
}