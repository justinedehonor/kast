<?php include('home_header.php');?>
<div class="main-con">
	<div class="container mountain-bg">
		<div class="row no-gutters">
			<div class="center-con">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="hand-img login-bg"></div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="text-con login-con">
						<div class="title">Send text blasts to your contacts list or target customers. 
							<span>Log in with your email address and password to get started with your broadcast. </span>
						</div>
						<form id="login">
							<input type="text" placeholder="Email"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							<input type="text" placeholder="Password"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							<input type="button" value="LOG IN">
							<a class="forget-pass">Forgot Password</a>
							<input type="checkbox" name="forgot" id="forgot">
							<label for="forgot">Remember me</label>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('home_footer.php') ?>