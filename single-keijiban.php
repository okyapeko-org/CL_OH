<?php
	/*
	Template Name Posts:キャッシング掲示板テンプレート
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

<div id="main-board">
<div id="main-board-q">
<h3><?php the_title(); ?></h3>
<div id="main-board-q-cont">
<dl>
<dt><?php the_content(); ?></dt>
<dd>お名前：<?php echo post_custom('お名前'); ?>　投稿日時：<?php echo post_custom('投稿日時'); ?></dd>
</dl>
</div><!-- #main-board-q-cont -->
</div><!-- #main-board-q -->

<div id="main-keijiban-topic">
<p id="main-keijiban-topic-l"><a href="<?php echo home_url( '/' ); ?>toukou-s"><img src="<?php bloginfo('template_url'); ?>/img/button-keijiban.jpg" alt="投稿する" /></a></p>
<p id="main-keijiban-topic-r"><a href="<?php echo home_url( '/' ); ?>toukou-s">なかなか人には聞けないキャッシングの悩みを掲示板で相談してみませんか？</a></p>
<br clear="all" />
</div>

<div id="main-board-a">
<h4>みなさんのご回答</h4>
<div id="main-board-a-cont">
<?php comments_template( '', true ); ?>
</div><!-- #main-board-a-cont -->
</div><!-- #main-board-a -->
</div><!-- #main-board -->




<?php endwhile; // end of the loop. ?>

<?php get_template_part( 'loop', 'boardlist' ); ?>


			</div><!-- #main -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>