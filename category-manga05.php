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
                <p><img src="<?php bloginfo('template_url'); ?>/img/manga05.jpg" alt="マンガ" width="638" /></p>
                    <div class="main-manga-comment">
                        <dl>
                        <dt>学生はキャッシングできないと思われがちですが、20歳以上でアルバイトなどで一定の収入があればキャッシングすることは可能です。</dt>
                        <dd><a href="<?php echo home_url( '/' ); ?>gakusei-2">・学生でも借りれるキャッシングの詳細と会社一覧はコチラから</a></dd>
                        <dd><a href="<?php echo home_url( '/' ); ?>haken">・派遣社員・パート・アルバイトOKのキャッシングの詳細と会社一覧はコチラから</a></dd>
                        </dl>
                    </div>
            </div>
    </div>



<h3 class="main-hikaku-ichiran">学生OKのキャッシング比較表</h3>

<?php get_template_part( 'loop', 'catetablere' );?>


<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'manga' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>







</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
