<?php
include_once 'classes/access.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
 $_access=new Access(); //var_dump($_access);exit;  ?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
<title>Admin Login</title>
		<link rel='shortcut icon' type='image/x-icon' href='favicon.ico'/> 
		<meta name="keywords" content="Admin" />
		<meta name="description" content="Admin">
		<meta name="author" content="okler.net">
		
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
            <?php 
                        $_errors=array();
                        if(isset($_POST['signin'])){
                            
                            if(empty($_POST['name'])){
                                $_errors[]='Enter the Username';
                            }
                            
                            if(empty($_POST['password'])){
                                $_errors[]='Enter the Password';
                            }
                            
                            if(!empty($_POST['name']) && !empty($_POST['password'])){
                                    $_name=$_POST['name'];
                                    $_password=$_POST['password'];
                                    $_data=array('name'=>$_name,'password'=>sha1($_password),'status'=>1);
                                    $result=$_access->signIn($_data);
                                    //var_dump($result);
                                    if($result==1){
                                        $msg='<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Successfully signed in</strong></div>';
                                        header( "refresh:2; url=subscribers.php");
                                    }
                                    else{
                                        $msg='<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Invalid User name / Password</strong></div>';
                                    }
                                    
                            }
                            
                        }
                        
            
            
            ?>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
                                    <img src="logo.webp" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<form action="" method="post">
                                                    
                                                    <?php if(isset($msg)){ echo $msg; } ?>
                                                    
                                                    
                                                    <?php if(isset($_GET['msg'])){ 
                                                               $msg=$_GET['msg'];  
                                                               if($msg=='auth'){
                                                                  $_msg='Please Login'; 
                                                               }
                                                               elseif($msg=='success'){
                                                                   $_msg='Successfully signed out'; 
                                                               }
                                                               elseif($msg=='failed'){
                                                                   $_msg='OOPS Error'; 
                                                               }
                                                               else{
                                                                   $_msg='OOPS Error'; 
                                                               }
                                                               header( "refresh:2; url=index.php");
                                                    ?>
                                                    <div class="alert <?php if($msg=='auth' || $msg=='failed'){ ?>alert-danger<?php }else{ ?>alert-success<?php  } ?>">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <strong><?php if(!empty($_msg)){ echo $_msg; } ?></strong><br>
                                                    </div>
                                                    <?php } ?>
                                                   
                                                    <?php if(!empty($_errors)){ ?>
                                                    <div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <?php foreach($_errors as $error){ ?>
                                                        <strong><?php echo $error; ?></strong><br>
                                                        <?php } ?>                        
                                                    </div>
                                                    <?php } ?>
                                                    
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
                                                                    <input name="name" type="text" class="form-control input-lg" value="<?php echo !empty($_POST['name'])?$_POST['name']:''; ?>" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
                                                                        <a href="forgot-password.php" class="pull-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
                                                                    <input name="password" type="password" class="form-control input-lg" value="<?php echo !empty($_POST['password'])?$_POST['password']:''; ?>" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<!--<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>-->
								<div class="col-sm-8">
                                                                    <button type="submit" name="signin" class="btn btn-primary">Sign In</button>
								</div>
							</div>

							<!--<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>

							<p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a>-->

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2021. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>
