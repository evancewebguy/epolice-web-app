<br><br>
<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<?php
$this->load->module('timedate');
$date_published1 = $this->timedate->get_nice_date($date_published, 'mini');
?>
<div style="background-image: url('assets/images/restaurant/1900x1200/food4.jpg')">
	<img src="<?= base_url() ?>services_pics/<?= $picture ?>" class="img-responsive" style="height:400px; width:600px;"><br><br>
        <h4><?= $services_title ?></h4>
        <p style="font-size: 0.9em;">
            <?= $author ?> -
            <span style="color: #999"><?= $date_published1 ?></span>
        </p><hr>
        <p class="card-text"><?= $services_content ?></p>

</div>
</div>

<div class="col-md-2"></div>
</div>
</div>
<br><br>