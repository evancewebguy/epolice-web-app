<div class="container">
	
	<div class="table-responsive">
	  <table class="table table-striped table-sm">
	    <tbody>
	      <tbody>
	      	<tr>
				<td style="font-weight: bold;">Picture</td><td><img style="height: 200px; width: 200px;" src="<?= base_url() ?>homepage_pics/<?= $picture ?>"></td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Full Name</td><td><?= $picture_alt ?></td>
			</tr>
			<tr>
				<td style="font-weight: bold; vertical-align: top;">Report</td>
				<td style="vertical-align: top;"><?= nl2br($description) ?></td>
			</tr>			
			</tbody>
	    </tbody>
		<?php 
		$manage_page_url = base_url()."missing_person/manage";
		?><p style="margin-top: 30px;">
		<a href="<?= $manage_page_url ?>"><button type="submit" class="btn btn-primary">BACK TO Manage Page</button></a></p>

	  </table>
	</div>

</div>