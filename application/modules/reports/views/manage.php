<h4>Manage Reports</h4>

<div class="card mb-4 box-shadow">
    <div class="card-header">
      <h6 class="my-0 font-weight-normal">Important information</h6>
    </div>
	<div class="card-body">

		<h5><small>use this area to 
		<ol>
			<li>Report any crime near you</li>
			<li>Report a compaint</li>
			<li>You can Update your report within 5 hours</li>
		</ol>
		</small></h5>
	</div>
</div>


<?php
	if(isset($flash)){
		echo $flash;
	}
	
	$create_page_url = base_url()."reports/create";
?><p style="margin-top: 10px;">
<a href="<?= $create_page_url ?>"><button type="submit" class="btn btn-sm btn-primary">Write Your Report</button></a></p>



			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2 style="color:white;"><i class="halflings-icon white briefcase"></i><span class="break"></span>New Report </h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">


				<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
							  	<th>Date Reported</th>
							  	<th>Title</th>
								<th class="span2">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
						  		$this->load->module('timedate');
						  		foreach($query->result() as $row){
						  			$edit_page_url = base_url()."reports/create/".$row->id;
						  			$view_page_url = base_url()."reports/view/".$row->id;
						  			$reported_time = $this->timedate->get_nice_date($row->reported_time, 'full');
						  			$user_id = $row->user_id;
						  	?>
						  	<?php 
						  		if ($user_id===$user) { ?>
							<tr>
								<td><?= $reported_time ?></td>
								<td><?= $row->report_title ?></td>
								<td class="center">
									<a class="btn btn-success" href="<?= $view_page_url ?>">
										<i class="halflings-icon white success"></i>View                                            
									</a>
									<a class="btn btn-info" href="<?= $edit_page_url ?>">
										<i class="halflings-icon white edit"></i>Edit                                            
									</a>
								</td>
							</tr>
						<?php }} ?>
						  </tbody>
					  </table>


					</div>
				</div><!--/span-->
			
			</div><!--/row-->



