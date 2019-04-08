
<div class="container">
  <h3>ALL EVENTS</h3><HR>
          <div class="row">
<?php
$this->load->module('timedate');
foreach($query_events->result() as $row){
  $event_date = $this->timedate->get_nice_date($row->event_date, 'mini');
  $update_id = $row->id;
?>

          <div class="col-md-4">
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

            
<?php
}
?>
        </div><br><br>
</div>