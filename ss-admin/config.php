<?php
/*******************************************************************************
* Company Name: Prenero Studio                                               *
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
    $username = "prenqqnb_yasir";
    $password = "PreneroStudio1102/*";
    $dbname = "prenqqnb_subhanstudio";
}
$connect = new mysqli($localhost, $username, $password, $dbname);
date_default_timezone_set('Asia/Karachi');
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
}
?>