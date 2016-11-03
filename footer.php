<?php
/**
 * The Footer template
 * @package   Chocolat
 * @copyright Copyright (c) 2014 Mignon Style
 * @license   GNU General Public License v2.0
 * @since     Chocolat 1.0
 */
?>




<?php get_sidebar(); ?>


<?php
	$contents_class ='';

	if ( is_active_sidebar( 'footer_widget' ) ) {
		$contents_class = 'active-widget-footer';
	} else {
		$contents_class = '';
		if ( is_active_sidebar( 'ad_large' ) || chocolat_sidebar() ) {
			$contents_class = 'no-widget-footer';
		}
	}
?>
<!-- footer -->
<footer class="footer ">
    <div id="footer-inner">
        <div class="footer-inner2">
            <div class="footer-logo">
                <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="http://mishie2/wp-content/uploads/2016/10/logo2-150x150.jpg" class="footer-logo-image" alt="footer logo">
                </a>
            </div>
		    <div id="footer-top">
			 <?php chocolat_contactlink( 'contactlink-bottom' ); ?>
                <p id="copyright"><?php chocolat_footer_copyright(); ?></p>
			</div>
        </div>
		
	</div>
</footer><!-- /footer -->

<div id="pagetop">
	<a href="#top" class="pagetop-btn ms-fc icon-c-pagetop"><span class="icon-up"><?php _e( 'PAGE TOP', 'chocolat' ); ?></span></a>
</div><!-- /pagetop -->

</div><!-- /#wrapper -->
<?php wp_footer(); ?>
</body>
</html>