	<h4><?= $headline ?></h4>
	<?= validation_errors("<p style='color:red;'>","</p>") ?>

	<?php
		if(isset($flash)){
			echo $flash;
		}
	?>
		<div class="card mb-4 box-shadow">
          <div class="card-header">
            <h6 class="my-0 font-weight-normal">Upload Success</h6>
          </div>

          <div class="card-body">
					<div class="alert alert-success">Your file was successfully uploaded!</div>
					<ul>
						<?php foreach ($upload_data as $item => $value): ?>
							<li><?php echo $item; ?>: <?php echo $value; ?></li>
						<?php endforeach; ?>
					</ul>

					<p>
						<?php
						$edit_item_url = base_url()."missing_person/create/".$update_id;
						?>
						<a href="<?= $edit_item_url ?>"><button type="button" class="btn btn-primary">Return To Missing Person Entry Page</button></a>
					</p>
			</div>
		</div><!--/span--> 