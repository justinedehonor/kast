<?php include 'includes/dashboard-header.php'; ?>

    <body class="dashboard">
        <?php include 'includes/sidemenu.php'; ?>
                <!-- Side Menu -->

                <!-- Main Content -->
                <div class="clearfix col-sm-9 col-lg-10 dashboard-main">
                   <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 trial buildContacts clearfix">
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

                                            </ul>
                                        </div>
                                        <small>Only 5 contacts allowed on trial account</small>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-7 col-md-push-0">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1 col-lg-10 col-lg-push-1 text-center">
                                            <h3>Add your contacts</h3>
                                            <input type="text" placeholder="Mobile Number" id="msid">
                                            <button class="btn glacier" type="button" id="btb-add-contact">Add Contact</button>
                                            <span class="separator bordered"></span>
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
        var contacts = [];
      $(document).ready(function(){
        $('#btn-continue').click(function(){


          // $('.contactsList-container ul > li').each(function(){
          //                console.log($(this).attr('rel'));
          //              });

            window.location ="<?php echo base_url();?>profile/trialmessage";
          //  alert();
        });

        $('#btb-add-contact').click(function(){
          //alert();
           $('.contactsList-container ul').append('<li rel= '+$('#msid').val()+'>'+$('#msid').val()+' <a href="#" class="close">x</a></li>');
           contacts.push($('#msid').val());
           $('#msid').val('');
           console.log(contacts);
        });
        //sending data number to right pane

        $('.close a').click(function(){

        });


      });
        </script>


<?php include 'includes/dashboard-footer.php'; ?>
