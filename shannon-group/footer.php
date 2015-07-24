<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package shannon group
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer_container">
                <div class="footer_content">
                    <div class="footer_navigation grid-16-4">
                    <h1>Navigation 1</h1>
                    <?php
                        wp_nav_menu( 
                        array( 'theme_location' => 'second', 
                               'menu_id' => 'second-menu' ) ); 
                    ?>
                </div>
                
                <div class="footer_navigation grid-16-4">
                    <h1>Navigation 2</h1>
                    <?php
                        wp_nav_menu( 
                        array( 'theme_location' => 'primary', 
                               'menu_id' => 'primary-menu' ) ); 
                    ?>
                </div>
                
                <div class="footer_contact grid-16-4">
                    <h1>Contact Us</h1>
                    <p class="footer_contact_phone">
                        Ph: +61 (02) 9200 1234
                    </p>
                    <p class="footer_contact_phone">
                        Fax: +61 (02) 9200 1234
                    </p>
                    <div class="footer_contact_address">
                        <p>123 George Street</p>
                        <p>Sydney NSW 2000</p>
                        <p>Australia</p>
                    </div>
                </div>
                <div class="footer_logo grid-16-4">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                       class="footer_logo_image">
                       <img src="<?php echo wp_get_attachment_image_src(1726, 'full')[0];?>" />
                    </a>
                    <div class="footer_logo_info">
                        <p>Shannon Group Services</p>
                        <p>Copyright © 2015 All Rights Reserved</p>
                        <p>ABN 123 456 789</p>
                    </div>
                </div>
                </div>
                
            </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="//use.typekit.net/lfv4ndq.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</body>
</html>
