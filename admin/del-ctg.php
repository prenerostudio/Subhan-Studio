<?php
include('config.php');	
$ctg_id = $_GET['ctg_id'];
$sql = "DELETE FROM `corporate_category` WHERE `ctg_id`='$ctg_id'";
$result = $connect->query($sql);
if($result){
	echo "<script>alert('Record has been deleted...')</script>";    
	header('location: corporate-category.php');    
} else {     
	echo "<script>alert('Some error occurred. Try again')</script>";	    
	header('location: corporate-category.php');
}
?>