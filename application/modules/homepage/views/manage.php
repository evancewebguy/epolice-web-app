<h1>Manage Homepage Information</h1>
<h4><small>use this area to post all reports about missing person</small></h4>
<?php
	if(isset($flash)){
		echo $flash;
	}
	
	$create_page_url = base_url()."homepage/create";
?><p style="margin-top: 30px;">
<a href="<?= $create_page_url ?>"><button type="submit" class="btn btn-primary">Add New Homepage Entry</button></a></p>

  
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Custom Homepages</h2>
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
							  	<th>Name</th>
							  	<th>Homepage Title</th>
								<th class="span3">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
						  		$this->load->module('timedate');
						  		foreach($query->result() as $row){
						  			$edit_page_url = base_url()."homepage/create/".$row->id;
						  			$date_reported = $this->timedate->get_nice_date($row->date_reported, 'full');
						  			$view_page_url = base_url()."homepage/view/".$row->id;
						  			$picture = $row->picture;
						  			$thumbnail_name = str_replace('.', '_thumb.', $picture);
						  			$thumbnail_path = base_url().'homepage/'.$thumbnail_name;
						  	?>
							<tr>
								<td><?= $date_reported ?></td>
								<td><?= $row->picture_alt ?></td>
								<td><?= $row->title ?></td>
								<td class="center">
									<a class="btn btn-success" href="<?= $view_page_url ?>">
										<i class="halflings-icon white zoom-in"></i>View                                           
									</a>
									<a class="btn btn-info" href="<?= $edit_page_url ?>">
										<i class="halflings-icon white edit"></i>Edit                                            
									</a>
								</td>
							</tr>
						<?php } ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


