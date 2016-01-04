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

<div id="main-hikaku">
<h2><?php single_cat_title(); ?></h2>

<div id="main-hikaku-point">
<ul>
<li>個人事業主や、中小企業を対象とした事業資金目的のローン</li>
<li>開業資金・従業員への給料の支払い・事業拡大などに利用されます</li>
<li>無担保なうえに、保証人が不要です</li>
</ul>
</div><!-- #main-hikaku-point -->
<!--
<p id="main-hikaku-bun">ビジネスローンとは主に、開業資金・従業員への給料の支払い・事業拡大などに利用されます。事業計画がしっかりあるにも関わらず、開業して間もない為に、銀行の融資が受けられない…。そんな場合に、ビジネスローンが効果を発揮します。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<!--<h3>詳細情報</h3>-->
<div class="main-hikaku-info-cont">
<h4>ビジネスローンとは</h4>
<p>ビジネスローンというのは、中小企業、自営業者を対象にした「小口・短期」の融資商品のことです。<br />
事業を行うにあたって資金繰りが行き詰ることもあるとは思います。たとえば取引先の都合により入金が遅れるなど、<br />
思いもよらない事情で急なお金が必要になることも考えられます。<br />
ビジネスで支払いが遅れることがあれば今まで長年積み上げた信用が崩れることになりかねません。<br />
そのような場合に備え知っておきたいのがビジネスローンです。</p>

</div>
</div>

<h3 class="main-hikaku-ichiran">カテゴリ別キャッシング比較</h3>

<?php get_template_part( 'loop', 'catetablere' );?>

<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>
<?php get_template_part( 'loop', 'manga' );?>






</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
