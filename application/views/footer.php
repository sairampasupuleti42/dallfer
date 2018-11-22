<footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="fh5co-social-icons">
                        <a href="#"><i class="icon-twitter2"></i></a>
                        <a href="#"><i class="icon-facebook2"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-dribbble2"></i></a>
                        <a href="#"><i class="icon-youtube"></i></a>
                    </p>
                    <p>Copyright 2018 @<a href="#">Status Cluster Infotech Pvt. Ltd</a>. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- END fh5co-page -->
</div>
<!-- END fh5co-wrapper -->

<!-- jQuery Easing -->
<script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>assets/js/sticky.js"></script>
<!-- Stellar -->
<script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="<?php echo base_url();?>assets/js/hoverIntent.js"></script>
<script src="<?php echo base_url();?>assets/js/superfish.js"></script>
<!-- Main JS -->
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>bower_components/jquery.validate.min.js"></script>
<script>
    $(function () {
        $('#contactForm').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                email: {email: true, required: true},
                password: {required: true}
            },
            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },
            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            }
        });
    });
</script>
</body>
</html>