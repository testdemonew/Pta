<?php //why Post Widget

class whypost_widget extends WP_Widget {



 function whypost_widget() {



  $widget_ops = array('description' => 'Why Post Widget' );

  

       parent::WP_Widget(false, $name = __('Why Post Widget', eedan),$widget_ops);   



 }



 function form($instance) {

  $title = strip_tags($instance['title']);

  $text = esc_textarea($instance['text']);

  // outputs the options form on admin

       ?>

<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Number of Post:'); ?></label>

  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" /></p>



<?php 



 }



 function widget($args, $instance) {

	



  ?>

<ul>

	<?php

	$no = $instance['no_post'];

    global $post;

    $tmp_post = $post;

    $args = array( 'posts_per_page' => $instance['title'],'category' => 4 );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) : setup_postdata($post); ?>

        <li>

        <div class="cosmetic2">

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="cosimage"> 

         <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($pageChild->ID), 'full');?>

   <img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo $src[0];?>&amp;w=212&amp;h=146&zc=0" 



alt=""  class="gradimage"/>

         </div>

        <div class="coscontent">


        <?php the_content_limit(365); ?>
<a class="readmore" href="<?php the_permalink() ?>">Read More...</a>

        </div>

        <div class="clear"> </div>

      </div>

        </li>

    <?php endforeach; ?>

    <?php $post = $tmp_post; ?>

</ul> 





<?php /*?><ul>

<?php





$args1 = array( 'posts_per_page' => 3, 'offset'=> 1, 'category' => 4,'post_type' => 'post' );



$myposts = get_posts( $args1 );

foreach ( $myposts as $post2 ) : setup_postdata( $post2 ); ?>

	<li>

	<div class="cosmetic2">

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="cosimage"> 

         <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($pageChild->ID), 'full');?>

   <img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo $src[0];?>&amp;w=212&amp;h=146&zc=0" 



alt=""  class="gradimage"/>

         </div>

        <div class="coscontent">

        <p>

          <?php the_content(); ?>

          <div class="clear"> </div>

          </p>

        </div>

        <div class="clear"> </div>

      </div>

	</li>

<?php endforeach; 

wp_reset_postdata();?>

</ul><?php */?>





































<?php 



 }



}



register_widget('whypost_widget');