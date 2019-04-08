
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white file"></i><span class="break"></span>Message View</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					
					<div class="span2"></div>
					<div class="span8">
        				<center><h4><?= $message_subject ?></h4></center>
        				<p class="card-text"><?= $message ?></p>
        			</div>
        			<div class="span2"></div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


<div class="row-fluid sortable">
<?php 
$manage_page_url = base_url()."messages/manage";
?><p style="margin-top: 30px;">
<a href="<?= $manage_page_url ?>"><button type="submit" class="btn btn-primary">BACK TO INBOX</button></a></p>
</div><!--/row-->