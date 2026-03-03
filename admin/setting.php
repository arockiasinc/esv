<?php include_once 'container/header.php'; ?>
			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include_once 'container/nav-menu.php'; ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Setting</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Setting</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
                                        <?php $_errors=array(); if(isset($_POST['update'])){
                                            
                                                    if(empty($_POST['name'])){
                                                        $_errors[]='Enter the name';
                                                    }
                                                   
                                            
                                            
                                                    if(empty($_POST['email'])){
                                                        $_errors[]='Enter the email';
                                                    }
                                                    elseif(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
                                                        $_errors[]='Enter the valid email';
                                                    }
                                                    else{
                                                        $_email=$_POST['email'];
                                                    }
                                                    
                                                    if(empty($_POST['current_password'])){
                                                        $_errors[]='Enter the current password';
                                                    }
                                                    else{
                                                        
                                                        if($_SESSION['admin']['adminPassword']!=sha1($_POST['current_password'])){
                                                            $_errors[]='Invalid the current password';
                                                        }
                                                        else{
                                                            $currentPassword=$_POST['current_password'];
                                                        }
                                                        
                                                    }
                                                    
                                                    if(empty($_POST['new_password'])){
                                                        $_errors[]='Enter the new password';
                                                    }
                                                    else{
                                                        $newPassword=$_POST['new_password'];
                                                    }
                                                    
                                                    if(empty($_POST['confirm_password'])){
                                                        $_errors[]='Enter the confirm password';
                                                    }
                                                    else{
                                                        
                                                        if(!empty($newPassword)){
                                                            if($newPassword!=$_POST['confirm_password']){
                                                                $_errors[]='Mismatch the new password';
                                                            }
                                                            else{
                                                                $confirmPassword=$_POST['confirm_password'];
                                                            }
                                                            
                                                        }
                                                    }
                                                    
                                                    if(!empty($_POST['name']) && !empty($_email) && !empty($currentPassword) && !empty($newPassword) && !empty($confirmPassword)){
                                                        
                                                        $_data=array('name'=>$_POST['name'],'email'=>$_email,'password'=>sha1($confirmPassword),'updated'=>date('Y-m-d H:i:s'),'id'=>$_SESSION['admin']['adminId']);
                                                        
                                                        $result=$_admin->updateSetting($_data);
                                                        if($result==1){
                                                            $msg='<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Successfully Updated</strong></div>';
                                                            header( "refresh:2; url=sign-out.php");
                                                        }
                                                        else{
                                                             $msg='<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Not Update</strong></div>';
                                                        }
                                                        
                                                    }
                                                    
                                                            
                                            
                                            
                                        } ?>
					<!-- start: page -->
                                        
                                        <?php if(isset($msg)){ echo $msg; } ?>
                                        
                                        <?php if(!empty($_errors)){ ?>
                                                    <div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <?php foreach($_errors as $error){ ?>
                                                        <strong><?php echo $error; ?></strong><br>
                                                        <?php } ?>                        
                                                    </div>
                                                    <?php } ?>
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>
						
										<h2 class="panel-title">Setting</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" method="post">
                                                                                    
                                                                                        
                                                                                        <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Name</label>
												<div class="col-md-6">
                                                                                                    <input type="text" name="name" class="form-control" value="<?php echo !empty($_POST['name'])?$_POST['name']:(!empty($_SESSION['admin']['adminName'])?$_SESSION['admin']['adminName']:'') ?>" id="inputDefault">
												</div>
											</div>
                                                                                    
                                                                                    
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Email</label>
												<div class="col-md-6">
                                                                                                    <input type="text" name="email" class="form-control" value="<?php echo !empty($_POST['email'])?$_POST['email']:(!empty($_SESSION['admin']['adminEmail'])?$_SESSION['admin']['adminEmail']:'') ?>" id="inputDefault">
												</div>
											</div>
                                                                                    
                                                                                        <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Current Password</label>
												<div class="col-md-6">
                                                                                                    <input type="password" name="current_password"  class="form-control" id="inputDefault" value="<?php echo !empty($_POST['current_password'])?$_POST['current_password']:''; ?>" >
												</div>
											</div>
                                                                                    
                                                                                        <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">New Password</label>
												<div class="col-md-6">
													<input type="password" name="new_password" class="form-control" id="inputDefault" value="<?php echo !empty($_POST['new_password'])?$_POST['new_password']:''; ?>" >
												</div>
											</div>
                                                                                    
                                                                                    <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Confirm Password</label>
												<div class="col-md-6">
													<input type="password" name="confirm_password" class="form-control" id="inputDefault" value="<?php echo !empty($_POST['confirm_password'])?$_POST['confirm_password']:''; ?>" >
												</div>
											</div>
                                                                                    
                                                                                    <button type="submit" name="update" class="mb-xs mt-xs mr-xs btn btn-primary">Update</button>
						
										</form>
									</div>
								</section>
						
								
							</div>
						</div>

					
					
					<!-- end: page -->
				</section>
			</div>

			
		</section>
<?php include_once 'container/footer.php'; ?>
		