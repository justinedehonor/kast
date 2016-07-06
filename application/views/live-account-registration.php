<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
        <?php include 'includes/sidemenu.php'; ?>
                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row accountRegistration">
                        <div class="col-md-10 col-md-offset-1 registerForm">
                            <h4>LIVE ACCOUNT SET UP</h4>
                            <div class="row">
                            <form action="">
                                <div class="col-sm-6">
                                    <span>
                                        <label for="">Name</label>
                                        <input type="text">
                                    </span>
                                    <span>
                                        <label for="">Mobile Number</label>
                                        <input type="text">
                                    </span>
                                    <span>
                                        <label for="">Email Address</label>
                                        <input type="email">
                                    </span>
                                    <span>
                                        <label for="">Password</label>
                                        <input type="password">
                                    </span>
                                    <span>
                                        <label for="">Confirm password</label>
                                        <input type="password">
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <span>
                                        <label for="">Company Name</label>
                                        <input type="text">
                                    </span>
                                    <span>
                                        <label for="">Billing Address</label>
                                        <textarea rows="5"></textarea>
                                    </span>
                                    <span>
                                        <label for="">Birthday</label>
                                        <input type="text" id="pickAdate" placeholder="mm/dd/yyyy">
                                    </span>
                                    <span>
                                        <label for="">TIN (Tax Identification Number)</label>
                                        <input type="text">
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 pull-right">
                                    <input class="btn hippieBlue" type="submit" value="Submit">
                                </div>
                            </form>
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
