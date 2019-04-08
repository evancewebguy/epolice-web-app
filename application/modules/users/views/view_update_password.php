<?php
	$first_bit = $this->uri->segment(1);
	$form_location = base_url().$first_bit.'/update_password';

?>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="<?= base_url() ?>"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<?= validation_errors("<p style='color:red;'>","</p>") ?>
					<h2>Update your password</h2>
					<form class="form-horizontal" action="<?= $form_location ?>" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Email">
								<?php if (isset($email_hash, $email_code)) { ?>
								<span class="add-on"><i class="halflings-icon envelope"></i></span>
								<input class="input-large span10" value="<?= $email_hash ?>" name="email_hash" id="email" type="hidden" />
								<input class="input-large span10" value="<?= $email_code ?>" name="email_code" id="email" type="hidden" />
								<?php } ?>
								<input class="input-large span10" name="email" value="<?php echo (isset($email)) ? $email: ''; ?>" id="email" type="text" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title=" New Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="pword" value="" id="password" type="password" placeholder="type new password"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title=" New Password Again">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="pword_conf" value="" id="password" type="password" placeholder="type new password again"/>
							</div>
							<div class="clearfix"></div>
							<div class="button-login">	
								<button type="submit" class="btn btn-primary" name="submit" value="Update My Password">Login</button>
							</div>
							<div class="clearfix"></div>
						</fieldset>
					</form>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->