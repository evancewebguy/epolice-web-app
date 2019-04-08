<div class="container">
	
	<div class="table-responsive">
	  <table class="table table-striped table-sm">
	    <tbody>
	      <tbody>
			<tr>
				<td style="font-weight: bold;">Report Title</td><td><?= $report_title ?></td>
			</tr>
			<tr>
				<td style="font-weight: bold; vertical-align: top;">Report Description</td>
				<td style="vertical-align: top;"><?= nl2br($report_description) ?></td>
			</tr>			
			</tbody>
	    </tbody>
		<?php 
		$manage_page_url = base_url()."reports/manage";
		?><p style="margin-top: 30px;">
		<a href="<?= $manage_page_url ?>"><button type="submit" class="btn btn-primary">BACK TO Manage Page</button></a></p>

	  </table>
	</div>

</div>