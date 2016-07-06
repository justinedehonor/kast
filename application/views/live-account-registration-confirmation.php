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
                                <a class="navbar-brand" href="#"><img src="images/img-KAST-logo.png" alt=""></a>
                            </div>
                            <div class="side-menu-container">
                                <div class="nav navbar-nav">
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
                   <div class="row accountRegistration">
                        <div class="col-sm-8 col-sm-offset-1 col-md-7 col-lg-6 confirmation">
                            <h4>LIVE ACCOUNT SET UP</h4>
                            <span>
                                <h3>Thank you!</h3>
                                <p>We’re almost done. You will receive an email with a confirmation link to finish the activation of your KAST Live account.</p>
                                <small>Haven’t received an email?</small>
                                <a href="#" class="btn glacier">Resend Confirmation Link</a>
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