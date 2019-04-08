
<?php
/*
$this->load->module('timedate');
foreach($query->result() as $row){
  $picture = $row->picture;
  $thumbnail_name = str_replace('.', '_thumb.', $picture);
  $thumbnail_path = base_url().'staff_pics/'.$thumbnail_name;
 // $blog_url = base_url().'blog/article/'.$row->page_url;
?>
             
                
              <img src="<?= $thumbnail_path ?>" alt="<?= $row->picture_alt ?>" class="img-fluid img-responsive">
              <h4><?= $row->picture_description ?></h4>

<?php
}
*/
?>



        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <!--indicator-->
          <ol class="carousel-indicators">
          <?php
          $count = 0;
          foreach($query->result() as $row){ 

          if($count==0){
              $additional_css = ' class="active"';
          }else{
              $additional_css = '';
          }

          ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $count ?>" <?= $additional_css ?>></li>
          <?php
            $count++;
          }
          ?>
          </ol>

          <div class="carousel-inner">
          <?php
          $count = 0;
          foreach($query->result() as $row){ 
              $picture = $row->picture;
              $thumbnail_name = str_replace('.', '_thumb.', $picture);
              $thumbnail_path = base_url().'staff_pics/'.$thumbnail_name;
              $pic_path = base_url().'staff_pics/'.$row->picture;

              if($count==0){
              $additional_css = ' active';
              }else{
                  $additional_css = '';
              }
          ?>

            <div class="carousel-item<?= $additional_css ?>">
              <img class="d-block w-100 img-responsive" src="<?= $pic_path ?>" alt="<?= $row->picture_alt ?>"
              style="min-height:100px; max-height:400px; min-width:100%; max-width:100%;">
                <div class="carousel-caption d-none d-md-block">
                  <p><?= $row->picture_description ?></p>
                </div>
            </div>
          <?php
            $count++;
          }
          ?>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


