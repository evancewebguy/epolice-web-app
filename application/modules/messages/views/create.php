<!--<div style="min-height: 200px;"></div>-->
<?= validation_errors("<p style='color:red;'>","</p>") ?>

<?php
	if(isset($flash)){
		echo $flash;
	}
		$form_location = base_url()."messages/submit"; 
?>
				<form class="form-horizontal" method="post" action="<?= $form_location ?>">
                <div class="row">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control p-3 rounded-0" id="name" name="message_name" required>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control p-3 rounded-0" id="email" name="message_email" required>
                    </div>
                  </div>
                  </div>
                  
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" cols="30" class="form-control p-3 rounded-0" id="subject" name="message_subject" required>
                </div>              
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea cols="30" rows="10" class="form-control  p-3 rounded-0" id="message" name="message" required>
                  </textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2  p-3 rounded-0" name="submit" value="Send Message">
                </div>
              </form>



