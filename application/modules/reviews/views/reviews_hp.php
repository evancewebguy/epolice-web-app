
<?php
$this->load->module('timedate');
foreach($query->result() as $row){
  $date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
  $article_preview = word_limiter($row->reviews_content, 20);
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'reviews_pics/'.$thumbnail_name;
  $reviews_url = base_url().'reviews/article/'.$row->reviews_url;
  $update_id = $row->id;
?>

    <div class="col-md-6 m-b-lg">
    <blockquote>
    <?= $article_preview ?>
    <a href="<?= $reviews_url ?>" class="btn btn-more i-right">Read More Of This Testimony<i class="fa fa-angle-right"></i></a>
    </blockquote>

    <center>
    <img src="<?= $thumbnail_path ?>" alt="reviews" class="rounded-circle img-responsive img-thumbnail img-circle" style="max-height:100px; max-width:100px;">
    <h4><?= $row->customer_full_name ?></h4>
    <h4><?= $row->customer ?> - <span style="color: #999"><?= $date_published ?></span></h4>
    </center>

    </div>
<?php
}
?>
      




