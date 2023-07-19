<?php
/*******************************************************************************
* Company Name: Prenero Solutions                                               *
*                                                                      *
* Version: 1.1.1	                                                   *
* Author:  Atiq Ramzan                                    			   *
*******************************************************************************/
if ($_SERVER['SERVER_NAME'] == 'localhost') {
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$dbname = "subhan_studio";
} else { 
	$localhost = "localhost";
	$username = "subhanst_subhan";
	$password = "Prenero1102/*";
	$dbname = "subhanst_studio";
}

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
date_default_timezone_set('Asia/Karachi');

if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  
}
?>