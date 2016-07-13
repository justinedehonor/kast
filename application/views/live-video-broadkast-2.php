<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
          <?php include 'includes/sidemenulive.php'; ?>
                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-md-10 col-md-push-1 col-lg-10 col-lg-push-1 live videoBroadkast clearfix">
                          <?php   echo form_open('profile/video_submit');?>
                            <div class="row">
                                <div class="col-xs-12 title">
                                    <h3>Promo</h3>
                                    <h4>SMS Broadkast Setup</h4>
                                </div>
                                <div class="col-xs-12 col-sm-5 pull-right">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="phoneView">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-7 col-md-push-0 clearfix">
                                    <h3>Sender Name</h3>
                                    <div class="group">
                                        <div class="dropdown" name="promoSenderName">
                                            <select name="promoSenderName" id="sender-list">
                                                <option value="KAST">KAST(Default)</option>
                                                <option value="Forever21">Forever21</option>
                                                <option value="">Request Sender ID</option>
                                            </select>
                                            <input type="hidden" value="<?php echo htmlentities($data); ?>" name="data">
                                        </div>
                                    </div>
                                    <div class="group">
                                        <textarea class="col-xs-12" name="promoSenderMessage" id="messages" cols="30" rows="6" placeholder="Type your message here"></textarea>
                                        <small class="pull-right" ><span id="message-counter">0</span>/160</small>
                                    </div>
                                    <br clear="all" />
                                    <br clear="all" />
                                    <span class="col-xs-6">
                                        <button class="btn neptune" type="button" id="btn-back">Go Back</button>
                                    </span>
                                    <span class="col-xs-6">
                                        <input type="submit" class="btn hippieBlue">
                                    </span>
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

        <script type="text/javascript">
      $(document).ready(function(){

          $('#btn-back').click(function(){
            window.location ="<?php echo base_url();?>Profile/video";
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


          $('#messages').keyup(function(){
            var count = $('#messages').val().length;
            $('#message-counter').text(count);
            //$('#message-bubble').text($('#messages').val());

          });


      });
      </script>


<?php include 'includes/dashboard-footer.php'; ?>
