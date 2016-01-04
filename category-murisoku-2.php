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
<li>無利息期間は３０日間が相場。</li>
<li>お金を借りた日から数えて30日以内に返済すれば利息は発生しません。</li>
<li>「一時的に借入をしたい！」と考えられている方におススメ</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">全ての無利息キャッシングには、無利息期間が設けられおり、大抵どこの会社も30日間が相場です。つまりはお金を借りた日から数えて30日以内に返済すれば、利息が発生しないということです。無利息期間を超えてしまった場合は通常通り利息が発生します。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<div class="main-hikaku-info-cont">
<h4>30日間以内に返済すれば無利息</h4>
<p>キャッシング会社の一部で新規お申し込みの方を対象とした、金利が無利息になる『無利息キャッシング』のキャンペーンが行われています。<br />ただ、30日間の利息分は支払う必要はなく、31日目から利息が計算されていくことになります。ですので、すぐに借りてすぐに返すという「一時的に借入をしたい！」と考えられている方に特におススメのキャッシングです。</p>
</div>

<div class="main-hikaku-info-cont">
<h4>無利息期間キャンペーンは狙い目</h4>
<p>特別キャンペーンによって無利息キャッシングになっているものがおすすめです。通常の無利息キャッシングは無利息というお得が付く分、30日間を過ぎたあとにかかる金利が少し高めに設定されています。逆にキャンペーンによって無利息キャッシングになっているものは、通常の低金利のまま、特典として無利息期間が設けられているので、万が一30日以内に返済できなかった場合を考えるとよりお得感は高まります。</p>
</div>

</div>

<h3 class="main-hikaku-ichiran">カテゴリ別キャッシング比較</h3>
<?php get_template_part( 'loop', 'catetablere' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'manga' );?>

<div class="main-cont">
<div class="main-cont-search">
<?php get_template_part( 'loop', 'search' );?>
</div>
</div>






</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
