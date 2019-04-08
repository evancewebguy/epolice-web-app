
<?php
$this->load->module('timedate');
foreach($query->result() as $row){
  $date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
  $article_preview = word_limiter($row->aboutus_content, 10);
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'aboutus_pics/'.$thumbnail_name;
  $aboutus_url = base_url().'aboutus/article/'.$row->aboutus_url;
  $update_id = $row->id;
?>
<li><a href="<?= $aboutus_url ?>"><?= $row->aboutus_title ?></a></li>            
<?php
}
?>
