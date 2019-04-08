<h5><?= $headline ?></h5>

<?php
	if(isset($flash)){
		echo $flash;
	}
?>
		<div class="card mb-4 box-shadow">
          <div class="card-header">
            <h6 class="my-0 font-weight-normal">Confirm Delete</h6>
          </div>

          <div class="card-body">
 					<p>Are you sure you want to delete the missing person entry?</p>
					
					<?php
						$attributes = array('class'=> 'form-horizontal');
						echo form_open('admin_reports/delete/'.$update_id, $attributes);
					?>
					<fieldset>
						<div class="control-group" style="height: 100px;">
							<button type="submit" class="btn btn-danger" name="submit" value="Yes - Delete Entry">Yes - Delete Entry</button>
							<button type="submit"class="btn" name="submit" value="Cancel">Cancel</button>
						</div>
					</fieldset>
					</form>
          </div>
      	</div>


