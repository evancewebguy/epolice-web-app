 <br>
      
<?php
$this->load->module('timedate');
foreach($query_gtjd->result() as $row){
  //        width="524" height="315"
	$source = $row->video_source;
	$id = $row->id;
?>
		<div class="col-md-6">
            <div class="responsive">
                <iframe width="524"  height="315"
                  src="<?= $source ?>">
                </iframe>
            </div>
    </div>
	
<?php  } ?>


      














