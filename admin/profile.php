<?php include_once 'container/header.php'; ?>
			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include_once 'container/nav-menu.php'; ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Profile</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Profile</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>
						
										<h2 class="panel-title">Profile</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" method="get">
                                                                                    
                                                                                    
                                                                                    
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Name</label>
												<div class="col-md-6">
                                                                                                    <input type="text" class="form-control" id="inputDefault" value="<?php echo !empty($_SESSION['admin']['adminName'])?$_SESSION['admin']['adminName']:''; ?>" disabled="disabled">
												</div>
											</div>
                                                                                    
                                                                                        <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Email</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo !empty($_SESSION['admin']['adminEmail'])?$_SESSION['admin']['adminEmail']:''; ?>" disabled="disabled" >
												</div>
											</div>
                                                                                    
                                                                                        
						
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
		