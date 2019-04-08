<h1>Admin Dashboard</h1>


<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white tag"></i><span class="break"></span>User Reports</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">

							<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
								<div class="boxchart">0,0,1,2,3,4,5,6,7,8,9</div>
								<div class="number"><?= $num_rows ?><i class="icon-arrow-up"></i></div>
								<div class="title">Registered User<?php 
								if ($num_rows==1) {
									echo "";
								}else{
									echo "s";
								}
								?></div>
							</div>

							<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
								<div class="boxchart">0,1,2,3,4,5,6,7,8,9</div>
								<div class="number"><?= $num_rows_report ?><i class="icon-arrow-up"></i></div>
								<div class="title"><?php 
								if ($num_rows==1) {
									echo "Report";
								}else{
									echo "All Reports";
								}
								?></div>
								<div class="footer">
									<a href="<?= base_url() ?>admin_reports/manage"> Manage Reports</a>
								</div>
							</div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->





			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white tag"></i><span class="break"></span>User Guide</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<center><h3>INSTRUCTIONS</h3></center><hr>

						1. You Must Log Out everytime you are done.<br><br>
						2. Managing missing person you will go to <b>manage homepage information</b>.<br><br>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			<CENTER><h1><small>I APPRECIATE WORKING FOR YOU...THANK YOU</small></h1></CENTER>



						
