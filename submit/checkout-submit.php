        <?php 
        session_start();
        
       

        if(!isset($_SESSION["login"])){ ?>

         <?php echo '<p style="color: Red">Please log in first</p>'; ?>
       

    <?php  } else { 
        include('../config.php');
        $check = $_SESSION["login"];
        $check1 = implode(',', $check);
      $new_cart = $_SESSION["shopping_cart"];


        $payment = $_REQUEST['payment'];
        $sub_total = 0;
        $total1=0;
//for single products

        foreach($new_cart as $keys => $value){  
          $total1 = $total1 + ($value['price_tag'] * $value['quantity_tag']);
          $total2 = $value['price_tag'] * $value['quantity_tag'];
        }
            $insert_order = "INSERT INTO `orders`(`user_id`,`amount`,`payment_method`) VALUES ('$check1','$total1','$payment')";
            $insert_query = mysqli_query($conn,$insert_order);

        if ($insert_query) {

            // Obtain last inserted id
            $last_id = mysqli_insert_id($conn);
           
        foreach($new_cart as $keys => $value){
            $new = $value['product_id'];
            $new1 = $value['product_name'];
            $new2 = $value['quantity_tag'];
            $get_price = $value['price_tag'];
            

             $insert_order1 =  "INSERT INTO `order_item`( `order_id`,`product_id`, `amount`, `product_name`, `quantity`) VALUES ('$last_id','$new','$get_price','$new1','$new2')";
             $insert_order_query = mysqli_query($conn,$insert_order1);

             // unset session
             unset($_SESSION['shopping_cart']); }
            echo '<p style="color: Red">order place successfully</p>'; 
       
        }
            else {
            echo "not";
        }
}
        ?>
    <script>
        setTimeout(function () {
            $(".payment_responce ").fadeOut(5000);
            window.location.href = WEBSITE_URL+"/checkout.php";
        }, 2000);
    </script>
