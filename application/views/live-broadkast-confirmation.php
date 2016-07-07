<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
          <?php include 'includes/sidemenulive.php'; ?>
                  <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-md-10 col-md-offset-1 live broadkastConfirmation">
                            <div class="row">
                                <div class="col-sm-12 col-md-8 col-lg-7 clearfix">
                                    <span class="col-sm-10 col-sm-offset-1">
                                        <h2>Thank You!</h2>
                                        <h3>YOUR REQUEST HAS BEEN PROCESSED!</h3>
                                        <h4>Your message reference number is</h4>
                                        <strong class="code"><?php echo $referenceKey; ?></strong>
                                    </span>
                                    <!-- <span class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                                        <h4>To use all the features of KAST, create your Live account</h4>
                                        <a href="#" class="btn hippieBlue">Go Live!</a>
                                    </span> -->
                                </div>
                                <img src="<?php echo base_url(); ?>assets/images/img-broadKast-on-hand.png" alt="">
                            </div>
                        </div>
                   </div>
                   <div class="row">
                       <div class="col-xs-12 faq">
                           <p>For more information, visit our FAQs page.</p><a href="" class="btn neptune">FAQs</a>
                       </div>
                   </div>
                </div>
            </div>
        </div>


<?php include 'includes/dashboard-footer.php'; ?>
