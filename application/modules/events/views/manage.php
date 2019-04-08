<h1>Manage Events</h1>
<?php
	if(isset($flash)){
		echo $flash;
	}
	
	$create_page_url = base_url()."events/create";
?><p style="margin-top: 30px;">
<a href="<?= $create_page_url ?>"><button type="submit" class="btn btn-primary">Add Event Entry</button></a></p>

  
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white file"></i><span class="break"></span>Events</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
							  	<th>Event Date</th>
								<th>Event Title</th>
								<th>Event Description</th>
								<th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
						  		$this->load->module('timedate');
						  		foreach($query->result() as $row){
						  			$edit_page_url = base_url()."events/create/".$row->id;
						  			$event_date = $this->timedate->get_nice_date($row->event_date, 'mini');
						  	?>
							<tr>
								<td><?= $event_date ?></td>
								<td class="center"><?= $row->event_title ?></td>
								<td class="center"><?= $row->event_description ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?= $edit_page_url ?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
								</td>
							</tr>
						<?php } ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


