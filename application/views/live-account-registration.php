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
                            <?php echo form_open('profile/savedata') ?>
                                <div class="col-sm-6">
                                    <span>
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="<?php echo $name; ?>">
                                    </span>
                                    <span>
                                        <label for="">Mobile Number</label>
                                        <input type="text" name="msid" value="<?php echo $msid; ?>">
                                    </span>
                                    <span>
                                        <label for="">Email Address</label>
                                        <input type="email" name="emailaddress" value="<?php echo $emailAddress; ?>">
                                    </span>
                                    <span>
                                        <label for="">Password</label>
                                        <input type="password" name="password">
                                    </span>
                                    <span>
                                        <label for="">Confirm password</label>
                                        <input type="password">
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <span>
                                        <label for="">Company Name</label>
                                        <input type="text" name="companyname">
                                    </span>
                                    <span>
                                        <label for="">Billing Address</label>
                                        <textarea rows="5" name="billingaddress"></textarea>
                                    </span>
                                    <span>
                                        <label for="">Birthday</label>
                                        <input type="text" name="birthday" id="pickAdate" placeholder="mm/dd/yyyy">
                                    </span>
                                    <span>
                                        <label for="">TIN (Tax Identification Number)</label>
                                        <input type="text" name="tin">
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 pull-right">
                                    <input class="btn hippieBlue" type="submit" value="Submit">
                                </div>
                            <?php echo form_close(); ?>
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
