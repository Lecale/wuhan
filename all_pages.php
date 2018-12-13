<?php
/*
Template Name: All Pages
*/
?>

<?php get_header(); ?>

        <div id="content" class="narrowcolumn">

<h2>All Pages:</h2>
  <ul>
     <?php wp_list_pages('depth=1&sort_column=menu_order&title_li=<h2>Pages</h2>' ); ?>
  </ul>
</div>  
<?php get_sidebar(); ?>
<?php get_footer(); ?>

