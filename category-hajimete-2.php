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
<li>まずは目的をしっかりと定めましょう</li>
<li>借入に不安があるならば、まずは基礎知識をつけましょう</li>
<li>収入証明書類が必要ないキャッシング会社もあります</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">キャッシングが初めての方は他社での借入が無いということですので、無職で無い限りほとんどのキャッシング会社でも審査に通ると思われます。ですので、あなたの目的（即日融資を受けたい！土日祝日に申込をしたい！など）にあったキャッシング会社を選びましょう。</p>
-->
</div><!-- #main-hikaku -->


<div id="main-hikaku-info">

<div class="main-hikaku-info-cont">
<h4>まずは比較検討しましょう！</h4>
<p>まずは、自分に一番あっているキャッシングは何かを比較検討しましょう！キャッシングが初めての方は他社での借入が無いということですので、無職で無い限りほとんどのキャッシング会社でも審査に通ると思われます。
しかし、キャッシング会社によってサービスは変わってきます。ですので、あなたの目的（即日融資を受けたい！土日祝日に申込をしたい！など）にあったキャッシング会社を選びましょう。</p>
<p><a href="<?php echo home_url( '/' ); ?>?page_id=574&cont">→キャッシング診断で自分に合っているキャッシング会社を診断する</a><br />
<a href="<?php echo home_url( '/' ); ?>?cat=72&cont">→キャッシング検索で目的のキャッシングを探す</a><br />
<a href="<?php echo home_url( '/' ); ?>?cat=71&cont">→まんがでキャッシングを学ぶ</a></p>
<h4>申込の流れ</h4>
<p>申込の方法は大きく分けて２つです。一つは『郵送契約』でもう一つは『来店契約です』<br />
郵送契約とは、郵送にて必要書類を提出して契約する方法です。店舗に足を運ぶ手間を省くことができます。 <br />
来店契約は、来店して必要書類を記入して契約する方法です。借入れまでにかかる時間が、郵送契約に比べ短く済みます。 
２つとも必要な書類は『本人確認書類』と『収入証明書類』となります。<br />
ただし、少額の借入れの場合（５０万円以下）は収入証明書類が必要ないキャッシングもあります。</p>
	
<p><img src="<?php bloginfo('template_url'); ?>/img/nagare.gif" width="650" alt="契約の流れ"></p>
	
<p>本人確認書類→「運転免許証」「健康保険証」「パスポート」など<br />
収入証明書類→「源泉徴収票」「確定申告書」「給与明細」など</p>

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
