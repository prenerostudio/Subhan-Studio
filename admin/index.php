<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">
	<head>                
		<meta charset="utf-8" />    	
		<title>Subhan Studio | Admin Section</title>    	
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    	
		<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />    	
		<meta content="" name="author" />    	
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />    	
		<!-- App favicon -->    	
		<link rel="shortcut icon" href="images/favicon.ico">           	
		<!-- App css -->    	
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />    	
		<link href="css/icons.min.css" rel="stylesheet" type="text/css" />    	
		<link href="css/app.min.css" rel="stylesheet" type="text/css" />	    
	</head>

    
    <!-- Top Bar Start -->
    <body>
    <div class="container-xxl">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 bg-black auth-header-box rounded-top">
                                    <div class="text-center p-3">
                                        <a href="index-2.html" class="logo logo-admin">
                                            <img src="images/logo-light.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Let's Get Started.</h4>   
                                        <p class="text-muted fw-medium mb-0">Sign in to continue to Dashboard.</p>  
                                    </div>
                                </div>
                                <div class="card-body pt-0">                                    
                                    <form class="my-4" method="post" action="functions.php">            
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">                               
                                        </div><!--end form-group--> 
            
                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>                                            
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">                            
                                        </div><!--end form-group--> 
            
                                        <div class="form-group row mt-3">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div><!--end col--> 
                                            <div class="col-sm-6 text-end">
                                                <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                            </div><!--end col--> 
                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" name="login_user" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div>
                                        </div>                          
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                                     
    </div>
    </body>

</html>