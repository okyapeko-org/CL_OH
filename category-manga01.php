<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


<div class="main-cont">
<h2><?php single_cat_title(); ?></h2>
<div class="main-cont-in">
<p><img src="<?php bloginfo('template_url'); ?>/img/manga01.jpg" alt="マンガ" /></p>

<div class="main-manga-comment">
<dl>
<dt>銀行系の特徴、魅力として大口対応と低金利があります。そして、その二つの特徴を組み合わせた利点「融資限度額が増えるほど金利が下がる」という部分に着目することで、利息負担額を減らした効果的なキャッシングが出来ます。</dt>
<dd><a href="<?php echo home_url( '/' ); ?>ginkoucat">・銀行系カードローンの詳細はコチラから</a></dd>
<dd><a href="<?php echo home_url( '/' ); ?>souryou">・総量規制対象外のキャッシングの詳細はコチラから</a></dd>
</dl>
</div><!-- main-manga-comment -->

</div><!-- .main-cont-in -->
</div><!-- .main-cont -->

<div class="main-cont">
<div class="main-cont-in">
<h2>銀行系キャッシング比較表</h2>
<?php get_template_part( 'loop', 'catetablere' );?>
</div><!-- .main-cont-in -->
</div><!-- .main-cont -->

<?php get_template_part( 'loop', 'shindan' );?>
<?php get_template_part( 'loop', 'manga' );?>
<?php get_template_part( 'loop', 'osusume' );?>
<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>



<?php get_footer(); ?>
