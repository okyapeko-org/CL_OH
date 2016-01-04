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
<li>窓口はすべて女性スタッフなので安心できます</li>
<li>男性スタッフには話しにくい家庭の財政事情も女性スタッフになら<br />気軽に相談できるかもしれません</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">主婦の方でも安定した収入があればお申し込み可能です。総量規制により借り入れ可能額の低さが気になる方は総量規制対象外の銀行系キャッシングもオススメです。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<div class="main-hikaku-info-cont">
<h4>女性向けキャッシングの特徴</h4>
<p>主婦やOLといった女性向けレディースキャッシングローン会社は、女性への配慮がなされています。<br />
たとえば、ご家族の方に知られないようプライバシーに配慮していたり、<br />
初めてのキャッシングが不安という方向けに女性スタッフが親切に対応する、といった会社もあります。<br /><a href="shufu?cont">※主婦の方はコチラのコンテンツもご参照ください。<br />
総量規制後は従来どおりキャッシングできなくなる可能性があります。</a></p>
</div>



</div>

<h3 class="main-hikaku-ichiran">カテゴリ別キャッシング比較</h3>
<?php get_template_part( 'loop', 'catetablere' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>
<?php get_template_part( 'loop', 'manga' );?>






</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
