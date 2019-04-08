
          <div class="row"> 
<?php
$this->load->module('timedate');
foreach($query->result() as $row){
  $event_date = $this->timedate->get_nice_date($row->event_date, 'mini');
?>
           <!--
            <div class="col-md-6">
                <ul>
                  <h5><?= $event_date ?></h5>
                  <li><?= $row->event_title ?></li>
                  <p><?= $row->event_description ?></p>
                </ul><hr>
              </div>
  -->

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
<?php
}
?>
</div>








      









