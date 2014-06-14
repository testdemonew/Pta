<?php

/**

 * The Sidebar containing the primary and secondary widget areas.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */

?>



		      <div class="contact">

        <?php dynamic_sidebar('contactus-widget-area');?>

     

      </div>

      

      <div class="testimonials">

        <h2>Testimonials </h2>

        <?php 

            

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

   

    $args1 = array( 'posts_per_page'=>4,'paged' => $paged,'post_type' =>'testimonials');

         

        

      $temp = $wp_query;  // assign orginal query to temp variable for later use   

       $wp_query = null;

        $wp_query = new WP_Query($args1); 

      

        if( have_posts() ) {?>

  <ul>

     <?php while ($wp_query->have_posts()) : $wp_query->the_post();?> 

 <li> 

 <div class="testi">

          <div class="leo"><a  href="<?php the_permalink();?>"><?php the_title(); ?></a> </div>

          <div class="rating"> <?php /*?><img src="<?php bloginfo('template_url');?>/images/star.png" /><?php */?><?php if(function_exists('the_ratings')) { the_ratings(); } ?> <span class="by"> by</span> <?php //echo get_post_meta( $post->ID,'name',true ); ?>  <?php the_author(); ?> <?php /*?><span class="via">via </span> <img src="<?php echo get_post_meta( $post->ID,'via',true ); ?>" class="ratimg"/><?php */?> </div>

          <?php the_content(); ?> 

        </div>

 </li>



    <?php endwhile; } ?>


        </ul>

        

<div class="extra-widget-area">  <?php dynamic_sidebar('extra-widget-area');?></div>
      

      </div>
<?php /*?>      
        <div class="bill_bottom"> <a href="">+Bill Eickhoff </a>

          <p> William Eickhoff Dental</p>

          <img src="<?php bloginfo('template_url');?>/images/star.png" />

          <div class="rate"> Rated: <span>5 </span>Stars By <span>17 </span>Users </div>

        </div><?php */?>
      
    
      
   
      
      
      
     
      
   