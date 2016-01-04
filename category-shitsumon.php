<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="main">

<?php get_template_part( 'loop', 'qa' ); ?>
<?php get_template_part( 'loop', 'shindan' );?>
<?php get_template_part( 'loop', 'search' );?>

</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
