<!-- //sing-in -->
<!--<script src="../assets/js/jquery.min.js"></script> -->
<script src="../assets/js/uikit.min.js"></script>
<script src="../assets/js/uikit-icons.min.js"></script>
<script src="../assets/js/main.js"></script>


<!-- jquery library  -->
<!--<script src="../assets/js/jquery-3.2.1.min.js"></script> -->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/imagesloaded.min.js"></script>
<script src="../assets/js/YouTubePopUp.jquery.js"></script>


<!-- Toggle Visibility With Eye Icon  -->
<script>
    jQuery(function() {

        jQuery('#eye').click(function() {

            if (jQuery(this).hasClass('fa-eye-slash')) {

                jQuery(this).removeClass('fa-eye-slash');

                jQuery(this).addClass('fa-eye');

                jQuery('#password').attr('type', 'text');

            } else {

                jQuery(this).removeClass('fa-eye');

                jQuery(this).addClass('fa-eye-slash');

                jQuery('#password').attr('type', 'password');
            }
        });
    });
</script>