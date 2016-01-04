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


<div id="main-board">
<div class="main-index-ad">
<img src="<?php bloginfo('template_url'); ?>/img/kanban-board.jpg" alt="キャッシング掲示板" />
</div>
</div><!-- #main-board -->

<div id="main-keijiban-topic">
<p id="main-keijiban-topic-l"><a href="<?php echo home_url( '/' ); ?>toukou-s"><img src="<?php bloginfo('template_url'); ?>/img/button-keijiban.jpg" alt="投稿する" /></a></p>
<p id="main-keijiban-topic-r"><a href="<?php echo home_url( '/' ); ?>toukou-s">なかなか人には聞けないキャッシングの悩みを掲示板で相談してみませんか？</a></p>
<br clear="all" />
</div>

<?php get_template_part( 'loop', 'boardlist' ); ?>

<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'search' );?>

</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
