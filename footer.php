<hr />

<div id="footer">

	<p>
		<?php bloginfo('name'); ?> is proudly powered by 
		<a href="http://wordpress.org">WordPress</a><br/>Theme Designed by <a href="http://www.authenticasian.com">Meng Gao</a>
		<br /><a href="feed:<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
		and <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.		

	</p>
</div>
</div></div></div>

<script type="text/javascript">
<?php
global $userdata;
if ($userdata) {
 echo "z_user_name=\"" . $userdata->display_name . "\";\n";
}
?>
z_post_title="<?php the_title();?>";
z_post_category="<?php $c=get_the_category();echo $c[0]->cat_name;?>";
</script>


<?php wp_footer(); ?>
</body>
</html>
