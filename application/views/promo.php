<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
        <?php include 'includes/sidemenulive.php'; ?>
                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-xs-12 col-md-12 border-bot">
                            <h4>Promo</h4>
                        </div>
                        <div class="col-md-10 col-md-offset-1 col-lg-9 col-lg-offset-1 live buildContacts clearfix com-build feedback">
                          <?php
                              echo form_open('profile/promo_submit');
                          ?>
                            <div class="row">

                                <div class="col-xs-12 col-md-6">
                                   <label for="">Type of Promo</label>
                                   <select class="white" name="promoType">
                                        <option value="Redeem Code">Redeem Code</option>
                                    </select>
                                   <label for="">Promo Title</label>
                                   <input type="text" name="promoTitle">
                                   <label for="">Telco Provider</label>
                                   <select class="white" name="provider">
                                        <option value="Globe">Globe</option>
                                    </select>
                                   <label for="">Promo Period</label>
                                   <label for="" class="indent">Start</label>
                                   <input type="text" class="date white" id="promoPickDate1" placeholder="mm/dd/yyyy" name="promoStart">
                                   <label for="" class="indent">End</label>
                                   <input type="text" class="date white" id="promoPickDate2" placeholder="mm/dd/yyyy" name="promoEnd">
                                   <label for="">Confirmation Message</label>
                                   <textarea rows="3" name="confirmationMessage"></textarea>
                                </div>
                                <div class="col-xs-12 col-md-5 col-md-offset-1">
                                    <label for="">Keyword / Promo Code</label>
                                    <input type="text" name="keyword">
                                    <div class="divider"></div>
                                    <label for="" class="block">For FREE Load</label>
                                    <div class="date-con small-con">
                                        <label for="">Denomination</label>
                                        <select class="date gray" name="denomination">
                                            <option value="P30">P30</option>
                                        </select>
                                    </div>
                                    <div class="date-con big-con">
                                        <label for="">Launch Date</label>
                                        <input type="text" class="date gray" id="promoPickDate3" placeholder="mm/dd/yyyy" name="launchDate">
                                    </div>
                                    <div class="divider"></div>
                                    <label for="">For Raffle Entry</label>
                                    <div class="radio-con">
                                        <input type="radio" id="reg" name="rafle-entry" value="reg">
                                        <label for="reg">REG</label>
                                    </div>
                                    <label for="">KEYWORD REG NAME/GENDER/BIRTH YEAR /ADDRESS</label>
                                    <div class="radio-con">
                                        <input type="radio" id="code" name="rafle-entry" value="code">
                                        <label for="code">CODE ENTRY</label>
                                    </div>
                                    <label for="">KEYWORD &lt;CODE&gt;</label>
                                    <div class="radio-con">
                                        <input type="radio" id="hybrid" name="rafle-entry" value="hybrid">
                                        <label for="hybrid">HYBRID / BOTH</label>
                                    </div>
                                    <label for="">KEYWORD &lt;CODE&gt; / NAME/GENDER/BIRTH YEAR /ADDRESS</label>
                                    <div class="divider"></div>
                                    <input class="btn hippieBlue large-btn" type="submit" value="Submit">

                                </div>
                            </div>
                              <?php echo form_close();?>
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
