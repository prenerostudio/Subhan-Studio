<?php
include('config.php');	
$mi_id = $_GET['mi_id'];
$sql = "DELETE FROM `modal_shoot` WHERE `mi_id`='$mi_id'";
$result = $connect->query($sql);
if($result){ 
    echo "<script>alert('Record has been deleted...')</script>";
    header('location: modal.php');    
} else {    
	echo "<script>alert('Some error occurred. Try again')</script>";	    
	header('location: modal.php');	            
}
?>