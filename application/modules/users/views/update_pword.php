<h4><?= $headline ?></h4>

<?= validation_errors("<p style='color:red;'>","</p>") ?>

<?php
	if(isset($flash)){
		echo $flash;
	}
?>


        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h6 class="my-0 font-weight-normal">Update Password</h6>
          </div>

          <div class="card-body">
            <?php
				$form_location = base_url()."users/update_pword/".$update_id;
			?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
				<fieldset>

                <div class="form-group row">
                  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
                  <div class="col-sm-6">
                    <input type="password" name="pword" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter Password">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Repeat Password</label>
                  <div class="col-sm-6">
                    <input type="password" name="repeat_pword" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Repeat Password">
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


