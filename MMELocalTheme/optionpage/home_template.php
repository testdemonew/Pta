<?php

/**

 * Template Name: home_template

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */



get_header(); ?>



<div class= "container">



  <div class="slider">

   <?php //if (function_exists("easing_slider")){ easing_slider(); }; ?> <?php //echo do_shortcode( '[responsive_slider]' ); ?>

   </div>

  <div class="cont">

     <?php dynamic_sidebar('home-three-widget-area');?>

   <?php /*?> <?php dynamic_sidebar('areas-widget-area');?>

  <?php dynamic_sidebar('services-widget-area');?><?php */?>

   

    <div class="clear"> </div>

  </div>

  

  <div class="cont2">

  

    <div class="cont2left">

    

    <?php $page1 =4; 



     $args = array( 'page_id' =>$page1);            





     query_posts( $args );     



     if ( have_posts() ) : while ( have_posts() ) : the_post();?>

      <div class="welcome">

              <h1>Welcome to our Website </h1>

    <?php the_content(); ?>

    </div>

<?php endwhile; endif; wp_reset_query();?>



      <h1 class="why"> Why Choose Us</h1>

      <div class="gap">

          <?php dynamic_sidebar('choose-widget-area');?>

         

          

          

      

      </div>

      <div class="ourservices">

        <?php dynamic_sidebar('ourservices-widget-area');?>



      </div>

    </div>

    

    <div class="cont2right">

    

   <?php get_sidebar(); ?>

      

    </div>

    <div class="clear"> </div>

  </div>

</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

