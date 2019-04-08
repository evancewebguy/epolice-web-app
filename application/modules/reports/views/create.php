<h5><?= $headline ?></h5>

<?= validation_errors("<p style='color:red;'>","</p>") ?>

<?php
	if(isset($flash)){
		echo $flash;
	}
?>

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h6 class="my-0 font-weight-normal">Official details</h6>
          </div>

          <div class="card-body">
						<?php
							$form_location = base_url()."reports/create/".$update_id;
						?>



          <form class="form-horizontal" method="post" action="<?= $form_location ?>">
            <fieldset>

                <div class="form-group row">
                  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Report Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="report_title" value="<?= $report_title ?>" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter The Title of what you are reporting about">
                  </div>
                </div>


                <div class="form-group row">
                  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Report</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="report_description" id="exampleFormControlTextarea1" rows="6" placeholder="Type Your Report Here..."><?php   
                  echo $report_description;
                ?></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-10">
                      <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
                      <button type="submit" name="submit" value="Cancel" class="btn btn-default">Cancel</button>
                  </div>
                </div>

              </fieldset>
            </form>

          </div>
        </div>



<?php

	if(is_numeric($update_id)){ ?>
		<div class="card mb-4 box-shadow">
          <div class="card-header">
            <h6 class="my-0 font-weight-normal">Additional Options</h6>
          </div>

          <div class="card-body">
            <a href="<?= base_url() ?>reports/manage"><button type="button" class="btn btn-default">Back To Manage Page</button></a>
			<?php 
				if($update_id>0){ ?>
					<a href="<?= base_url() ?>reports/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete The Report Entry</button></a>
			<?php
				}
			?>         	
      	  </div>
      	</div>

<?php
	}
?> 



<?php
/*
	if(is_numeric($update_id)){ ?>
		<div class="card mb-4 box-shadow">
          <div class="card-header">
            <h6 class="my-0 font-weight-normal">Image Options</h6>
          </div>

          <div class="card-body">
				<?php
				if($picture==""){ 
				?>
				<a href="<?= base_url() ?>reports/upload_image/<?= $update_id ?>"><button type="button" class="btn btn-primary">Upload Missing Person Image</button></a>
				<?php 
				} else{ 
				?>
				<a href="<?= base_url() ?>reports/delete_image/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Missing Person Image</button></a>
				<?php 
				}
				?>
          </div>
      	</div>
<?php
	}
if($picture!=""){ ?>
		<div class="card mb-4 box-shadow">
          <div class="card-header">
            <h6 class="my-0 font-weight-normal">Image Preview</h6>
          </div>

          <div class="card-body">
				<img src="<?= base_url() ?>homepage_pics/<?= $picture ?>">
					
			</div>
		</div><!--/span--> 
			<?php
				}
        */
			?> 