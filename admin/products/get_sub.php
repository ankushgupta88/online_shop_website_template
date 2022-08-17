<?php
	include '../config.php';
	 
if($_POST['type2'] == ""){
	$result3 = "SELECT * FROM category";
	$result4 = mysqli_query($conn,$result3);
	$str="";
	while($row2 = mysqli_fetch_array($result4))
	{
		$str .= "<option value= '{$row2['cat_id']}'> {$row2['cat_name']}</option>";
		
	}

}else if($_POST['type2'] == "sub"){
	$result3 = "SELECT * FROM sub_category WHERE cat_id={$_POST['ids']}"; 
	$result4 = mysqli_query($conn,$result3);
	
	$str="";
	while($row2 = mysqli_fetch_array($result4)){
		$str .= "<option value= '{$row2['sub_id']}'> {$row2['sub_name']}</option>";
		
	}
}
 echo $str;
?>
