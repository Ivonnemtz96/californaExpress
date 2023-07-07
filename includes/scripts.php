<!-- JS here -->
<script src="/assets/js/vendor/jquery.js"></script>
<script src="/assets/js/vendor/waypoints.js"></script>
<script src="/assets/js/bootstrap-bundle.js"></script>
<script src="/assets/js/swiper-bundle.js"></script>
<script src="/assets/js/nouislider.js"></script>
<script src="/assets/js/magnific-popup.js"></script>
<script src="/assets/js/parallax.js"></script>
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/jarallax.js"></script>
<script src="/assets/js/nice-select.js"></script>
<script src="/assets/js/counterup.js"></script>
<script src="/assets/js/jarallax.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/isotope-pkgd.js"></script>
<script src="/assets/js/imagesloaded-pkgd.js"></script>
<script src="/assets/js/ajax-form.js"></script>
<script src="/assets/js/main.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js"></script>
    
    <script>
        jQuery(document).ready(function () {

            function openFancybox() {
                setTimeout(function () {
                    jQuery('#popuplink').trigger('click');
                }, 500);
            };

            var visited = jQuery.cookie('visited');
            if (visited == 'yes') {
                // second page load, cookie active
            } else {
                openFancybox(); // first page load, launch fancybox
            }
            jQuery.cookie('visited', 'yes', {
                expires: 1 // the number of days cookie  will be effective
            });
            jQuery("#popuplink").fancybox({
                modal: true,
                maxWidth: 1000,
                overlay: {
                    closeClick: true
                }
            });
        });
    </script>
    