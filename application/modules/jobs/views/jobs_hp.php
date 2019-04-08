
<div class="container">
          <div class="row">
<?php
$this->load->module('timedate');
foreach($query->result() as $row){
  $date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
  $article_preview = word_limiter($row->jobs_content, 10);
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'jobs_pics/'.$thumbnail_name;
  $jobs_url = base_url().'jobs/article/'.$row->jobs_url;
  $update_id = $row->id;
?>
   <li><a href="<?= $jobs_url ?>" tabindex="-1" class="menu-item">View All About <?= $row->jobs_title ?></a></li>            
<?php
}
?>
</div>
</div>
