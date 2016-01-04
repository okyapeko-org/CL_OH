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
                <p><img src="<?php bloginfo('template_url'); ?>/img/manga06.jpg" alt="マンガ" width="638" /></p>
                    <div class="main-manga-comment">
                        <dl>
                        <dt>ビジネスローンとは主に、開業資金・従業員への給料の支払い・事業拡大などに利用されます。事業計画がしっかりあるにも関わらず、開業して間もない為に、銀行の融資が受けられない…。そんな場合に、ビジネスローンが効果を発揮します。</dt>
                        <dd><a href="<?php echo home_url( '/' ); ?>bussiness">・ビジネスローンの詳細と会社一覧はコチラから</a></dd>
                        <dd><a href="<?php echo home_url( '/' ); ?>souryou">・総量規制対象外のキャッシングの詳細はコチラから</a></dd>
                        </dl>
                    </div>
            </div>
    </div>



<h3 class="main-hikaku-ichiran">ビジネスローン比較表</h3>

<?php get_template_part( 'loop', 'catetablere' );?>


<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'manga' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>







</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
