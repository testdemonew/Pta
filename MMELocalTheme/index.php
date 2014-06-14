<?php

/**

 * @package WordPress

 * @subpackage Default_Theme

 */



get_header(); ?>



	<div class= "container">

  <div class="cont2">

    <div class="cont2left">
<div class="postcoll">
	<?php if (have_posts()) : ?>



		<?php while (have_posts()) : the_post(); ?>



			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<small><?php the_time('F jS, Y') ?>  <?php the_author() ?> </small>



				<div class="entry">

					<?php //the_content(''); ?><?php the_content_limit(200); ?>
<a class="readmore" href="<?php the_permalink() ?>">Read More...</a>
				</div>



				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

			</div>



		<?php endwhile; ?>



		<div class="navigation">
<div class="alignright"><?php previous_posts_link('&laquo; Previous ') ?></div>
			<div class="alignleft"><?php next_posts_link('Next &raquo;') ?></div>

			

		</div>



	<?php else : ?>



		<h2 class="center">Not Found</h2>

		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php get_search_form(); ?>



	<?php endif; ?>

</div>


</div>


<div class="cont2right">

   <?php get_sidebar(); ?>

                </div>

                    <div class="clear"> </div>

	</div>

    </div>



<?php get_sidebar(); ?>



<?php get_footer(); ?>

