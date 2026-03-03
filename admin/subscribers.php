<?php include_once 'container/header.php'; ?>
			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include_once 'container/nav-menu.php'; ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Subscribers</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Subscribers</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
                                            <?php if(isset($_GET['msg'])){ 
                                                        $msgType=$_GET['msg'];
                                                        
                                            ?>
                                            <div class="alert <?php if($msgType=='success'){ ?> alert-success <?php }elseif($msgType=='failed'){ ?> alert-danger <?php } ?>">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong><?php if($msgType=='success'){ echo 'Success!'; }else{ echo 'OOPS Error'; } ?></strong><br>
                                                                    
                                                </div>
                                            <?php //header( "refresh:2; url=manage-quote.php"); 
                                            } ?>
                                            <!--<a href="add-quote.php" class="mb-xs mt-xs mr-xs btn btn-success">Add</a>-->
                                            <section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<!--<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>-->
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Subscribers</h2>
							</header>
							<div class="panel-body">
                                                            <?php $result=$_admin->select('subscribers'); 
                                                                  //var_dump($result);  
                                                                  if(!empty($result) && isset($result) && count($result)!=0){
                                                                        ?>
                                                                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Email ID</th>
											<!--<th>Status</th>-->
											<th>Subscribed on</th>
											<th class="hidden-phone">Options</th>
										</tr>
									</thead>
									<tbody>
                                                                        <?php    
                                                                        foreach($result as $data){
                                                                            ?>
                                                                            <tr class="gradeX" id="<?php echo $data['id']; ?>">
											<td><?php echo $data['email']; ?></td>
											<!--<td><?php //echo ($data['is_verified']=="yes")?'<span style="background-color: #00C9FF;padding: 5px;color: white;font-weight: bolder;">Verified</span>':'<span style="background-color: darkred;padding: 5px;color: white;font-weight: bolder;">Not-Verified</span>'; ?></td>-->
                                                                                        <td><?php echo date('m-d-Y',strtotime($data['subscribed_on'])); ?></td>
                                                                                        <td><a title="Delete Subscriber" href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
										</tr>
                                                                                <?php
                                                                            
                                                                        }
                                                                        
                                                                  } else
                                                                    echo "No Subscribers!";
                                                            ?>
                                                            </tbody>
								</table>
                                                            
								
										
										
									
							</div>
						</section>
						
					</div>

					
					
					<!-- end: page -->
				</section>
			</div>

			
		</section>
<?php include_once 'container/footer.php'; ?>
		
