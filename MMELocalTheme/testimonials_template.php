<?php



/* 



	Template Name: Testimonials



*/ 



?>
<?php get_header(); ?>

<div class="container">
<div class="cont2">
<div class="cont2left">
<div class="testcoll">
  <?php 

            

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

   

    $args1 = array( 'posts_per_page'=>10,'paged' => $paged,'post_type' =>'testimonials');

         

        

      $temp = $wp_query;  // assign orginal query to temp variable for later use   

       $wp_query = null;

        $wp_query = new WP_Query($args1); 

      

        if( have_posts() ) {?>
<h1 class="entry-title"><?php the_title(); ?></h1>
  <ul>

     <?php while ($wp_query->have_posts()) : $wp_query->the_post();  $src= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');?> 
<li>
<div class="boximages"> <img src="<?php bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $src[0];?><?php echo $attributes; ?>&amp;w=120&amp;h=90&zc=0" /></div>
<div class="contentbox"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<div class="rating"> <?php if(function_exists('the_ratings')) { the_ratings(); } ?> <span class="by"> by</span>  <?php the_author(); ?> </div>
<?php the_content_limit(180); ?></div></li>
	
  <?php endwhile; } ?>

	
</ul>
</div>
		<div class="navigation">
		<div class="alignright"><?php previous_posts_link('&laquo; Previous ') ?></div>
			<div class="alignleft"><?php next_posts_link('Next &raquo;') ?></div>

	

		</div>

</div>



<div class="cont2right"><?php get_sidebar(); ?></div><div class="clear"> </div></div>
</div>
<?php get_footer(); ?>
