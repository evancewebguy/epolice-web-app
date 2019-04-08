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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Blog Entry Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php
							$form_location = base_url()."blog/create/".$update_id;
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
							  <label class="control-label" for="typeahead">Blog Entry Title </label>
							  <div class="controls">
								<input type="text" class="span7" name="blog_title" value="<?= $blog_title ?>">
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Blog Entry Keywords</label>
							  <div class="controls">
								<textarea rows="3" class="span7" name="blog_keywords"><?php  
									echo $blog_keywords;
								?></textarea>
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Blog Entry Description</label>
							  <div class="controls">
								<textarea rows="3" class="span7" name="blog_description"><?php  
									echo $blog_description;
								?></textarea>
							  </div>
							</div>     
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Blog Entry Content</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="blog_content"><?php   
									echo $blog_content;
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
						<a href="<?= base_url() ?>blog/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Blog Entry</button></a>
						<?php
							}
						?>
						
						<a href="<?= base_url() ?>blog/manage"><button type="button" class="btn btn-default">Back To Manage Page</button></a>
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
							<a href="<?= base_url() ?>blog/upload_image/<?= $update_id ?>"><button type="button" class="btn btn-primary">Upload Image</button></a>
						<?php 
						} else{ 
						?>
							<a href="<?= base_url() ?>blog/delete_image/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Image</button></a>
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

						<img src="<?= base_url() ?>blog_pics/<?= $picture ?>">
					
					</div>
				</div><!--/span--> 
			
			</div><!--/row-->
			<?php
				}
			?> 