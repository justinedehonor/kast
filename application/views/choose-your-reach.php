<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
        <?php include 'includes/sidemenulive.php'; ?>
                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-xs-12 live chooseyourReach clearfix">
                            <div class="row">
                                <span class="col-xs-12 title">
                                    <h2>BroadKast</h2>
                                    <h3>Choose your Reach</h3>
                                </span>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 choices">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="<?php echo base_url();?>assets/images/ico-reachContacts.png" alt="">
                                            <h4>UPLOAD YOUR OWN CONTACTS</h4>
                                            <p>Use your own contact base for your SMS blasts</p>
                                            <a href="<?php echo site_url('profile/contacts') ?>" class="btn neptune">Setup Now</a>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="<?php echo base_url();?>assets/images/ico-hypertargetedContacts.png" alt="">
                                            <h4>Hypertargeted CONTACTS</h4>
                                            <p>Set up contacts and prospects on specific interest-based segments</p>
                                            <a href="<?php echo site_url('profile/hyper') ?>" class="btn neptune">Setup Now</a>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="<?php echo base_url();?>assets/images/ico-locationbasedContacts.png" alt="">
                                            <h4>Location-based CONTACTS</h4>
                                            <p>Send SMS to people within the vicinity of your event, business, mall, or office</p>
                                            <a href="<?php echo site_url('profile/location') ?>" class="btn neptune">Setup Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include 'includes/dashboard-footer.php'; ?>
