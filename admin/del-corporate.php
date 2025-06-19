<?php
include('config.php');	
$ci_id = $_GET['ci_id'];
$sql = "DELETE FROM `corporate_images` WHERE `ci_id`='$ci_id'";
$result = $connect->query($sql);
if($result){ 
    echo "<script>alert('Record has been deleted...')</script>";
    header('location: corporate-shoot.php');	
} else {    
	echo "<script>alert('Some error occurred. Try again')</script>";	
    header('location: corporate-shoot.php');	
}
?>