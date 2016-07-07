<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
        <header class="hidden-xs container-fluid">
            <strong class="pull-left">KAST Service / BroadKast</strong>
            <span class="pull-right">
                <a href="">Home</a>
                <a href="">Log Out</a>
            </span>
        </header>
        <div class="container-fluid noPadding">
            <div class="dashboard-container wrapper">
                <!-- Side Menu -->
                <div class="col-sm-3 col-lg-2 side-menu">
                    <div class="row">
                        <div class="navbar-header">
                            <div class="brand-wrapper clearfix">
                                <!-- Hamburger -->
                                <button type="button" class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Brand -->
                                <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/img-KAST-logo.png" alt=""></a>
                            </div>
                            <div class="side-menu-container">
                                <div class="nav navbar-nav">
                                    <span class="col-xs-12">
                                        <p>Hi John, welcome to your KAST Live Account. You can now send BroadKast and more!</p>
                                    </span>
                                    <span class="col-xs-12">
                                       <a href="#" class="myAccount">My Account</a>
                                    </span>
                                    <span class="col-xs-12">
                                       <a href="#" class="senderID">Sender ID</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-md-10 col-md-offset-1 trial broadkastConfirmation">
                            <div class="row">
                                <div class="col-sm-12 col-md-8 col-lg-7 clearfix">
                                    <span class="col-sm-10 col-sm-offset-1">
                                        <h2>Thank You!</h2>
                                        <h3>YOUR REQUEST HAS BEEN PROCESSED!</h3>
                                        <h4>Your message reference number is</h4>
                                        <strong class="code"><?php echo $referenceKey; ?></strong>
                                    </span>
                                    <span class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                                        <a href="#" class="btn hippieBlue">New BroadKast</a>
                                        <a href="#" class="btn glacier">Kast Services</a>
                                    </span>
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
