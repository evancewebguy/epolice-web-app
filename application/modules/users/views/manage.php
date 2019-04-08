
	<h4>Manage User Accounts</h4>
	<br>
	<?php
	if(isset($flash)){
		echo $flash;
	}
	?>

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
							  	<th>Date added</th>
								<th>Manager Name</th>
								<th>Email</th>
								<th>ID number</th>
								<th class="span4">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
						  		$this->load->module('timedate');
						  		foreach($query->result() as $row){
						  			$edit_account_url = base_url()."users/update_pword/".$row->id;
						  			$date_created = $this->timedate->get_nice_date($row->date_created, 'mini');
						  			$view_page_url = base_url()."users/view/".$row->id;	
						  	?>
							<tr>
								<td><?= $date_created ?></td>
								<td class="center"><?= $row->username ?></td>
								<td><?= $row->email ?></td>
								<td><?= $row->identification_no ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?= $edit_account_url ?>">
										Update your password
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