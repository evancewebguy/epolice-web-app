<div style="min-height: 100px;"></div>

<!--<div class="album py-5 bg-light">-->
        <div class="container">
          <h3>Latest News</h3><hr>
          <div class="row">
<?php
$this->load->module('timedate');
foreach($query->result() as $row){
  $date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
  $article_preview = word_limiter($row->reviews_content, 10);
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'reviews_pics/'.$thumbnail_name;
  $reviews_url = base_url().'reviews/article/'.$row->reviews_url;
  $update_id = $row->id;
?>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="<?= $thumbnail_path ?>" class="img-responsive  card-img-top">
                <div class="card-body">
                  <h5><a href="<?= $reviews_url ?>"><?= $row->reviews_title ?></a></h5>
                  <p style="font-size: 0.9em;">
                    <?= $row->customer ?> -
                    <span style="color: #999"><?= $date_published ?></span>
                  </p>
                  <p class="card-text"><?= $article_preview ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?= $reviews_url ?>"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            
<?php
}
?>
        </div>
      </div>
      </div>

