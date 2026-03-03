<?php include_once 'classes/access.php'; $_access=new Access();  ?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
<title>Admin</title>
		<meta name="keywords" content="Admin" />
		<meta name="description" content="Admin ">
		<meta name="author" content="okler.net">
		<link rel="shortcut icon" href="favicon.ico">

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
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="logo.webp" height="54" alt="Admin" />
				</a>
                                <?php if(isset($_POST['reset'])){
                                        $_error='';
                                        $email = $_POST['email'];
                                        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                                           $_data=array('email'=>$email,'status'=>1);
                                           $Result=$_access->forgotPassword($_data);//var_dump($Result);return;
                                           $favcolor = "red";

                                            switch ($Result) {
                                                case 0:
                                                    $_error ='Invalid Email id'; 
                                                    break;
                                                case 1:
                                                    $success ='We have send you the new password';
                                                    break;
                                                case 2:
                                                    $_error ='OOPS Error Please try again later';
                                                    break;
                                                case 3:
                                                    $_error ='OOPS Error Please try again later';
                                                    break;
                                                default:
                                                    $_error ='OOPS Error';
                                            }
                                           
                                           
                                        }
                                        else {
                                            $_error ='Enter the valid email address';
                                        }
                                        
                                    
                                } ?>
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Recover Password</h2>
					</div>
					<div class="panel-body">
						<!--<div class="alert alert-info">
							<p class="m-none text-weight-semibold h6">Enter your e-mail below and we will send you reset instructions!</p>
						</div>-->
                                            <?php if(!empty($_error)){ ?>
                                                    <div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        
                                                        <strong><?php echo $_error; ?></strong><br>
                                                                                
                                                    </div>
                                                    <?php }if(!empty($success)){ ?>
                                                    <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        
                                                        <strong><?php echo $success; ?></strong><br>
                                                                                
                                                    </div>
                                                    <?php } ?>
                                            <form action="" method="POST">
							<div class="form-group mb-none">
								<div class="input-group">
									<input name="email" type="name" placeholder="E-mail" class="form-control input-lg" />
									<span class="input-group-btn">
                                                                            <button class="btn btn-primary btn-lg" name="reset" type="submit">Reset!</button>
									</span>
								</div>
							</div>

                                                <p class="text-center mt-lg">Remembered? <a href="index.php">Sign In!</a>
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