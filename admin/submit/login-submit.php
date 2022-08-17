<?php
session_start();
include('../config.php');
$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);

$admin_login = "SELECT * FROM shoping_table WHERE email='$email' AND psw='$password' AND user_type ='admin'";
$admin_result = mysqli_query($conn,$admin_login);
$login_query = mysqli_fetch_assoc($admin_result);

if(mysqli_num_rows($admin_result)>=1){
($_SESSION['login'] = $login_query);?>
   <script>
window.location.href = "index.php";
   </script> 
<?php } else { 
    echo "Your Login Name or Password is invalid";
}
?>

