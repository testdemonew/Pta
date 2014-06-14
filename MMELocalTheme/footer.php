<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	//get_sidebar( 'footer' );
?>

	  <div class="footer">
  <div class="footer_inner">
   <?php dynamic_sidebar('first-footer-widget-area');?>
    <?php dynamic_sidebar('second-footer-widget-area');?>
    <?php dynamic_sidebar(' third-footer-widget-area');?>

  
        <div class="clear"> </div>
  </div>
  </div>
  <div class="fotter_bottom">
  <p><?php echo get_option('wpc_copyright'); ?> <a href=""><?php echo get_option('wpc_site'); ?> </a>. <?php echo get_option('wpc_privey'); ?>  </p>
  </div>
  
  </div>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
