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
	<img src="<?= base_url() ?>jobs_pics/<?= $picture ?>" class="img-responsive" style="height:400px; width:600px;"><br><br>
        <h4><?= $jobs_title ?></h4>
        <p style="font-size: 0.9em;">
            <?= $author ?> -
            <span style="color: #999"><?= $date_published1 ?></span>
        </p><hr>
        <p class="card-text"><?= $jobs_content ?></p>

</div>
</div>

<div class="col-md-2"></div>
</div>
</div>
