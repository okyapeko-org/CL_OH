<?php
/*
Template Name: page-sindan-s
*/
get_header(); ?>

		<div id="wrap">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="main-yesno-s">
<p class="shindan-start"><a href="<?php echo home_url( '/' ); ?>sindan"><img src="<?php bloginfo('template_url'); ?>/img/shindanbutton.gif" alt="診断スタート" /></a></p>
</div>
<?php endwhile; // end of the loop. ?>

<!-- page sindan php -->



		</div><!-- #wrap -->
<?php get_footer(); ?>