<?php
$this->load->module('timedate');
foreach($query_couresel->result() as $row){
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'homepage_pics/'.$thumbnail_name;
?>


<div class="item">
              <div class="row">
                <div class="col-md-6 col-md-push-6 item-caption">
                  <h2 class="h1 text-weight-light">
                      <?= $row->title ?>
                    </h2>
                  <p><?= $row->description ?></p>
                </div>
                <div class="col-md-6 col-md-pull-6 hidden-xs">
                  <img src="<?= $thumbnail_path ?>" alt="Slide 1" class="center-block img-responsive">
                </div>
              </div>
            </div>
<?php
  }
?>
