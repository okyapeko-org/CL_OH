<?php
	/*
	Template Name Posts:よくあるご質問テンプレート
	*/
?>

<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="main" role="main">

<div id="main-qa">
<h3>よくあるご質問</h3>
<div id="main-qa-q">
<p><?php the_title(); ?></p>
</div><!-- #main-qa-q -->
<div id="main-qa-a">
<?php while ( have_posts() ) : the_post(); ?>
<p><?php the_content(); ?></p>
<?php endwhile; // End the loop. Whew. ?>
</div><!-- #main-qa-a -->
</div><!-- #main-qa -->
<?php get_template_part( 'loop', 'qa' ); ?>



</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
