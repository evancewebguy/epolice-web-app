
<?php
$this->load->module('timedate');
foreach($query->result() as $row){
  $date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
  $article_preview = word_limiter($row->services_content, 55);
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'services_pics/'.$thumbnail_name;
  $services_url = base_url().'services/article/'.$row->services_url;
  $update_id = $row->id;
?>
<div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <img src="<?= $thumbnail_path ?>" class="img-responsive underlay">
              </span>
            <h4 class="text-weight-strong">
                <?= $row->services_title ?>
              </h4>
            <p><?= $article_preview ?></p>
            <p style="font-size: 0.9em;">
                    <?= $row->author ?> -
                    <span style="color: #999"><?= $date_published ?></span>
                </p>
            <p>
              <a href="<?= $services_url ?>" class="btn btn-more i-right">Learn More <i class="fa fa-angle-right"></i></a>
            </p>
          </div>


<?php
}
?>
      

