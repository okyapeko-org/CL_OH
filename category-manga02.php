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

    <div id="main-manga">
        <h3 id="manga01"><?php single_cat_title(); ?></h3>
            <div class="main-manga-cont">
                <p><img src="<?php bloginfo('template_url'); ?>/img/manga02.jpg" alt="マンガ" width="638" /></p>
                    <div class="main-manga-comment">
                        <dl>
                        <dt>複数の金融機関のローン・借金を一つにまとめる（一本化する）事で返済管理を楽にし、金利が低いローンにまとめ月々の支払学を下げるローンの事です。（精神的にも楽になります！）</dt>
                        <dd><a href="<?php echo home_url( '/' ); ?>karikae">・借り換え＆おまとめローンの詳細と会社一覧はコチラから</a></dd>
                        </dl>
                    </div>
            </div>
    </div>



<h3 class="main-hikaku-ichiran">借り換え＆おまとめローンの比較表</h3>

<?php get_template_part( 'loop', 'catetablere' );?>


<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'manga' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>







</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
