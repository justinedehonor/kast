<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
      <?php include 'includes/sidemenulive.php'; ?>
                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 live buildContacts clearfix">
                            <form action="">
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
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                                <li>09288769654 <a href="#" class="close">x</a></li>
                                            </ul>
                                        </div>
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
                                            <input type="text" placeholder="Mobile Number">
                                            <button class="btn glacier">Add Contact</button>
                                            <span class="separator bordered"></span>
                                            <div class="row">
                                                <span class="col-xs-6">
                                                    <button class="btn neptune">Go Back</button>
                                                </span>
                                                <span class="col-xs-6">
                                                    <button type="button" class="btn aqua" data-toggle="modal" data-target="#myModal">Continue</button>
                                                </span>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" role="dialog">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content clearfix">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <h4 class="col-xs-12 text-center">You don’t have any approved sender IDs yet!</h4>
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

            window.location ="<?php echo base_url();?>Profile/message";
          //  alert();
        });
      });
        </script>
<?php include 'includes/dashboard-footer.php'; ?>
