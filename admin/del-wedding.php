<?php
include('config.php');	
$wi_id = $_GET['wi_id'];
$sql = "DELETE FROM `wedding_shoot` WHERE `wi_id`='$wi_id'";
$result = $connect->query($sql);
if($result){ 
    echo "<script>alert('Record has been deleted...')</script>";
    header('location: wedding-images.php');    
} else {
	echo "<script>alert('Some error occurred. Try again')</script>";	
	 header('location: wedding-images.php'); 	            
}
?>