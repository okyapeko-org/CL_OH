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
                <p><img src="<?php bloginfo('template_url'); ?>/img/manga04.jpg" alt="マンガ" width="638" /></p>
                    <div class="main-manga-comment">
                        <dl>
                        <dt>最近、パートやアルバイトでも借り入れ可能なキャッシング会社は増えてきています。審査の際に重要な部分は返済能力や定期的な収入があるかどうかという点です。また主婦でも安定した収入があれば申し込み可能です。</dt>
                        <dd><a href="<?php echo home_url( '/' ); ?>haken">・派遣社員・パート・アルバイトOKのキャッシングの詳細と会社一覧はコチラから</a></dd>
                        <dd><a href="<?php echo home_url( '/' ); ?>shufu">・主婦でも借りれるキャッシングの詳細と会社一覧はコチラから</a></dd>
                        </dl>
                    </div>
            </div>
    </div>



<h3 class="main-hikaku-ichiran">派遣社員・パート・アルバイトOKのキャッシング比較表</h3>

<?php get_template_part( 'loop', 'catetablere' );?>


<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'manga' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>







</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
