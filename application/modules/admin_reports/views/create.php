<h1><?= $headline ?></h1>

<?= validation_errors("<p style='color:red;'>","</p>") ?>

<?php
	if(isset($flash)){
		echo $flash;
	}
?>
      <div class="row-fluid sortable">
        <div class="box span12">
          <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Report Details</h2>
            <div class="box-icon">
              <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
              <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
              <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
          </div>
          <div class="box-content">
                        <?php
              $form_location = base_url()."admin_reports/create/".$update_id;
            ?>
            <form class="form-horizontal" method="post" action="<?= $form_location ?>">
              <fieldset>

              <div class="control-group">
                <label class="control-label" for="typeahead">Report Title </label>
                <div class="controls">
                <input type="text" class="span7" name="report_title" value="<?= $report_title ?>">
                </div>
              </div>

              <div class="control-group hidden-phone">
                <label class="control-label" for="textarea2">Report</label>
                <div class="controls">
                <textarea class="cleditor" id="textarea2" rows="3" name="report_description"><?php   
                  echo $report_description;
                ?></textarea>
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                <button type="submit" class="btn" name="submit" value="Cancel">Cancel</button>
              </div>
              </fieldset>
            </form>   

          </div>
        </div><!--/span-->

      </div><!--/row-->

<?php

  if(is_numeric($update_id)){ ?>
        <div class="row-fluid sortable">
        <div class="box span12">
          <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Additional Options</h2>
            <div class="box-icon">
              <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
              <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
          </div>
          <div class="box-content">
            <a href="<?= base_url() ?>admin_reports/manage"><button type="button" class="btn btn-default">Back To Manage Page</button></a>
            <?php 
              if($update_id>0){ ?>
                  <a href="<?= base_url() ?>admin_reports/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete The Report Entry</button></a>
            <?php
              }
            ?>  
          </div>
        </div><!--/span-->
      
      </div><!--/row-->
      <?php
        }
      ?> 



