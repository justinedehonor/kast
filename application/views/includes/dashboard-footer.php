
<footer>
    <div class="container-fluid">
        <ul class="links">
            <li><a href="#">About Kast</a></li>
            <li><a href="#">Documentation</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <span class="col-xs-5 col-sm-2 col-md-2 col-lg-1 brand">
            <a href="#">
                <img src="<?php echo base_url(); ?>assets/images/img-risingtide-logo.png" alt="">
            </a>
        </span>
    </div>
</footer>

</body>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom-file-input.js"></script>
    <script>
        $(function () {
            $('.navbar-toggle').click(function () {
                $(this).toggleClass('in');
                $('.navbar-nav').toggleClass('slide-in');
                $('.dashboard-main').toggleClass('dashboard-main-in');
            });
        });
        //Datepicker
        $(document).ready(function () {
          $("#pickAdate").datepicker({
            endDate: "today", // birthdays should be in the past
            startView: 2 // show a decade instead of a month initially
          }).on("changeYear changeMonth", function (event) {
            $(this).datepicker("update", event.date);
          });
        });
        $('#myModal').appendTo("body");
        $('#pickAtime').timepicker();
    </script>

</html>
