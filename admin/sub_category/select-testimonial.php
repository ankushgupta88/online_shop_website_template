

<?php
include('../config.php');

$query_select = "SELECT * FROM testimonial";
$query_select = mysqli_query($conn,$query_select);

if(mysqli_num_rows($query_select)>= 1)

$select_show = mysqli_fetch_assoc($query_select);
echo $select_show['test_name'];
?>