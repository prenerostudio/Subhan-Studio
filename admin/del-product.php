<?php
include('config.php');	
$ps_id = $_GET['ps_id'];
$sql = "DELETE FROM `product_shoot` WHERE `ps_id`='$ps_id'";
$result = $connect->query($sql);
if($result){
    echo "<script>alert('Record has been deleted...')</script>";
    header('location: product-shoot.php');    
} else {
	echo "<script>alert('Some error occurred. Try again')</script>";	    
	header('location: product-shoot.php');	    	 
}
?>