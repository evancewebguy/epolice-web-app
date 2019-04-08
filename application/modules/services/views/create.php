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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Services Entry Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php
							$form_location = base_url()."services/create/".$update_id;
						?>
						<form class="form-horizontal" method="post" action="<?= $form_location ?>">
						  <fieldset>
						  	<div class="control-group">
							  <label class="control-label" for="typeahead">Date Published </label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" name="date_published" value="<?= $date_published ?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Services Entry Title </label>
							  <div class="controls">
								<input type="text" class="span7" name="services_title" value="<?= $services_title ?>">
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Services Entry Keywords</label>
							  <div class="controls">
								<textarea rows="3" class="span7" name="services_keywords"><?php  
									echo $services_keywords;
								?></textarea>
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Services Entry Description</label>
							  <div class="controls">
								<textarea rows="3" class="span7" name="services_description"><?php  
									echo $services_description;
								?></textarea>
							  </div>
							</div>     
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Services Entry Content</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="services_content"><?php   
									echo $services_content;
								?></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Author </label>
							  <div class="controls">
								<input type="text" class="span7" name="author" value="<?= $author ?>">
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
						<a href="<?= base_url() ?>services/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Services Entry</button></a>
						<?php
							}
						?>
						<a href="<?= base_url().$services_url ?>"><button type="button" class="btn btn-default">View Services Entry</button></a>
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
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<?php
						if($picture==""){ 
						?>
							<a href="<?= base_url() ?>services/upload_image/<?= $update_id ?>"><button type="button" class="btn btn-primary">Upload Image</button></a>
						<?php 
						} else{ 
						?>
							<a href="<?= base_url() ?>services/delete_image/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Image</button></a>
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

						<img src="<?= base_url() ?>services_pics/<?= $picture ?>">
					
					</div>
				</div><!--/span--> 
			
			</div><!--/row-->
			<?php
				}
			?> 