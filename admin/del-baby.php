<?php
include('config.php');	
$bs_id = $_GET['bs_id'];
$sql = "DELETE FROM `baby_shoot` WHERE `bs_id`='$bs_id'";
$result = $connect->query($sql);
if($result){
    echo "<script>alert('Record has been deleted...')</script>";
    header('location: baby-shoot.php');
} else {        
	echo "<script>alert('Some error occurred. Try again')</script>";	    
	header('location: baby-shoot.php');
}
?>