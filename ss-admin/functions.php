<?php
include('config.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
	
	$final_pass = md5($password);

	
	$sql = "SELECT * FROM `users` WHERE `username`='$username' && `password`='$final_pass'";
	
	$results = $connect->query($sql);
	
	//echo $sql;
	//die;
	
	
    // Validate the username and password
    if (mysqli_num_rows($results) == 1) {
		
		$urow= mysqli_fetch_array( $results);				
			$_SESSION['username'] = $username;                
			$_SESSION['first_name'] = $urow['first_name'];                
			$_SESSION['last_name'] = $urow['last_name'];               
			               			                
			$_SESSION['user_id'] = $urow['user_id'];				
			$_SESSION['success'] = "You are now logged in";				
			$_SESSION['full_name']= $urow['first_name'] ." " .$urow['last_name'];				
			header('location: dashboard.php');				
		
		
        // Successful login
        //echo "Welcome, $username!";
        // Perform any additional actions or redirect to another page
    } else {
        // Invalid login
		$_SESSION['success_msg'] = "Wrong username/password combination";				
			header('location: index.php');    
        echo "Invalid username or password.";
    }
}





?>