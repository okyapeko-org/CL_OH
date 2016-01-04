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
                <p><img src="<?php bloginfo('template_url'); ?>/img/manga08.jpg" alt="マンガ" width="638" /></p>
                    <div class="main-manga-comment">
                        <dl>
                        <dt>借入れをする金額で金利はずいぶんと変わってきますので、状況に応じて低金利のキャッシングサービスを行う業者を選び有利に利用しましょう。すぐ借りてすぐ返すのであれば無利息キャッシングもオススメ</dt>
                        <dd><a href="<?php echo home_url( '/' ); ?>teikinri-2">・低金利キャッシングの詳細と会社一覧はコチラから</a></dd>
                        <dd><a href="<?php echo home_url( '/' ); ?>murisoku-2">・無利息キャッシングの詳細と会社一覧はコチラから</a></dd>
                        </dl>
                    </div>
            </div>
    </div>



<h3 class="main-hikaku-ichiran">低金利キャッシング比較表</h3>

<?php get_template_part( 'loop', 'catetablere' );?>


<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'manga' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>







</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
