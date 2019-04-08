<div style="min-height: 200px;"></div>

<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<?php
$this->load->module('timedate');
$date_published1 = $this->timedate->get_nice_date($date_published, 'mini');
?>
<div>
	<img src="<?= base_url() ?>aboutus_pics/<?= $picture ?>" class="img-responsive" style="height:400px; width:600px;"><br><br>
        <h4><?= $aboutus_title ?></h4>
        <p style="font-size: 0.9em;">
            <?= $author ?> -
            <span style="color: #999"><?= $date_published1 ?></span>
        </p><hr>
        <p class="card-text"><?= $aboutus_content ?></p>

</div>
</div>

<div class="col-md-2"></div>
</div>

<!-- Widget 1 -->
<section class="widget py-3 bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 text-sm-center text-md-left text-white pt-3">
          <h2>Contact Us</h2>
          <p>Our Customer service is 24/7 and faster to make sure you get the best service ever</p>
        </div>
        <div class="col-md-4 col-lg-3 col-sm-12 text-sm-center text-md-right copy-container">
          <div class="copy-content">
            <a href="<?php echo base_url() ?>contactus" class="btn btn-dark btn-capsul px-5 py-3">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
</section>

</div>
