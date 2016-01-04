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

<div id="main-bn">
<img src="<?php bloginfo('template_url'); ?>/img/kanban-taiken.jpg" alt="<?php the_title(); ?>" />
</div>



<?php get_template_part( 'loop', 'taiken' ); ?>

<?php get_template_part( 'loop', 'manga' );?>
<?php get_template_part( 'loop', 'search' );?>

</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
