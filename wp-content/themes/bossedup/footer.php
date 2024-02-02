<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			

<footer class="footer-part text-center" id="contact">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                   
                    <div class="address">
                        <p><a href="#"><span><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp;&nbsp;Call us: +91 987654321</a></p>
                        <p><a href="#"><span><i class="fa fa-envelope" aria-hidden="true"></i></span>&nbsp;&nbsp;info@boosedup.com</a></p>
                    </div>

                    <div class="d-flex footer-icon">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-facebook"
                                aria-hidden="true"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-linkedin"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="bottom-text2">
                        <a href="">Home</a>
                        <a href="">About Us</a>
                        <a href="">Our Service</a>
                        <a href="">For Brokers</a>
                        <a href="">Resources</a>
                        <a href="">Contact Us</a>
                    </div>
                </div>
                

            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="bottom-text1">
                        <p>© Copyright <?php echo date('Y'); ?> Bossed UP Funding Group. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="bottom-text">
                        <a href="">Privacy</a>
                        <a href="">Terms of Use</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/stellarnav.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/counterup/counterup.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        jQuery('.stellarnav').stellarNav({
            breakpoint: 960,
            position: 'right',
            phoneBtn: '18009997788',
            locationBtn: 'https://www.google.com/maps'
        });
    });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

<?php wp_footer(); ?>
</body>

</html>