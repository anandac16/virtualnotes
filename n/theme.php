<?php
if($_POST){
	include"db.connect.php";
	$anime = $_POST['anime'];
	$sql = "SELECT name_list,custom_name from list where id_list='$anime'";
	$run = mysql_query($sql);
	$row = mysql_num_rows($run);
	
	if($row==1){
		$fetch = mysql_fetch_array($run);
		$custom_name = $fetch['custom_name'];
		$name_list = $fetch['name_list'];
		include"$custom_path$custom_name.phtml";
	}else{
		echo"<script>alert('Failed to get custom');</script>";
		header('location: index.php');
	}
}else{
	header('location: index.php');
}
?>
