
	<h1>Manage User Accounts</h1>
	<br>
	<h3><small>see Dashboard for directions</small></h3>
	<?php
	if(isset($flash)){
		echo $flash;
	}
	
	$create_page_url = base_url()."youraccount/create";
?><p style="margin-top: 30px;">
<a href="<?= $create_page_url ?>"><button type="submit" class="btn btn-primary">Add New User Account</button></a></p>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2 style="color:white;"><i class="halflings-icon white briefcase"></i><span class="break"></span>User Accounts</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">


				<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
							  	<th>Picture</th>
							  	<th>Date added</th>
							  	<th>Manager roles</th>
								<th>Manager Name</th>
								<th class="span4">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
						  		$this->load->module('timedate');
						  		foreach($query->result() as $row){
						  			$edit_account_url = base_url()."youraccount/create/".$row->id;
						  			$date_created = $this->timedate->get_nice_date($row->date_created, 'mini');
						  			$view_page_url = base_url()."youraccount/view/".$row->id;
						  			$picture = $row->picture;
						  			$thumbnail_name = str_replace('.', '_thumb.', $picture);
						  			$thumbnail_path = base_url().'profile_pics/'.$thumbnail_name;
						  	?>
							<tr>
								<td><img src="<?= $thumbnail_path ?>"></td>
								<td><?= $date_created ?></td>
								<td><?= $row->role ?></td>
								<td class="center"><?= $row->firstname ?> <?= $row->lastname ?></td>
								<td class="center">
									<a class="btn btn-success" href="<?= $view_page_url ?>">
										View Profile
										<i class="halflings-icon white zoom-in"></i>                                            
									</a>
									<a class="btn btn-info" href="<?= $edit_account_url ?>">
										Edit
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