<?php 
session_start();
   unset($_SESSION['login']);
    header("Location:sign-in.php"); // Or wherever you want to redirect
   // exit();
?>
