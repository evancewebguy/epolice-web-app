<div style="min-height: 200px;"></div>

<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<?php
$this->load->module('timedate');
$date_published1 = $this->timedate->get_nice_date($date_published, 'mini');
?>
        <div class="col-md">
            <div class="media d-block text-center testimonial_v1 pb_quote_v1">
              <div class="media-body">
                <img src="<?= base_url() ?>reviews_pics/<?= $picture ?>" class="img-responsive" style="height:400px; width:600px;"><br><br>
                <h3 class="heading"><?= $customer_full_name ?></h3>
                <p class="subheading"><?= $customer ?> -
                    <span style="color: #999"><?= $date_published1 ?></span></p><hr>
                <div class="quote pb_text-black">&ldquo;</div>
                <blockquote class="mb-5 pb_font-20"><?= $reviews_content ?></blockquote>
              </div>
            </div>
          </div> 


</div>

<div class="col-md-2"></div>
</div>
</div>


<!--

	<img src="<?= base_url() ?>aboutus_pics/<?= $picture ?>" class="img-responsive" style="height:400px; width:600px;"><br><br>
        <h4><?= $aboutus_title ?></h4>
        <p style="font-size: 0.9em;">
            <?= $author ?> -
            <span style="color: #999"><?= $date_published1 ?></span>
        </p><hr>
        <p class="card-text"><?= $aboutus_content ?></p>-->