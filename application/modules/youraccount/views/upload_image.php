	<h1><?= $headline ?></h1>
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Upload Profile Image</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<?php
						if(isset($error)){
							foreach($error as $value){
								echo $value;
							}
						}
						?>

						<?php
						$attributes = array('class' => 'form-horizontal');
						echo form_open_multipart('youraccount/do_upload/'.$update_id, $attributes);
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