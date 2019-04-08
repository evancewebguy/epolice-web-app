
<?php
$this->load->module('timedate');
foreach($query_hp_blog->result() as $row){
  $date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
  $article_preview = word_limiter($row->blog_content, 10);
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'blog_pics/'.$thumbnail_name;
  $blog_url = base_url().'blog/article/'.$row->blog_url;
  $update_id = $row->id;
?>

          <div class="item">
             <a href="<?= $blog_url ?>" class="overlay-wrapper" style=" height: 150px;">
                <img src="<?= $thumbnail_path ?>" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4"><?= $row->blog_title ?></span> </span>
                </span>
              </a>
            <div class="item-details bg-noise">
              <p style="font-size: 0.9em;">
                    <?= $row->author ?> -
                    <span style="color: #999"><?= $date_published ?></span>
                </p>
              <h4 class="item-title">
                  <a href="<?= $blog_url ?>"><?= $row->blog_title ?></a>
                </h4>
                <p class="card-text"><?= $article_preview ?></p>
                <a href="<?= $blog_url ?>" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
            </div>
          </div>  
<?php
}
?>
      

