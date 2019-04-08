<h1>Manage Team Members</h1>
<?php
	if(isset($flash)){
		echo $flash;
	}
	
	$create_page_url = base_url()."staff/create";
?><p style="margin-top: 30px;">
<a href="<?= $create_page_url ?>"><button type="submit" class="btn btn-primary">Add New Member Entry</button></a></p>

  
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Custom Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
							  	<th>Picture Alt Name</th>
							  	<th>Member Title</th>
							  	<th>Picture Description</th>
								<th class="span2">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
						  		$this->load->module('timedate');
						  		foreach($query->result() as $row){
						  			$edit_page_url = base_url()."staff/create/".$row->id;
						  			//$date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
						  			$picture = $row->picture;
						  			$thumbnail_name = str_replace('.', '_thumb.', $picture);
						  			$thumbnail_path = base_url().'staff/'.$thumbnail_name;
						  	?>
							<tr>
								<td><?= $row->picture_alt ?></td>
								<td><?= $row->member_title ?></td>
								<td><?= $row->picture_description ?></td>
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


