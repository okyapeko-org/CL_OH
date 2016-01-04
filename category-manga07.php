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
                <p><img src="<?php bloginfo('template_url'); ?>/img/manga07.jpg" alt="マンガ" width="638" /></p>
                    <div class="main-manga-comment">
                        <dl>
                        <dt>ネット申込などで簡単スピーディに申し込みが出来ますが、申し込みフォームの記入ミスなどにより審査が手間取ってしまうと借り入れまでの時間が遅れてしまう事があります。記入ミスには十分注意しておきましょう。</dt>
                        <dd><a href="<?php echo home_url( '/' ); ?>sokujitu">・今すぐ借りれるキャッシングの詳細と会社一覧はコチラから</a></dd>
                        <dd><a href="<?php echo home_url( '/' ); ?>doniti">・土日祝日OKキャッシングの詳細と会社一覧はコチラから</a></dd>
                        </dl>
                    </div>
            </div>
    </div>



<h3 class="main-hikaku-ichiran">今すぐ借りれるキャッシング比較表</h3>

<?php get_template_part( 'loop', 'catetablere' );?>


<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'manga' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>







</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
