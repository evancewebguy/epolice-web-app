<h1><?= $headline ?></h1>

<?= validation_errors("<p style='color:red;'>","</p>") ?>

<?php
	if(isset($flash)){
		echo $flash;
	}
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Member Entry Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php
							$form_location = base_url()."staff/create/".$update_id;
						?>
						<form class="form-horizontal" method="post" action="<?= $form_location ?>">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Picture Alt </label>
							  <div class="controls">
								<input type="text" class="span7" name="picture_alt" value="<?= $picture_alt ?>" placeholder=" Enter name of the member...">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Member Title </label>
							  <div class="controls">
								<input type="text" class="span7" name="member_title" value="<?= $member_title ?>" placeholder=" Enter name of the member title...e.g MANAGER">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Picture Description </label>
							  <div class="controls">
								<input type="text" class="span7" name="picture_description" value="<?= $picture_description ?>" placeholder=" Enter brief description of member...">
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Additional Options</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<?php 

						if($update_id>0){ ?>
						<a href="<?= base_url() ?>staff/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete The Entire Member Entry</button></a>
						<?php
							}
						?>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			<?php
				}
			?> 



<?php

	if(is_numeric($update_id)){ ?>
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Image Options</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<?php
						if($picture==""){ 
						?>
							<a href="<?= base_url() ?>staff/upload_image/<?= $update_id ?>"><button type="button" class="btn btn-primary">Upload Member Image</button></a>
						<?php 
						} else{ 
						?>
							<a href="<?= base_url() ?>staff/delete_image/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Member Image</button></a>
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Image Preview</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<img src="<?= base_url() ?>staff_pics/<?= $picture ?>">
					
					</div>
				</div><!--/span--> 
			
			</div><!--/row-->
			<?php
				}
			?> 