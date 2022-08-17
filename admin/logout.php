<?php session_start();
    session_destroy(); 
    header("Location:login.php"); // Or wherever you want to redirect
    exit();
?>
