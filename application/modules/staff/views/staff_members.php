<?php
$this->load->module('timedate');
foreach($query->result() as $row){

  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'staff_pics/'.$thumbnail_name;
  $pic_path = base_url().'staff_pics/'.$row->picture;
?>
<div class="item">
             <a href="#" data-featherlight="<?= $pic_path ?>" class="overlay-wrapper">
              <img src="<?= $pic_path ?>" alt="<?= $row->picture_alt ?>" class="img-responsive underlay" style="height: 250px;">
              <span class="overlay">
                  <span class="overlay-content"><span class="h4"><?= $row->member_title ?></span><br> <span class="h4"><?= $row->picture_description ?></span> </span>
                </span>
             </a>
      </div>
<?php
}
?>


