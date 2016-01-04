<?php
	/*
	Template Name Posts:キャッシング体験談テンプレート
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

<div id="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<div id="main-taiken">
<h3><?php the_title(); ?></h3>
<div id="main-taiken-cont">
<p><?php the_content(); ?></p>

</div><!-- #main-taiken-cont -->
</div><!-- #main-taiken -->

<?php get_template_part( 'loop', 'pagenavi' ); ?>

<?php get_template_part( 'loop', 'taiken' ); ?>

<?php endwhile; // end of the loop. ?>

</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>