<div class="container">
    <h3>Official Videos</h3><hr>
    <div class="row">
          
            
<?php
$this->load->module('timedate');
foreach($query_videos->result() as $row){
?>
            <div class="col-md-6">
            <div class="responsive">
                <iframe width="524"  height="315"
                  src="<?= $row->video_source ?>">
                </iframe>
            </div>
            </div>
<?php
}
?>

        </div>
        <br><br>
    </div>



