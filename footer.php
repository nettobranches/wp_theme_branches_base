<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Daily Cooking Custom
 */
?>

 <!-- Start: Footer Dark -->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Start: Services -->
                    <div class="col-sm-6 col-md-3 item">
                        <?php if (   is_active_sidebar('first-footer-widget-area') ): dynamic_sidebar( 'first-footer-widget-area' ); endif; ?>

                    </div>
                    <!-- End: Services -->
                    <!-- Start: About -->
                    <div class="col-sm-6 col-md-3 item">
                        <?php if (   is_active_sidebar('second-footer-widget-area') ): dynamic_sidebar( 'second-footer-widget-area' ); endif; ?>
                      
                    </div>
                    <!-- End: About -->
                    <!-- Start: Footer Text -->
                    <div class="col-md-6 item text">
                        <?php if (   is_active_sidebar('third-footer-widget-area') ): dynamic_sidebar( 'third-footer-widget-area' ); endif; ?>
                        
                    </div>
                    <!-- End: Footer Text -->
                    <!-- Start: Social Icons -->
                    <div class="col item social"><a href="https://www.facebook.com/SCComputacion/"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    <!-- End: Social Icons -->
                </div>
                <!-- Start: Copyright -->
                <p class="copyright">Company Name © 2017</p>
                <!-- End: Copyright -->
            </div>
        </footer>
    </div>
    <!-- End: Footer Dark -->
<?php wp_footer(); ?>
</body>

</html>

