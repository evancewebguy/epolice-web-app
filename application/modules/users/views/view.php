	<h1>User Account Profile Preview</h1>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Other Options</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<a href="<?= base_url() ?>youraccount/manage"><button type="button" class="btn btn-default">Back To Manage Page</button></a>
					</div>
				</div><!--/span--> 
			
			</div><!--/row-->
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>User Profile</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
							  	<th></th>
								<th class="span8"><center>Profile</center></th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td>
									<div class="card">
                            		<div class="card-block">
                                		<center class="m-t-30"> <img src="<?= base_url() ?>profile_pics/<?= $picture ?>" class="img-circle img-responsive" width="150">
                                		    <h3 class="card-title m-t-10"> <?= $firstname ?> <?= $lastname ?></h3>
                                		    <h4 class="card-subtitle"><?= $role ?></h4>
                                		    <div class="row text-center justify-content-md-center">
                                		        <div class="col-4"><center><small>Hello world</small></center></div>
                                		        
                                		    </div>
                                		</center>
                            		</div>
                        			</div>
								</td>
								<td>

									<div class="card">
                            			<div class="card-block">
                            				<div class="span12">
                            			<table class="table table-striped table-bordered bootstrap-datatable ">
                            			<tbody>
                            			<tr>
                            				<h4><b>Full Name :</b></h4>
                            				<?= $firstname ?> <?= $lastname ?>
                            			
                            			<hr>
                            				<h4><b>Identification Number :</b></h4>
                            				 <?= $identification_no ?>
                            			<hr>
                            				 <h4><b>Email :</b></h4>
                            				 <?= $email ?>
                            			<hr>
                            				 <h4><b>First Address :</b></h4>
                            				 <?= $address1 ?>

                            			<hr>
                            				 <h4><b>Second Address :</b></h4>
                            				 <?= $address2 ?>
                            			<hr>
                            				 <h4><b>County :</b></h4>
                            				 <?= $county ?>

                            			<hr>
                            				 <h4><b>Town :</b></h4>
                            				 <?= $town ?>
                            			<hr>
                            				 <h4><b>Telephone Number :</b></h4>
                            				 <?= $telnum ?>

                            			
                            			</tr>
                            			</tbody> 
                            			</table>
                            			</div>
                        			</div>
                        		</div>
								</td>
							</tr>
						  </tbody>
					  </table>

					</div>
				</div><!--/span--> 
			
			</div><!--/row-->




