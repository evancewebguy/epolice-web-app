<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title><?= $page_title ?></title>
	<meta name="description" content="<?= $page_description ?>">
	<meta name="author" content="Evance Omondi - 0716627844">
	<meta name="keyword" content="<?= $page_keywords ?>">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url(); ?>adminfiles/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>adminfiles/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>adminfiles/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url(); ?>adminfiles/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	
	<link href="<?= base_url() ?>assets/css/invoice.css" rel="stylesheet">

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?php echo base_url(); ?>adminfiles/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner"  style="min-height: 70px;">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a style="margin-top:10px;" class="brand" href="<?= base_url() ?>dashboard/manage"><span>e-police admin panel</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Administrator
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li>
									<a href="<?= base_url() ?>youraccount/manage">
										<i class="icon-briefcase"></i>
										<span class="hidden-tablet"> Accounts</span>
									</a>
								</li>
								<li><a href="<?= base_url() ?>youraccount/logout"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?= base_url() ?>dashboard/manage"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a href="<?= base_url() ?>messages/manage"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
						<li><a href="<?= base_url() ?>blog/manage"><i class="icon-edit"></i><span class="hidden-tablet"> Manage News</span></a></li>
						<li><a href="<?= base_url() ?>webpages/manage"><i class="icon-file"></i><span class="hidden-tablet"> CMS</span></a></li>
						<li><a href="<?= base_url() ?>services/manage"><i class="icon-edit"></i><span class="hidden-tablet"> Manage Services</span></a></li>
						<li><a href="<?= base_url() ?>gallery/manage"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="<?= base_url() ?>events/manage"><i class="icon-file"></i><span class="hidden-tablet"> Events</span></a></li>
						<li><a href="<?= base_url() ?>reviews/manage"><i class="icon-user"></i><span class="hidden-tablet"> Customer Reviews</span></a></li>
						<li><a href="<?= base_url() ?>videos/manage"><i class="icon-film"></i><span class="hidden-tablet"> Manage Videos</span></a></li>
						<li><a href="<?= base_url() ?>aboutus/manage"><i class="icon-edit"></i><span class="hidden-tablet"> Manage About Us</span></a></li>
						<li><a href="<?= base_url() ?>staff/manage"><i class="icon-user"></i><span class="hidden-tablet"> Post Staffs On Website</span></a></li>
						<li><a href="<?= base_url() ?>homepage/manage"><i class="icon-file"></i><span class="hidden-tablet"> Manage HomePage Information</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->

			<div id="content" class="span10">
				
				<?php

				if(isset($view_file))
				{
					$this->load->view($view_module.'/'.$view_file); 
				}


				?>

			</div><!--/.fluid-container-->


			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">Developed by <i class="fa fa-love"></i><a href="#">Evance Akello</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url(); ?>adminfiles/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>adminfiles/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/modernizr.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url(); ?>adminfiles/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url(); ?>adminfiles/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url(); ?>adminfiles/js/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>adminfiles/js/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>adminfiles/js/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url(); ?>adminfiles/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url(); ?>adminfiles/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/counter.js"></script>
	
		<script src="<?php echo base_url(); ?>adminfiles/js/retina.js"></script>

		<script src="<?php echo base_url(); ?>adminfiles/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
