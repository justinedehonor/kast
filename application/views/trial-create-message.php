<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
    <?php include 'includes/sidemenu.php'; ?>
                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 trial createMessage clearfix">
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
                                                    <h5 class="name">Kast</h5>
                                                    <!--Span options: .left & .right-->
                                                    <span id="message-bubble" style="display:none;"></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-7 col-md-push-0">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1 col-lg-10 col-lg-push-1 text-center">
                                            <h3>Sender Name</h3>
                                            <input type="text" placeholder="KAST" disabled>
                                            <small class="pull-right">4/20</small>
                                            <textarea class="col-xs-12" name="" maxlength="160" id="messages" cols="30" rows="6" placeholder="Type your message here"></textarea>
                                            <small class="pull-left">1 Part Message Only</small>
                                            <small class="pull-right"><span id="message-counter">0</span>/160</small>
                                            <br clear="all" />
                                            <br clear="all" />
                                            <div class="row">
                                                <span class="col-xs-6">
                                                    <button class="btn neptune" type="button" id="btn-back">Go Back</button>
                                                </span>
                                                <span class="col-xs-6">
                                                    <button type="button" class="btn aqua" id="btn-continue">Continue</button>
                                                </span>
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

        $('#messages').keyup(function(){
        var count = $('#messages').val().length;
        $('#message-counter').text(count);


        //$('#message-bubble').text($('#messages').val());
         if(count==0){
           $('#message-bubble').hide();
         }else{
           $('#message-bubble').show();
           $('#message-bubble').text($('#messages').val());
         }


        });

        $('#btn-continue').click(function(){

            window.location ="<?php echo base_url();?>Profile/Trialsched";
          //  alert();
        });

        $('#btn-back').click(function(){

            window.location ="<?php echo base_url();?>Profile/Trialcontacts";
          //  alert();
        });
      });
        </script>

<?php include 'includes/dashboard-footer.php'; ?>
