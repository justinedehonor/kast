<?php include 'includes/dashboard-header.php'; ?>

 <body class="dashboard">
        <?php include 'includes/sidemenulive.php'; ?>
                <!-- Side Menu -->
                
                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-xs-12 col-md-12 border-bot">
                            <h4>Community Building</h4>
                        </div>
                        <div class="col-md-10 col-md-offset-1 col-lg-9 col-lg-offset-1 live buildContacts clearfix com-build">
                             <?php 
                                echo form_open('profile/community_submit');
                            ?>
                            <div class="row">
                                
                                <div class="col-xs-12 col-md-6">
                                   <label for="">Your Message</label>
                                   <input type="text" name="message">
                                   <label for="">Who will pay for the broadKAST?</label>
                                   <input type="text" name="willPay">
                                   <label for="">Confirmation Message Opt in</label>
                                   <textarea rows="3" name="confirmMessageIn"></textarea>
                                   <div class="remain-txt"><span>160</span>/160</div>
                                   <label for="">Confirmation Message Opt out</label>
                                   <textarea rows="3" name="confirmMessageOut"></textarea>
                                   <div class="remain-txt"><span>160</span>/160</div>
                                </div>
                                <div class="col-xs-12 col-md-5 col-md-offset-1">
                                    <label for="">Do yo want to give load incentive?</label>
                                    <div class="btn-con">
                                        <button class="btn violet">No</button>
                                        <button class="btn hippieBlue auto-width">Yes</button>
                                    </div>
                                    <label for="">Choose Provider / Telco</label>
                                    <select name="provider">
                                        <option value="Globe">Globe</option>
                                        <option value="Smart">Smart</option>
                                    </select>
                                    <div class="date-con small-con">
                                        <label for="">Load</label>
                                        <select class="date" name="load">
                                            <option value="P30">P30</option>
                                             <option value="P60">P60</option>
                                        </select>
                                    </div>
                                    <div class="date-con big-con">
                                        <label for="">Launch Date</label>
                                        <input type="text" class="date gray" id="pickAdate" name="launchDate"placeholder="mm/dd/yyyy">
                                    </div>
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