<?php include('home_header.php'); ?>
<div class="main-con">
	<div class="container mountain-bg">
		<div class="row no-gutters">
			<div class="center-con">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="text-center account-title">Account Set up</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="welcome-txt">Welcome to your free trial set up. Fill up the registration form to proceed KAST is a convenient way to send SMS to promote your business or campaign.</div>
					<div class="hand-img acc-setup"></div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="form-con">
            <?php
            $attributes = array('id' => 'Signup','class' => 'signup');
            echo form_open('home/confirmation', $attributes);
            ?>
						<!-- <form id="Signup" class="signup"> -->
							<input type="text" placeholder="Name" name="clientName">
							<input type="text" placeholder="Mobile Number" name="mobileNumber">
							<input type="text" placeholder="Email Address" name="email">
							<input type="password" placeholder="Password" name="password">
							<input type="password" placeholder="Confirm Password" name="confirmPassword">
							<input type="submit" value="Continue">
              <?php echo form_close();?>
						<!-- </form> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('home_footer.php') ?>
