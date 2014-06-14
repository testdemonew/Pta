<?php //About Us Widget

class aboutus_widget extends WP_Widget {



 function aboutus_widget() {



  $widget_ops = array('description' => 'About Us Widget' );

  

       parent::WP_Widget(false, $name = __('About Us Widget', eedan),$widget_ops);   



 }



 function form($instance) {

  $title = strip_tags($instance['title']);

  $text = esc_textarea($instance['text']);

  // outputs the options form on admin

       ?>

<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>

  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" /></p>

<p>

  <label for="<?php echo $this->get_field_id( 'image_url' ); ?>">Image Url:</label>

  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" value="<?php echo $instance['image_url']; ?>" />

</p>



<textarea class="widefat" rows="15" cols="15" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $instance['text']; ?></textarea>

<p>

  <label for="<?php echo $this->get_field_id( 'readmore_link' ); ?>">Read More Url:</label>

  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'readmore_link' ); ?>" value="<?php echo $instance['readmore_link']; ?>"/>

</p>

<?php 



 }



 function widget($args, $instance) {

	



  ?>

<?php /*?><div class="aboutus_widget">

 <h2><?php echo $instance['title']; ?></h2>    

    <img src="<?php echo $instance['image_url']; ?>" alt="" />

 <p><?php echo $instance['text']; ?></p> <a href="<?php echo $instance['readmore_link']; ?>">Read more... </a>

    <div class="clear"></div>

</div><?php */?>

<div class="about">

    

      <h2><?php echo $instance['title']; ?> </h2>

      <img src="<?php echo $instance['image_url']; ?>" alt="" />

      <p><?php echo $instance['text']; ?> </p>

      <a href="<?php echo $instance['readmore_link']; ?>"> Read More >> </a> </div>

<?php 



 }



}



register_widget('aboutus_widget');