<h4><?= $headline ?></h4>

<div class="card mb-4 box-shadow">
    <div class="card-header">
      <h6 class="my-0 font-weight-normal">Upload Image</h6>
    </div>
	<div class="card-body">
		<?php
			if(isset($error)){
				foreach($error as $value){
					echo $value;
				}
			}

		$attributes = array('class' => 'form-horizontal');
		echo form_open_multipart('missing_person/do_upload/'.$update_id, $attributes);
		?>
		<p style="margin-top: 12px;">Please chose a file from your computer and press 'Upload'.</p>
			<fieldset>
				<div class="control-group" style="height: 100px;">
					<label class="control-label" for="fileInput">File Input</label>
					<div class="controls">
						<input type="file" class="input-file uniform_on" name="userfile">
					</div>
				</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Upload</button>
						<button type="submit" name="submit" value="Cancel" class="btn btn-default">Cancel</button>
					</div>
				</fieldset>
	</div>
</div>











		

						<?php
						/*
						if(isset($error)){
							foreach($error as $value){
								echo $value;
							}
						}

						?>

						<?php
						$attributes = array('class' => 'form-horizontal');
						echo form_open_multipart('homepage/do_upload/'.$update_id, $attributes);
						?>

						<p style="margin-top: 24px;">Please chose a file from your computer and press 'Upload'.</p>
						<fieldset>
							<div class="control-group" style="height: 200px;">
								<label class="control-label" for="fileInput">File Input</label>
								<div class="controls">
									<input type="file" class="input-file uniform_on" name="userfile">
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Upload</button>
								<button type="submit" name="submit" value="Cancel" class="btn btn-default">Cancel</button>
							</div>
						</fieldset>

					</div>
				</div><!--/span--> 
			
			</div><!--/row-->
			*/ 
			?>