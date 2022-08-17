<?php session_start();
include('config.php');
include('cart_library.php');

$pid = get_safe_value($conn,$_POST['pid']);
$qty = get_safe_value($conn,$_POST['qty']);
$type = get_safe_value($conn,$_POST['type']);

if($type=='add'){
    $obj->addproduct($pid,$qty);  
    ECHO $obj->totalproduct();  
}

// $login_select = "SELECT * FROM shoping_table WHERE email='$myemail' AND psw='$mypwd'";
// $login_result = mysqli_query($conn,$login_select);
// $login_result_show = mysqli_fetch_assoc($login_result);

// //check if user is login or not
// if(mysqli_num_rows($login_result)>=1){
// $_SESSION['login'] = $login_result_show;
// header('location:../index.php');
// }else{   
//     echo "please fill valid username name and password";
// }


?>