<?php

include('config.php');	

$img_id = $_GET['img_id'];



	$sql = "DELETE FROM `modal_shoot` WHERE `img_id`='$img_id'";
	$result = $connect->query($sql);

	if($result){ 
		echo'<br>'; 
		echo ' '; 
		echo "<script>alert('Record has been deleted...')</script>";
		header('location: modal.php');
	} else {
		echo "<script>alert('Some error occurred. Try again')</script>";
		header('location: modal.php');
	}
?>