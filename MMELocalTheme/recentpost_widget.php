<?php //Recent post Widget
class recentpost_widget extends WP_Widget {

 function recentpost_widget() {

  $widget_ops = array('description' => 'Recent post Widget' );
  
       parent::WP_Widget(false, $name = __('Recent Post Widget', eedan),$widget_ops);   

 }

 function form($instance) {
  $title = strip_tags($instance['title']);
  $text = esc_textarea($instance['text']);
  // outputs the options form on admin
       ?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" /></p>
<?php 

 }

 function widget($args, $instance) {

  ?>
  <div class="rcnt_posts">
<h6><?php echo $instance['title']; ?></h6>    
     <ul>
    <?php $the_query = new WP_Query( 'showposts=5' ); ?>

    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
    <?php endwhile;?>
    </ul>
    </div>
<?php 

 }

}

register_widget('recentpost_widget');