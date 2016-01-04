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
<li>銀行カードローンが信販系、消費者金融系と比べて低金利。</li>
<li>すぐ借りてすぐ返すのならば無利息キャッシングもご検討を</li>
<li>信用度や利用状況などによって金利が下がる場合もあります</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">低金利となるとまず一番に無利息キャンペーン、そして銀行系でのキャッシング、信販系、消費者金融系という順番で低くなっていくようです。あくまで一般的な金利で比較したものですので、消費者金融系の会社でも信用度や利用状況などによって金利はどんどん下がっていきます。また無利息キャンペーンをよく行っているのも消費者金融系の会社となります。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<h4>やっぱり銀行カードローンが低金利</h4>
<p>銀行カードローンは信販系や消費者金融系のキャッシングローンと比べ、金利の低さに特に力を入れています。申込時に銀行口座の開設が必要な場合が多く、大きめの金額を1か月以上かりる場合には最適です。消費者金融の一般的な金利が7％～18％というのに対し、銀行カードローンの金利は5％～17％程度と平均的に低めに設定されています。</p>
<h4>すぐ借りてすぐ返すのならば無利息キャッシングもオススメ</h4>
<p>３０日間無利息などのお得な無利息キャンペーンを実施しているところがありますので、すぐ借りてすぐ返す予定なのであれば無利息キャッシングをチェックしましょう。無利息期間中は金利が０で借り入れできるのですぐに返済してしまおうとお考えの方にはとてもお得なキャンペーンです。</p>
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
