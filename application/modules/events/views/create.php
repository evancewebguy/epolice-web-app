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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Event Entry Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php
							$form_location = base_url()."events/create/".$update_id;
						?>
						<form class="form-horizontal" method="post" action="<?= $form_location ?>">
						  <fieldset>
						  	<div class="control-group">
							  <label class="control-label" for="typeahead">Event Date </label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" name="event_date" value="<?= $event_date ?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Event Title </label>
							  <div class="controls">
								<input type="text" class="span7" name="event_title" value="<?= $event_title ?>">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Event Description</label>
							  <div class="controls">
								<input type="text" class="span7" name="event_description" value="<?= $event_description ?>">
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
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<?php 

						if($update_id>0){ ?>
						<a href="<?= base_url() ?>events/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Event Entry</button></a>
						<?php
							}
						?>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			<?php
				}
			?> 


