<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
          <?php include 'includes/sidemenulive.php'; ?>
                  <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 live scheduleBroadkast clearfix">
                            <form action="">
                            <div class="row">
                                <div class="col-xs-12 col-md-7">
                                    <ul class="progressBar clearfix">
                                        <li class="col-xs-4">Build Contacts</li>
                                        <li class="col-xs-4">Create Message</li>
                                        <li class="col-xs-4 active">Broadcast Away</li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-md-5 pull-right">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1">
                                            <div class="phoneView">
                                                <div class="messagesContainer">
                                                    <h5 class="name">Your Mama</h5>
                                                    <!--Span options: .left & .right-->
                                                    <span>kain ka ng maraming talong para lumaki</span>
                                                    <span>k dot.</span>
                                                    <span>kain ka ng maraming talong para lumaki</span>
                                                    <span>k dot.</span>
                                                    <span>kain ka ng maraming talong para lumaki</span>
                                                    <span>k dot.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-7 col-md-push-0">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1 col-lg-10 col-lg-push-1 text-center">
                                            <h3>Schedule your BroadKast</h3>
                                            <span class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0 chooseSchedule">
                                                <input type="text" class="date" id="pickAdate" placeholder="mm/dd/yyyy">
                                                <input type="text" class="input-group-addon time" id="pickAtime" placeholder="12:00 AM">
                                            </span>
                                            <div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0">
                                                <button class="btn powderBlue">Send BroadKast Later</button>
                                                <div class="separator">Or</div>
                                                <button class="btn hippieBlue" type="button" id="btn-continue">Send BroadKast Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
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

        <script type="text/javascript">
      $(document).ready(function(){
        $('#btn-continue').click(function(){

            window.location ="<?php echo base_url();?>Profile/broadcastConfirmation";
          //  alert();
        });
      });
        </script>



<?php include 'includes/dashboard-footer.php'; ?>
