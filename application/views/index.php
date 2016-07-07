<?php include('home_header.php');?>
<div class="main-con">
	<div class="container mountain-bg">
		<div class="row no-gutters">
			<div class="center-con">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="hand-img"></div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="text-con">
						<div class="why-txt">why kast is a</div>
						<div class="powerful-txt">a powerful</div>
						<div class="mobile-txt">mobile</div>
						<div class="presence-txt">presence</div>
						<div class="business-txt">for your business</div>
						<div class="btn-con">
							<a href="#" class="cta-btn learn">learn more</a>
							<a href="<?php
							if($status=="login"){
								echo site_url('home/explore');
							}else{
								echo site_url('profile');
							} ?>" class="cta-btn sign">explore</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('home_footer.php') ?>
