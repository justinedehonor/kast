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
                                                    <h5 class="name"><span id="sender-name">KAST</span></h5>
                                                    <!--Span options: .left & .right-->
                                                    <span id="message-bubble" style="display:none;"></span>

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
                                                <select name="" id="sender-list">
                                                    <option value="">KAST(Default)</option>
                                                    <option value="">Forever21</option>
                                                    <option value="">Request Sender ID</option>
                                                </select>
                                            </div>
                                            <textarea class="col-xs-12" name="" id="messages" cols="30" rows="6" placeholder="Type your message here"></textarea>
                                            <small class="pull-left">1 Part Message Only</small>
                                            <small class="pull-right" id=""><span id="message-counter">0</span>/160</small>
                                            <br clear="all" />
                                            <br clear="all" />

                                                <div class="row">
                                                    <span class="col-xs-6">
                                                        <button class="btn neptune" type="button" id="btn-back">Go Back</button>
                                                    </span>
                                                    <span class="col-xs-6">
                                                        <button type="button" class="btn aqua" data-toggle="modal" id="btn-continue" data-target="#myModal">Continue</button>
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

        $("#sender-list").on('change',function() {
            if($("#sender-list option:last").is(":selected")){
              alert();
            }else if($("#sender-list option:first").is(":selected")){
                $('#sender-name').text("KAST");
            }else{
              $('#sender-name').text($(this).find("option:selected").text());
            }

          });

        $('#btn-continue').click(function(){

            window.location ="<?php echo base_url();?>Profile/sched";
          //  alert();
        });

        $('#btn-back').click(function(){

            window.location ="<?php echo base_url();?>Profile/contacts";
          //  alert();
        });


      });
        </script>

<?php include 'includes/dashboard-footer.php'; ?>
