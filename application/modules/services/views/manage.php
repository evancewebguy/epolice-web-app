<h1>Update Services</h1>
<?php
	if(isset($flash)){
		echo $flash;
	}
	
	$create_page_url = base_url()."services/create";
?><p style="margin-top: 30px;">
<a href="<?= $create_page_url ?>"><button type="submit" class="btn btn-primary">Add New Services Entry</button></a></p>

  
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white file"></i><span class="break"></span>Custom Services</h2>
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
							  	<!--<th>Picture</th>-->
							  	<th>Date Published</th>
							  	<th>Author</th>
								<th>Services URL</th>
								<th>Services Title</th>
								<th class="span2">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
						  		$this->load->module('timedate');
						  		foreach($query->result() as $row){
						  			$edit_page_url = base_url()."services/create/".$row->id;
						  			$view_page_url = base_url().$row->services_url;
						  			$date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
						  			/*$picture = $row->picture;
						  			$thumbnail_name = str_replace('.', '_thumb.', $picture);
						  			$thumbnail_path = base_url().'services_pics/'.$thumbnail_name;*/
						  	?>
							<tr>
								<!--<td><img src="<?= $thumbnail_path ?>"></td>-->
								<td><?= $date_published ?></td>
								<td><?= $row->author ?></td>
								<td><?= $view_page_url ?></td>
								<td class="center"><?= $row->services_title ?></td>
								<td class="center">
									<a class="btn btn-success" href="<?= $view_page_url ?>">
										<i class="halflings-icon white zoom-in"></i>                                            
									</a>
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


