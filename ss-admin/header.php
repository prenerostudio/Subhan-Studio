<?php
session_start();
include('config.php');
ini_set("display_errors", "off");


if (!isset($_SESSION['username'])) {
	$_SESSION['first_name'] = $fname;
	$_SESSION['last_name'] = $lname;
	$_SESSION['msg'] = "You must log in first";
	header('location: index.php');
}

if (isset($_POST['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: index.php");
}


?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
    
		<meta charset="utf-8" />
    
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
		<title>Subhan Studio - Event photographer</title>

		
    
		<link href="css/bootstrap.css" rel="stylesheet" />
    
    
		<link href="css/font-awesome.css" rel="stylesheet" />
     
    
		<link href="js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        
    
		<link href="css/custom.css" rel="stylesheet" />
    

		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

	</head>

	
	<body>
    
		<div id="wrapper">

			<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">

						<span class="sr-only">Toggle navigation</span>
                    
						<span class="icon-bar"></span>
                    
						<span class="icon-bar"></span>
                    
						<span class="icon-bar"></span>
                
					</button>
                
					<a class="navbar-brand" href="dashboard.php">Subhan Studio</a> 
            
				</div>
  
				<div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> 
					Last access : 30 May 2014 &nbsp; 
					<a href="index.php?logout='1'" class="btn btn-danger square-btn-adjust">Logout</a> 
				</div>
        
			</nav>   
          
			<?php
		
			include('sidebar.php');
		
			?>