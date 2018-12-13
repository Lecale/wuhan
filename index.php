<?php get_header(); ?>


	<div id="content" class="narrowcolumn">
<div class="introduction" style="margin: 10px; font-size: 0.8em; font-weight: bold;">
<p>Welcome to our website. The Irish Go Association is the official organisation for promotion of the ancient oriental game of Go in Ireland. We are members of the European Go Federation and the International Go Federation, and organise numerous club and tournament events throughout the year. The IGA promotes awareness of the game including teaching sessions and providing public infomation. Please read further here for details of member benefits and our activities.</p>
</div>

        <?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
			<div class="post-top"><div class="post-bottom"><div class="entry"><div class="title">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small>Posted by <?php the_author() ?> on <?php the_time('F jS, Y') ?></small>
			
				</div>
				

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				
		
				<p class="postmetadata"> <?php the_category(', ') ?> <strong>|</strong> <?php edit_post_link('Edit','','<strong>|</strong>'); ?><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p> 
				</div>

			</div></div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
		</div>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
