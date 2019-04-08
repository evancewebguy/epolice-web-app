  <br>
  <div class="container">
          <div class="row"> 
<?php
$this->load->module('timedate');
foreach($query->result() as $row){
  $event_date = $this->timedate->get_nice_date($row->event_date, 'mini');
?>
            <div class="col-md-6">
                <ul>
                  <h5><?= $event_date ?></h5>
                  <li><?= $row->event_title ?></li>
                  <p><?= $row->event_description ?></p>
                </ul><hr>
              </div>
<?php
}
?>
</div>
</div>




      









