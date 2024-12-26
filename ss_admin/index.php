<!doctype html>
<html class="no-js " lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
        <title>Subhan Studio | Admin Dashboard Sign In</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.min.css">    
    </head>
    <body class="theme-blush">
        <div class="authentication">    
            <div class="container">        
                <div class="row">            
                    <div class="col-lg-4 col-sm-12">                
                        <form class="card auth_form" method="post" action="functions.php">                    
                            <div class="header">                        
                                <img class="logo" src="../img/logo.png" alt="">                        
                                <h5>Log in</h5>                    
                            </div>                    
                            <div class="body">                        
                                <div class="input-group mb-3">                            
                                    <input type="text" class="form-control" placeholder="Username" name="username">                            
                                    <div class="input-group-append">                                
                                        <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>                            
                                    </div>                        
                                </div>                        
                                <div class="input-group mb-3">                            
                                    <input type="text" class="form-control" placeholder="Password" name="password">                            
                                    <div class="input-group-append">                                                                
                                        <span class="input-group-text"><a href="forgot-password.html" class="forgot" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>                            
                                    </div>
                                </div>                        
                                <div class="checkbox">                            
                                    <input id="remember_me" type="checkbox">                            
                                    <label for="remember_me">Remember Me</label>                        
                                </div>                        
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</button>                                                
                                <div class="signin_with mt-3">                            
                                    <p class="mb-0">or Sign Up using</p>                            
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round facebook">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </button>                            
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round twitter">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </button>                            
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round google">
                                        <i class="zmdi zmdi-google-plus"></i>
                                    </button>                        
                                </div>                    
                            </div>                
                        </form>                
                        <div class="copyright text-center">                    
                            &copy;                    
                            <script>document.write(new Date().getFullYear())</script>,                    
                            <span><a href="templatespoint.net">Templates Point</a></span>                
                        </div>            
                    </div>            
                    <div class="col-lg-8 col-sm-12">                
                        <div class="card">                    
                            <img src="images/signin.svg" alt="Sign In"/>                
                        </div>            
                    </div>        
                </div>    
            </div>
        </div>       
        <script src="bundles/libscripts.bundle.js"></script>
        <script src="bundles/vendorscripts.bundle.js"></script> 
    </body>
</html>