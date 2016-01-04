<?php
/*
Template Name: page-pl
*/
get_header(); ?>

<style type="text/css">
#CDT{
 font-size: 26px;
  color:#F00;
}
#CDT .day{
 font-size: 48px;
 color:#F00;
}
#CDT .hour,#CDT .min,#CDT .sec{
 font-size: 48px;
  color:#F00;
}
</style>

		<div id="main">





<div id="main-pl">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>

</div><!-- #main-pl -->






<?php get_template_part( 'loop', 'manga-02' );?>

</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>