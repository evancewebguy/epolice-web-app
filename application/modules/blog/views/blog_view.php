<br><br>
<div class="container">
  <h3>ALL NEWS</h3><hr>

<?= $pagination ?>
 <div class="row">
<?php
$this->load->module('timedate');
foreach($query_gf->result() as $row){
  $date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
  $article_preview = word_limiter($row->blog_content, 15);
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'blog_pics/'.$thumbnail_name;
  $blog_url = base_url().'blog/article/'.$row->blog_url;
  $update_id = $row->id;
?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="<?= $thumbnail_path ?>" class="img-responsive  card-img-top">
                <div class="card-body">
                  <h5><a href="<?= $blog_url ?>"><?= $row->blog_title ?></a></h5>
                  <p style="font-size: 0.9em;">
                    <?= $row->author ?> -
                    <span style="color: #999"><?= $date_published ?></span>
                  </p>
                  <p class="card-text"><?= $article_preview ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?= $blog_url ?>"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    </div>
                  </div>
                </div>
              </div><br>
              </div>   
<?php
}
?>
       </div>
       <?= $pagination ?>
      </div>
      <br><br><br>
