<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= $page_title ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?= $page_keywords ?>" name="keywords">
  <meta content="<?= $page_description ?>" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/img/icons/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets/img/icons/114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets/img/icons/72x72.png">
  <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>assets/img/icons/default.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Bootstrap LIGHTBOX CSS File -->
  <link href="<?= base_url() ?>assets/featherlight/featherlight.min.css" type="text/css" rel="stylesheet" />


  <!-- Libraries CSS Files -->
  <link href="<?= base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="<?= base_url() ?>assets/css/colour-blue.css" id="colour-scheme" rel="stylesheet">

  <style type="text/css">
  .responsive{
    width: 100%; /*100*/
    height:0%;
    padding-bottom: 56.25%;
    position: relative;
  }
  .responsive iframe {
    position: absolute;
    width: 100%;
    height: 100%;
  }
  </style>
  <!-- =======================================================
    Theme Name: Flexor
    Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body class="page-index has-hero">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
      
      <!--Header & navbar-branding region-->
      <div class="header">
        <div class="header-inner container">
          <div class="row">
            <div class="col-md-8">

              <h3>
              e-POLICE
            </h3>
            </div>
            
            <!--header rightside-->
            <div class="col-md-4">
              <!--user menu-->
              <ul class="list-inline user-menu pull-right">
                <!--<li class="user-button"><a class="btn btn-primary btn-hh-trigger" role="button" data-toggle="collapse" data-target=".header-hidden">Open</a></li>-->
              </ul>
              <ul class="list-inline user-menu pull-right">
                <li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="<?php echo base_url(); ?>users/register" class="text-uppercase">Register</a></li>
                <li class="user-login"><i class="fa fa-sign-in text-primary"></i> <a href="<?php echo base_url(); ?>users" class="text-uppercase">Login</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
      <div class="container">
        <div class="navbar navbar-default">
          <!--mobile collapse menu button-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--social media icons-->
          <div class="navbar-text social-media social-media-inline pull-right">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div>
          <!--everything within this div is collapsed on mobile-->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
              <li class="icon-link">
                <a href="<?= base_url() ?>"><i class="fa fa-home"></i></a>
              </li>

              <li><a href="<?php echo base_url(); ?>blog/news">NEWS</a></li>
              <li><a href="<?php echo base_url(); ?>services/index">SERVICES</a></li>
              <li><a href="<?php echo base_url(); ?>events">EVENTS</a></li>
              <li><a href="<?php echo base_url(); ?>videos">VIDEOS</a></li>

              <li class="dropdown dropdown-mm">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                      <li class="dropdown-header">About e-police</li>
                      <?= modules::run('aboutus/_draw_about_hp') ?>
                </ul>
              </li>

            </ul>
          </div>
          <!--/.navbar-collapse -->
        </div>
      </div>
    </div>




    <div class="hero" id="highlighted">
      <div class="inner">
        <!--Slideshow-->
        <div id="highlighted-slider" class="container">
          <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
            <!--Slideshow content-->

            <!--Slide limited to Two Slides-->
            <?= modules::run('homepage/_homepage_photos') ?>
            

          </div>
        </div>
      </div>
    </div>

  </div>





      
  <?php 
      if(isset($page_content)){
  ?>
                <!-- ======== @Region: #content ======== -->
  <div id="content">
    <!-- Mission Statement -->
    <div class="mission text-center block block-pd-sm block-bg-noise">
      <div class="container">
        <h4 class="text-shadow-white">
        <?php
          echo nl2br($page_content); ?>
          <center><h3 style="color: red;">Emergency line : 0755555555</h3></center>
          <?php
          if(!isset($page_url)){
                  $page_url = 'homepage';
                }
        ?>
          </h4>
      </div>
    </div>

            <?php

          if($page_url==""){
            require_once('homepage_content.php');
          }elseif($page_url=="contactus"){
                    //load up a contact form
            echo modules::run('contactus/_draw_form');
          }
            }elseif (isset($view_file)) {
              $this->load->view($view_module.'/'.$view_file);
            }
        ?>

     















  <!-- ======== @Region: #footer ======== -->
  <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="<?= base_url() ?>assets/img/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">

      <div class="row" id="contact">

        <div class="col-md-3">
          <address>
              <strong>e-POLICE</strong>
              <br>
              <i class="fa fa-map-pin fa-fw text-primary"></i>P.O BOX 159-00100 NAIROBI
              <br>
              <i class="fa fa-phone fa-fw text-primary"></i> +254 755555555
              <br>
              <i class="fa fa-envelope-o fa-fw text-primary"></i> epolice@gmail.com
              <br>
            </address>
        </div>

        <div class="col-md-6">
          <h4 class="text-uppercase">
              Contact Us
            </h4>
            <?php 
                $form_location = base_url()."messages/submit"; 
            ?>
    
          <div class="form">
            <form  method="post" role="form" action="<?= $form_location ?>">
              <div class="form-group">
                <input type="text" name="message_name" class="form-control" id="name" placeholder="Your Name" recquired />
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="message_email" id="email" placeholder="Your Email" recquired />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="message_subject" id="subject" placeholder="Subject" required />
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5"  placeholder="Message" required></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit" name="submit" value="Send Message">Send Message</button></div>
            </form>
          </div>





        </div>

        <div class="col-md-3">
          <h4 class="text-uppercase">
              Follow Us On:
            </h4>
          <!--social media icons-->
          <div class="social-media social-media-stacked">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
            <a href="#"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
            <a href="#"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a>
            <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
          </div>
        </div>

      </div>

      <div class="row subfooter">
        <!--@todo: replace with company copyright details-->
        <div class="col-md-7">
          <p>Copyright © epolice kenya</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flexor
            -->
          
          </div>
        </div>
        <div class="col-md-5">
          Designed by Evance 
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
             <small>click to contact developer</small>
          </button></p>

          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <ul class="list-group">
                <li class="list-group-item">Phone &nbsp Number &nbsp : <small style="color:red;">&nbsp 0716627844 &nbsp or &nbsp 0774413930</small></li>
                <li class="list-group-item">Email &nbsp Address : <small style="color:red;">&nbsp evansomondi05@gmail.com</small></li>
              </ul>
            </div>
          </div>
      </div>

      <a href="#top" class="scrolltop">Top</a>

    </div>
  </footer>

  <!-- Required JavaScript Libraries -->
  <script src="<?= base_url() ?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/lib/stellar/stellar.min.js"></script>
  <script src="<?= base_url() ?>assets/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url() ?>assets/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url() ?>assets/contactform/contactform.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="<?= base_url() ?>assets/js/custom.js"></script>

  <!--Custom scripts demo background & colour switcher - OPTIONAL -->
  <script src="<?= base_url() ?>assets/js/color-switcher.js"></script>

  <!-- Bootstrap LIGHTBOX JS File -->
<script src="<?= base_url() ?>assets/featherlight/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>