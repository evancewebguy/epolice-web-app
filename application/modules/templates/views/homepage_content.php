    <!-- blog news -->
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">
            Latest News
          </h2>
        <p><a href="<?php echo base_url(); ?>blog/news"><button type="button" class="btn btn-sm btn-outline-secondary">View All e-police News</button></a></p>
        <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
            <?= modules::run('blog/_draw_feed_hp') ?>
        </div>
      </div>
    </div>
<!--end of blog news-->



    <!--Showcase-->
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">
            Gallary Showcase
          </h2>
        <p>This are Photos relating to e-police.  Feel free to navigate through to know more about Us. Incase of any assistance,feel free and contact us in the contact session.</p>
        <p><a href="<?php echo base_url() ?>gallery/view"><button type="button" class="btn btn-sm btn-outline-secondary">View Gallery</button></a></p>
        <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
            <?= modules::run('gallery/_photos') ?>
        </div>
      </div>
    </div>

<!--end of gallery showcase-->


    <!-- Services -->
    <div class="services block block-bg-gradient block-border-bottom">
      <div class="container">
        <h2 class="block-title">
            Our Services
          </h2>
        <div class="row">
          <?= modules::run('services/_draw_feed_hp') ?>
        </div>
      </div>
    </div>

<!--end of services-->





<!-- OUR EVENTS-->

    <div class="block-contained">
      <h2 class="block-title">
          Events
        </h2>
         <p><a href="<?php echo base_url(); ?>events/index"><button type="button" class="btn btn-sm btn-outline-secondary">View All e-police Events</button></a></p>
      <div class="row">
        <?= modules::run('events/_draw_events_hp') ?>
      </div>
    </div>

<!--END OF EVENTS-->

    <!--
Background image callout with CSS overlay
Usage: data-block-bg-img="IMAGE-URL" to apply a background image clearly via jQuery .block-bg-overlay = overlays the background image, colour is inherited from block-bg-* classes .block-bg-overlay-NUMBER = determines opcacity value of overlay from 1-9 (default is 5) ie. .block-bg-overlay-2 or .block-bg-overlay-6
-->
    <div class="block block-pd-sm block-bg-grey-dark block-bg-overlay block-bg-overlay-6 text-center" data-block-bg-img="https://picjumbo.imgix.net/HNCK1088.jpg?q=40&amp;w=1650&amp;sharp=30" data-stellar-background-ratio="0.3">
      <h2 class="h-xlg h1 m-a-0">
          <span data-counter-up>100,000,0</span>s
        </h2>
      <h3 class="h-lg m-t-0 m-b-lg">
          Of Happy Customers!
        </h3>
      <p>
        <a href="<?= base_url() ?>users/register" class="btn btn-more btn-lg i-right">Join us in figthing crime today! <i class="fa fa-angle-right"></i></a>
      </p>
    </div>


<!--TESTIMONY OF OUR CUSTOMERS-->    
    <!--Customer testimonial & Latest Blog posts-->
    <div class="testimonials block-contained">
      <div class="row">
        <!--Customer testimonial-->
        <h3 class="block-title">
              Testimonials
        </h3>
        <center>
        <?= modules::run('reviews/_draw_review_hp') ?>
        </center>
        </div>
      </div>
<!--END OF CUSTOMER TESTIMONIALS-->
 
<hr>
    <!--videos-->


    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">
            Latest Videos
          </h2>
        <p><a href="<?php echo base_url(); ?>videos/index"><button type="button" class="btn btn-sm btn-outline-secondary">View All e-police Videos</button></a></p>
        <div>
            <?= modules::run('videos/_draw_video_hp') ?>
        </div>
      </div>
    </div>
  <!-- /content -->


    <!--Showcase Team-->
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">
            Our Team
          </h2>
        <p>This are team members who has enable us achieve our dream.</p>
        <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
            <?= modules::run('staff/_staff') ?>
        </div>
      </div>
    </div>

<!--end of gallery showcase-->

