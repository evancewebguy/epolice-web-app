<h1>Messages Inbox</h1>
<br><br>
<?php
	if(isset($flash)){
		echo $flash;
	}?>
  
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white file"></i><span class="break"></span>Inbox</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
							  	<th>Date and Time Received</th>
							  	<th>Sender Name</th>
							  	<th>Sender Email</th>
								<th>Message Subject</th>
								<th class="span3">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
						  		$this->load->module('timedate');
						  		foreach($query->result() as $row){
						  			$view_page_url = base_url()."messages/read_message/".$row->id;
						  			$delete_url = base_url()."messages/delete/".$row->id;
						  			$date_sent = $this->timedate->get_nice_date($row->date_sent, 'datetime');

						  	?>
							<tr>
								<td><?= $date_sent ?></td>
								<td class="center"><?= $row->message_name ?></td>
								<td class="center"><a href="maito:<?= $row->message_email ?>"><?= $row->message_email ?></a></td>
								<td class="center"><?= $row->message_subject ?></td>
								<td class="center">
									<a class="btn btn-success" href="<?= $view_page_url ?>">
										<i class="halflings-icon white zoom-in"></i>View Message.                                            
									</a>
									<a class="btn btn-danger" href="<?= $delete_url ?>">
										<i class="halflings-icon white trash"></i>                                            
									</a>
								</td>
							</tr>
						<?php } ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


