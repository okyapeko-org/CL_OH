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
<li>複数社から借入するより、一社から高額融資を受ける方が金利がお得</li>
<li>銀行系カードローンは総量規制の対象外なので大口融資が可能</li>
<li>おまとめローンに借り換えて毎月の返済額を減らすこともできます</li>
</ul>
</div><!-- #main-hikaku-point -->
<!--
<p id="main-hikaku-bun">ビジネスローンとは主に、開業資金・従業員への給料の支払い・事業拡大などに利用されます。事業計画がしっかりあるにも関わらず、開業して間もない為に、銀行の融資が受けられない…。そんな場合に、ビジネスローンが効果を発揮します。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<!--<h3>詳細情報</h3>-->
<div class="main-hikaku-info-cont">
<h4>大口融資のキャッシング</h4>
<p>大口融資はおまとめローンにも適していてます！複数社に分けて借入をするよりも、一つの会社で高額融資で借りることにより、金利をはるかに抑える事ができます！また、おまとめローンに借り換えて毎月の返済額が減らすことが出来ます。</p>

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
