  

<?php
$this->load->module('timedate');
foreach($query->result() as $row){
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'gallery/'.$thumbnail_name;
  $pic_path = base_url().'gallery/'.$picture;
?>
<div class="item">
             <a href="#" data-featherlight="<?= $pic_path ?>" class="overlay-wrapper" style=" height: 150px;">
              <img src="<?= $pic_path ?>" alt="<?= $row->picture_alt ?>" class="img-responsive underlay">
              <span class="overlay">
                  <span class="overlay-content"> <span class="h4"><?= $row->picture_description ?></span> </span>
                </span>
             </a>
            <div class="item-details bg-noise">
              <h4 class="item-title">
                  <a href="#" data-featherlight="<?= $pic_path ?>"><?= $row->picture_description ?></a>
              </h4>
            </div>
            
      </div>
<?php
}
?>



