<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
      <?php include 'includes/sidemenulive.php'; ?>

                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row homeSettings">
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                           <span class="broadkast">
                               <h4>BroadKast</h4>
                               <a href="<?php echo site_url('profile/contacts') ?>" class="btn neptune">BroadKast now</a>
                           </span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                           <span class="communityBuilding">
                               <h4>Community Building</h4>
                               <a href="<?php echo site_url('profile/community') ?>" class="btn neptune">Set Up</a>
                           </span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                           <span class="feedback">
                               <h4>Feedback</h4>
                               <a href="<?php echo site_url('profile/feedback') ?>" class="btn neptune">Set Up</a>
                           </span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                           <span class="videoBroadkast">
                               <h4>Video BroadKast</h4>
                               <a href="" class="btn neptune">Set Up</a>
                           </span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                           <span class="promos">
                               <h4>Promos</h4>
                               <a href="" class="btn neptune">Set Up</a>
                           </span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                           <span class="loadDisbursement">
                               <h4>Load Disbursement</h4>
                               <a href="" class="btn neptune">Set Up</a>
                           </span>
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
