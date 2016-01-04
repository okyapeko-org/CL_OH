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
<li>開業資金・従業員への給料の支払い・事業拡大などに利用されます。</li>
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
<h4>無担保なうえに、保証人が不要</h4>
<p>個人事業主や、中小企業を対象とした事業資金目的のローンなので、今から会社を立ち上げたい！事業を拡大したい！そんな経営者にとってはとても心強いローンです。一般的にビジネスローンは保証人・担保も不要です。</p>

<h4>ビジネスローンと一般的なローンとの違い</h4>
<p>ビジネスローンと一般的なローンとの違いとは、『融資金額の大きさ』と『必要な書類』です。必要書類は一般的なローンの書類に加えて、事業計画書や確定申告書・決算書なども必要になります。事業を本当に行っているのか？行う予定であるのか？貸し付け金額をきちんと返済できる能力があるのか？利益をきちんと出しているのかなどを確認する書類も必要です。</p>
<h4>無理のない金額で月々のご返済を！</h4>
<p>ローンをする上で大前提の話しですが、とにかく無理のない金額で月々返済することが大前提です。金利や返済期間、さらには返済金額など、状況に合わせて相談し、現実的な見通しの下で選択することが大切です。</p>
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
