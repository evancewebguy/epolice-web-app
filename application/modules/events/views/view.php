<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<?php
$this->load->module('timedate');
foreach($query->result() as $row){
  $event_date = $this->timedate->get_nice_date($row->event_date, 'mini');
?>
<div class="col-md-3">
          <div class="panel panel-primary panel-pricing text-center">
            <div class="panel-heading">
              <h4 class="panel-title">
                  <?= $row->event_title ?>
                </h4>
            </div>
            <div class="panel-pricing-price"><?= $event_date ?></div>
            <div class="panel-body">
              <p><?= $row->event_title ?></p>
            </div>
          </div>
        </div>


</div>

<div class="col-md-2"></div>
</div>
</div>