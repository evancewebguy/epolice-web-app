
        <div class="container">
          <h3>Gallery</h3><hr>
          
<?= $pagination ?>


<div class="row">

<?php
$this->load->module('timedate');
foreach($query_gallery->result() as $row){
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'gallery/'.$thumbnail_name;
 // $blog_url = base_url().'blog/article/'.$row->page_url;
?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="<?= $thumbnail_path ?>" alt="<?= $row->picture_alt ?>" class="img-responsive  card-img-top" 
                style="min-height:100px;max-height:300px; min-width:100px;max-width:300px;">
                <div class="card-body">
                  <p class="card-text"><?= $row->picture_description ?></p>
                </div>
              </div>
              </div>
<?php
}
?>

        </div>
        <?= $pagination ?>
      </div>

  <br> <br> <br> <br> <br> <br> <br>

