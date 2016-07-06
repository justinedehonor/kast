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
            <div class="act-label">An activation code has been sent to your mobile phone. Enter it below to continue account seup up.</div>
            <!-- <form id="Signup" class="signup"> -->
            <?php
            // echo $data;
            // print_r( );
            $attributes = array('id' => 'Signup','class' => 'signup');
            echo form_open('home/savedata', $attributes);
            ?>
            <input type="text" placeholder="Enter Code">
            <input type="hidden" value="<?php echo htmlentities($data); ?>" name="data">
            <input type="submit" value="Submit">

            <!-- </form> -->
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('home_footer.php') ?>
