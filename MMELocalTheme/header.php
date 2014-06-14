<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php

	/*

	 * Print the <title> tag based on what is being viewed.

	 */

	global $page, $paged;



	wp_title( '|', true, 'right' );



	// Add the blog name.

	bloginfo( 'name' );



	// Add the blog description for the home/front page.

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) )

		echo " | $site_description";



	// Add a page number if necessary:

	if ( $paged >= 2 || $page >= 2 )

		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );



	?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/responsive.css" />


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php

	/* We add some JavaScript to pages with the comment form

	 * to support sites with threaded comments (when in use).

	 */

	if ( is_singular() && get_option( 'thread_comments' ) )

		wp_enqueue_script( 'comment-reply' );



	/* Always have wp_head() just before the closing </head>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to add elements to <head> such

	 * as styles, scripts, and meta tags.

	 */

	wp_head();

?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/flexslider.css">
<script src="<?php bloginfo('template_url'); ?>/jquery.flexslider-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/jquery.flexslider.js"></script>



<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
	</script>


<script type="text/javascript">
if (matchMedia('only screen and (max-width:960px)').matches) {
function toggleDiv(divId) {
 
jQuery("#"+divId).toggle();
}
} 
</script> 
</head>



<body <?php body_class(); ?>>



  <div id="header">
  <?php /*?><div class="hedaer_left">
  <img src="<?php bloginfo('template_url');?>/images/head_grl.png"/>
  </div>
  <div class="head_text">
  <h1>Experience The Difference</h1>
  <p>He has experience in all phases of dentistry remain up to date on the latest </p>
  <h2>  Call Us Today: (021) 925-8282</h2>
  </div>
  <div class="header_right">
    <img src="<?php bloginfo('template_url');?>/images/head_boy.png"/>
  </div><div class="clear"></div>
  <?php */?>
   <div class="head_text">
  
  <h2><?php echo get_option('wpc_ph'); ?> </h2>
  </div>
  <img src="<?php echo get_option('wpc_hea'); ?>" alt="<?php the_title(); ?>"/> 
  
  </div>
<div id="wrapper">
  <div class="header_bottom"> 

    <!--<div class="menu_left">

</div>-->

    <div class="menu_mid">
<a id="nav_m"  href="javascript:toggleDiv('nevtop');">Menu</a>
      <div id="nevtop" class="menuu">

      	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
      </div>

      <div class="social_icons">

        <ul>

          <li> <a href="<?php echo get_option('wpc_tlink'); ?>"> <img src="<?php bloginfo('template_url');?>/images/twitter.png" /></a></li>

          <li> <a href="<?php echo get_option('wpc_face'); ?>"> <img src="<?php bloginfo('template_url');?>/images/fb.png" /></a></li>

          <li> <a href="<?php echo get_option('wpc_rss'); ?>"> <img src="<?php bloginfo('template_url');?>/images/rss.png" /></a></li>

          <li> <a href="<?php echo get_option('wpc_you'); ?>"> <img src="<?php bloginfo('template_url');?>/images/youtube.png" /></a></li>
          
            <li> <a href="<?php echo get_option('wpc_gpl'); ?>"> <img src="<?php bloginfo('template_url');?>/images/gplus.png" /></a></li>

        </ul>
  <div class="clear"> </div>
      </div>

      <div class="clear"> </div>

    </div>

    <!--<div class="menu_right">

</div>-->

    <div class="clear"> </div>

  </div>

