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
<li>どの程度借入できるかがスグにわかる</li>
<li>入力が簡単で、匿名で審査ができる</li>
<li>いきなり本審査すると、落ちたとき履歴が残り不利になる</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">主婦やOLといった女性向けレディースキャッシングローン会社は、女性への配慮がなされています。たとえば、ご家族の方に知られないようプライバシーに配慮していたり、初めてのキャッシングが不安という方向けに女性スタッフが親切に対応する、といった会社もあります。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<h4>秒速診断で借入可否がスグわかる！</h4><p>ご利用可能かどうかがスグにわかる「お試し診断」が使えるキャッシング会社比較です。
お申込の前にウェブ上で生年月日、性別、収入、借入希望額、借入件数など5つ程度の項目に記入するだけですぐに簡易診断が行えます。</p>

<h4>診断結果からスムーズに申込ページへ</h4><p>ボタン押下後、スグに診断結果が出ます。「融資可能と思われます」と診断されたらそのままお申込ページへ！インターネット上でお申し込みに必要な書類なども確認できるので、はじめてでも安心して利用できます。</p>



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
