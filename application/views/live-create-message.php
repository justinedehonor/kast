<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
          <?php include 'includes/sidemenulive.php'; ?>
                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-md-10 col-md-push-1 col-lg-10 col-lg-push-1 live createMessage clearfix">
                            <form action="">
                            <div class="row">
                                <div class="col-xs-12 col-md-7">
                                    <ul class="progressBar clearfix">
                                        <li class="col-xs-4">Build Contacts</li>
                                        <li class="col-xs-4 active">Create Message</li>
                                        <li class="col-xs-4">Broadcast Away</li>
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
                                                    <span>kain ka ng maraming talong para lumaki</span>
                                                    <span>k dot.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-7 col-md-push-0">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 text-center">
                                            <h3>Sender Name</h3>
                                            <div class="dropdown">
                                                <select name="" id="">
                                                    <option value="">KAST(Default)</option>
                                                    <option value="">Forever21</option>
                                                    <option value="">Request Sender ID</option>
                                                </select>
                                            </div>
                                            <textarea class="col-xs-12" name="" id="" cols="30" rows="6">Type your message here</textarea>
                                            <small class="pull-left">1 Part Message Only</small>
                                            <small class="pull-right">22/160</small>
                                            <br clear="all" />
                                            <br clear="all" />
                                            <span class="col-xs-6 col-xs-offset-3">
                                                <button class="btn powderBlue" id="btn-continue" type="button">Continue</button>
                                            </span>
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

            window.location ="<?php echo base_url();?>profile/sched";
          //  alert();
        });
      });
        </script>

<?php include 'includes/dashboard-footer.php'; ?>
