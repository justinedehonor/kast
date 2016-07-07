<?php include 'includes/dashboard-header.php'; ?>

<body class="dashboard">
  <?php include 'includes/sidemenulive.php'; ?>
  <!-- Side Menu -->

  <!-- Main Content -->
  <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
    <div class="row">
      <?php
      $attributes = array('id' => 'broadcast-live');
      echo form_open('profile/broadcast', $attributes) ?>
      <input type="hidden" name="accounttype" value="Live">
      <!-- Step 1 -->
      <div id="step1">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 live buildContacts clearfix">
          <div class="row">
            <div class="col-xs-12 col-md-7">
              <ul class="progressBar clearfix">
                <li class="col-xs-4 active">Build Contacts</li>
                <li class="col-xs-4">Create Message</li>
                <li class="col-xs-4">Broadcast Away</li>
              </ul>
            </div>
            <div class="col-xs-12 col-md-5 pull-right">
              <div class="row">
                <h3 class="text-center">Your contacts</h3>
                <div class="col-xs-10 col-xs-offset-1 contactsList-container">
                  <ul>

                  </ul>
                </div>
                <input type="hidden" name="recipients" id="recipients">
                <div class="col-xs-6 col-xs-offset-3 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                  <button class="btn neptune">Delete All</button>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-7 col-md-push-0">
              <br clear="all" />
              <div class="row">
                <div class="col-md-10 col-md-push-1 col-lg-10 col-lg-push-1 text-center">
                  <h3>Add your contacts</h3>
                  <div class="batchUpload">
                    <small>Upload by batch</small>
                    <input type="file" name="file-7[]" id="fileUpload" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                    <label for="fileUpload"><span>No file chosen</span></label>
                    <small class="pull-left">Format: csv, xls, xlsx</small>
                    <small class="pull-right">Max size: 2MB</small>
                    <button class="btn glacier">Upload</button>
                  </div>
                  <br clear="all" />
                  <span class="separator">Or</span>
                  <input type="text" placeholder="Mobile Number" id="msid">
                  <button class="btn glacier" type="button" id="btb-add-contact">Add Contact</button>
                  <span class="separator bordered"></span>
                  <button class="btn powderBlue" id="btn-continue-step1" type="button">Continue</button>                                            <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content clearfix">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                          <h4 class="col-xs-12 text-center">You donâ€™t have any approved sender IDs yet!</h4>
                          <span class="col-xs-10 col-xs-offset-1">
                            <button type="button" class="col-xs-12 btn neptune" id="btn-continue">Use KAST as default</button>
                            <button type="button" class="col-xs-12 btn powderBlue">Request sender ID</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Step 2 -->
      <div id="step2">
        <div class="col-md-10 col-md-push-1 col-lg-10 col-lg-push-1 live createMessage clearfix">
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
                    <select name="alias" id="sender-list">
                      <option value="KAST">KAST(Default)</option>
                      <option value="Forever21">Forever21</option>
                      <option value="New">Request Sender ID</option>
                    </select>
                  </div>
                  <textarea class="col-xs-12" name="messages" id="messages" cols="30" rows="6" placeholder="Type your message here"></textarea>
                  <small class="pull-left">1 Part Message Only</small>
                  <small class="pull-right" id=""><span id="message-counter">0</span>/160</small>
                  <br clear="all" />
                  <br clear="all" />
                  <div class="row">
                    <span class="col-xs-6">
                      <button class="btn neptune" type="button" id="btn-back">Go Back</button>
                    </span>
                    <span class="col-xs-6">
                      <!-- <button type="button" class="btn aqua" data-toggle="modal" id="btn-continue" data-target="#myModal">Continue</button> -->
                      <button type="button" class="btn aqua" id="btn-continue-step2">Continue</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Step 3 -->
      <div id="step3">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 live scheduleBroadkast clearfix">
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
                    <input type="text" class="date" id="pickAdate" placeholder="mm/dd/yyyy" name="pickAdate">
                    <input type="text" class="input-group-addon time" id="pickAtime" placeholder="12:00 AM" name="pickAtime">
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
        </div>
      </div>
      <!-- End -->
      <?php echo form_close(); ?>
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

var recipients = [];
$(document).ready(function(){

  $("#step2, #step3").hide();
  $("#btn-continue-step1").click(function(){
    $("#recipients").val(recipients);
    $("#step1").hide();
    $("#step2").show();
  });
  $("#btn-continue-step2").click(function(){
    messages = $("#messages").val();
    alias = $("#senderName").val();
    $("#step2").hide();
    $("#step3").show();
  });

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

  $('#btb-add-contact').click(function(){
    //alert();
    $('.contactsList-container ul').append('<li rel= '+$('#msid').val()+'>'+$('#msid').val()+' <a href="#" class="close">x</a></li>');
    recipients.push($('#msid').val());
    $('#msid').val('');
  });

});
</script>
<?php include 'includes/dashboard-footer.php'; ?>
