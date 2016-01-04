<?php
	/*
	Template Name Posts:マンガテンプレート
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



    <div id="main-manga">
        <h3 id="manga01"><?php the_title(); ?></h3>
            <div class="main-manga-cont">
                <p><?php the_content(); ?></p>
                    <div class="main-manga-comment">
                        <dl>
                        <dt><?php echo post_custom('マンガコメント'); ?></dt>
                        <dd><?php echo post_custom('マンガリンク1'); ?></dd>
                        <dd><?php echo post_custom('マンガリンク2'); ?></dd>
                        </dl>
                    </div>
            </div>
    </div>

<?php get_template_part( 'loop', 'pagenavi' ); ?>
<?php get_template_part( 'loop', 'manga' ); ?>
<?php get_template_part( 'loop', 'hikaku' ); ?>
<?php get_template_part( 'loop', 'search' ); ?>



<?php endwhile; // end of the loop. ?>




			</div><!-- #main -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>