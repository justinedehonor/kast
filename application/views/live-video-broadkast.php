<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
      <?php include 'includes/sidemenulive.php'; ?>
                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-md-10 col-md-push-1 col-lg-10 col-lg-push-1 live videoBroadkast clearfix">
                          <?php

                          echo form_open('profile/send_sms');
                          ?>
                            <div class="row">
                                <div class="col-xs-12 title">
                                    <h3>Video BroadKast</h3>
                                    <h4>Video Portal Setup</h4>
                                </div>
                                <div class="col-xs-12 col-sm-5 pull-right">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="phoneView">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-7 col-md-push-0">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="group">
                                                <label for="">Campaign Name</label>
                                                <textarea class="col-xs-12" name="campaignName" id="" cols="30" rows="3"></textarea>
                                            </div>
                                            <div class="group">
                                                <label for="">Purpose</label>
                                                <div class="dropdown">
                                                    <select name="purpose" id="">
                                                        <option value="Option1">Option1</option>
                                                        <option value="Option2">Option2</option>
                                                        <option value="Option3">Option3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <h4>Campaign Period</h4>

                                                <span class="chooseSchedule">
                                                    <label for="">Start</label>
                                                    <input type="text" class="date" id="pickAdate" placeholder="mm/dd/yyyy" name="campaignStart">
                                                </span>
                                                <span class="chooseSchedule">
                                                    <label for="">End</label>
                                                    <input type="text" class="date" id="pickAdate1" placeholder="mm/dd/yyyy" name="campaignEnd">
                                                </span>
                                            </div>
                                            <div class="group">
                                                <label for="">How many contacts do you want your video to reach?</label>
                                                <div class="dropdown">
                                                    <select name="reach" id="">
                                                        <option value="Option1">Option1</option>
                                                        <option value="Option2">Option2</option>
                                                        <option value="Option3">Option3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="group">
                                                <label for="">Video Elements</label>
                                                <div class="batchUpload">
                                                    <input type="file" name="videoElement" id="fileUpload" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                                                    <label for="fileUpload"><span>Upload your logo</span></label>
                                                    <small class="pull-right">1000 x 229px | max of 500kb</small>
                                                </div>
                                            </div>
                                            <div class="group clearfix">
                                                <label for="">Your Caption</label>
                                                <textarea class="col-xs-12" name="caption" id="" cols="30" rows="3"></textarea>
                                                <small class="pull-right">0/500</small>
                                            </div>
                                            <div class="group clearfix">
                                                <input type="text" placeholder="VIDEO URL" name="videoUrl">
                                                <small class="pull-right">Vimeo or Youtube</small>
                                            </div>
                                            <div class="group">
                                                <input class="btn hippieBlue" type="submit" id="btn-setup-sms" value="SETUP SMS BROADKAST">
                                            </div>
                                        </div>
                                    </div>
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
        <!-- <script type="text/javascript">
      $(document).ready(function(){

          $('#btn-setup-sms').click(function(){
            window.location ="<?php echo base_url();?>Profile/send_sms";
          });
      });
      </script> -->


<?php include 'includes/dashboard-footer.php'; ?>
