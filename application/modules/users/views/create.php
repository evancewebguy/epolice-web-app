<h1><?= $headline ?></h1>

<?= validation_errors("<p style='color:red;'>","</p>") ?>

<?php
	if(isset($flash)){
		echo $flash;
	}

		if(is_numeric($update_id)){ ?>
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2 style="color:white;"><i class="halflings-icon white edit"></i><span class="break"></span>Additional Options</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<a href="<?= base_url() ?>youraccount/manage"><button type="button" class="btn btn-default">Back To Manage Page</button></a>
						<?php 

						if($update_id>0){ ?>
						<a href="<?= base_url() ?>youraccount/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Account User</button></a>
						<?php
							}
						?>

						<a href="<?= base_url() ?>youraccount/update_pword/<?= $update_id ?>"><button type="button" class="btn btn-primary">Update Password</button></a>

					</div>
				</div><!--/span--> 
			
			</div><!--/row-->
			<?php
				}
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white briefcase"></i><span class="break"></span>User Account Entry Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php
							$form_location = base_url()."youraccount/create/".$update_id;
						?>
						<form class="form-horizontal" method="post" action="<?= $form_location ?>">
						  <fieldset>
						  	<!--
						  	<div class="control-group">
							  <label class="control-label" for="typeahead">Date created </label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker span7" id="date01" name="date_created" value="<?= $date_created ?>" placeholder=" Click Here To Select Date">
							  </div>
							</div>-->

							<div class="control-group">
							  <label class="control-label" for="typeahead">UserName </label>
							  <div class="controls">
								<input type="text" class="span7" name="username" value="<?= $username ?>" placeholder=" Enter Your First Name">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">First Name </label>
							  <div class="controls">
								<input type="text" class="span7" name="firstname" value="<?= $firstname ?>" placeholder=" Enter Your First Name">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Last Name </label>
							  <div class="controls">
								<input type="text" class="span7" name="lastname" value="<?= $lastname ?>" placeholder=" Enter Your Last Name">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">User Role</label>
							  <div class="controls">
							  	<?php
							  	$additional_dd = 'id="selectError3"';
								$options = array(
        								''         => 'Select user role...',
        								'1'           => 'admin'
								);
								echo form_dropdown('role',$options, $role ,$additional_dd);

								?>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Identification Number </label>
							  <div class="controls">
								<input type="text" class="span7" name="identification_no" value="<?= $identification_no ?>" placeholder=" User User ID number">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">County</label>
							  <div class="controls">
								<input type="text" class="span7" name="county" value="<?= $county ?>" placeholder=" county of residence">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">First Address </label>
							  <div class="controls">
								<input type="text" class="span7" name="address1" value="<?= $address1 ?>" placeholder=" first address">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Second Address <span style="color:blue;">(optional)</span></label>
							  <div class="controls">
								<input type="text" class="span7" name="address2" value="<?= $address2 ?>" placeholder=" Second address">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Telephone Number </label>
							  <div class="controls">
								<input type="text" class="span7" name="telnum" value="<?= $telnum ?>" placeholder=" User Phone Number starting with 07XX">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Email</label>
							  <div class="controls">
								<input type="text" class="span7" name="email" value="<?= $email ?>" placeholder=" User Email Address">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Town </label>
							  <div class="controls">
								<input type="text" class="span7" name="town" value="<?= $town ?>" placeholder=" Second address">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
							  <button type="submit" class="btn" name="submit" value="Cancel">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

<?php

	if(is_numeric($update_id)){ ?>
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2 style="color:white;"><i class="halflings-icon white edit"></i><span class="break"></span>Image Options</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<?php
						if($picture==""){ 
						?>
							<a href="<?= base_url() ?>youraccount/upload_image/<?= $update_id ?>"><button type="button" class="btn btn-primary">Upload User Profile Image</button></a>
						<?php 
						} else{ 
						?>
							<a href="<?= base_url() ?>youraccount/delete_image/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Image</button></a>
						<?php 
						}
						?>
					</div>
				</div><!--/span--> 
			
			</div><!--/row-->
			<?php
				}
		


	if($picture!=""){ ?>
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2 style="color:white;"><i class="halflings-icon white edit"></i><span class="break"></span>Image Preview</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<img src="<?= base_url() ?>profile_pics/<?= $picture ?>">
					
					</div>
				</div><!--/span--> 
			
			</div><!--/row-->
			<?php
				}
			?> 