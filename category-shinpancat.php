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
<li>おまとめや借り換えに最適</li>
<li>消費者金融系より低金利</li>
<li>バランスの取れたキャッシング</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">信販系のキャッシングは、融資スピードは銀行系(※三菱東京UFJ銀行を除く)より早く、金利は消費者金融より低い。銀行系と消費者金融の中間に位置する形となりますのでバランスの取れたキャッシングとなります。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">
<h4>信販会社とは？</h4>
<p>販売信用（信販）を主な事業とする会社、すなわち「代金の立替え」をする会社となります。販売信用がメインでしたが、公共料金の集金やクレジットカードの発行など様々なサービスを広げていく中で、キャッシングのサービスも行なっています。<br />
</p>
<h4>信販系キャッシングのメリット</h4>
<p>メリットは、金利の低さ。そして、融資限度額が高額に設定されますので、おまとめや借り換えにも最適です。オリックスVIPローンカードなら、レンタカーやホテルなどの優待割引など、お得な特典も付いてきます。基本的には審査に1～2日程などと時間がかかりますが、オリックスVIPローンカードは最短で即日審査可能とトップクラスのスピードを誇っています。</p>

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
