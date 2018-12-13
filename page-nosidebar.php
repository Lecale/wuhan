<?php
/*
Template Name: Page with no sidebar
*/
?>
<?php include (TEMPLATEPATH . '/header-nosidebar.php'); ?>


	<div id="content" class="fullwidthcolumn">

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
			<div class="post-top-ns"><div class="post-bottom-ns"><div class="entry-ns"><div class="title-ns">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small>Created by <?php the_author() ?> on <?php the_time('F jS, Y') ?></small>
			
				</div>
				

				
				
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				
		
				<p class="postmetadata"> <?php edit_post_link('Edit'); ?><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p> 
				</div>

			</div></div>
	
		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

	<?php endif; ?>

	</div>
	
<?php get_footer(); ?>
