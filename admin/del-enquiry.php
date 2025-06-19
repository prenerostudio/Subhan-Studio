<?php
include('config.php');	
$contact_id = $_GET['contact_id'];
$sql = "DELETE FROM `contact` WHERE `contact_id` = '$contact_id'";
$result = $connect->query($sql);
if($result){
	echo "<script>alert('Record has been deleted...')</script>";    
	header('location: contact-enquiries.php');    
} else {     
	echo "<script>alert('Some error occurred. Try again')</script>";	    
	header('location: contact-enquiries.php');
}
?>