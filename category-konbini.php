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
<li>返済のしやすさを考えるなら身近にあるコンビニATM</li>
<li>最近は各社ともにコンビニのATMで気軽に返済することができます</li>
<li>近くにあるコンビニで返済できるか確認して下さい</li>
</ul>
</div><!-- #main-hikaku-point -->
<!--
<p id="main-hikaku-bun">ビジネスローンとは主に、開業資金・従業員への給料の支払い・事業拡大などに利用されます。事業計画がしっかりあるにも関わらず、開業して間もない為に、銀行の融資が受けられない…。そんな場合に、ビジネスローンが効果を発揮します。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<!--<h3>詳細情報</h3>-->
<div class="main-hikaku-info-cont">
<h4>返済方法について</h4>
<p>キャッシングの返済方法は、店頭窓口での返済や、ATM(金融会社、銀行などの金融機関、コンビニ)や、振込、振替(銀行振込、インターネットバンキング)などがあります。中でも、返済のしやすさを考えるなら、身近にあるコンビニATM。最近は各社ともに、コンビニのATMで気軽に返済することができるので、とても便利になっています。</p>

</div>
</div>

<h3 class="main-hikaku-ichiran">カテゴリ別キャッシング比較</h3>

<?php get_template_part( 'loop', 'catetablere-konbini' );?>

<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>
<?php get_template_part( 'loop', 'manga' );?>






</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
