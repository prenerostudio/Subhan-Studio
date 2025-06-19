<?php
include('config.php');	
$post_id = $_GET['post_id'];
$sql = "DELETE FROM `blog_post` WHERE `post_id` = '$post_id'";
$result = $connect->query($sql);
if($result){
	echo "<script>alert('Record has been deleted...')</script>";    
	header('location: all-post.php');    
} else {     
	echo "<script>alert('Some error occurred. Try again')</script>";	    
	header('location: all-post.php');
}
?>