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
<li>自動審査で「簡単」「スピーディ」に結果がわかる</li>
<li>急いでいて素早く結果が知りたい方におすすめです</li>
<li>あくまで仮の審査なので信用情報を傷つけずに審査を行えます</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">主婦やOLといった女性向けレディースキャッシングローン会社は、女性への配慮がなされています。たとえば、ご家族の方に知られないようプライバシーに配慮していたり、初めてのキャッシングが不安という方向けに女性スタッフが親切に対応する、といった会社もあります。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<h4>自動審査はあくまで仮審査</h4>
<p>自動審査とは、インターネットからの申込情報をもとに、人間ではなくコンピュータが審査を行うものです。コンピュータが審査を行うので、早いところだと数秒で審査結果を教えてくれます。「今すぐ借りたい・審査結果を早く知りたい」というときにはとても役立つサービスですが、あくまでコンピュータが行う仮審査のようなものですので、本審査の結果とは異なる場合があります。</p>
<p> 一瞬で結果がわかるとはいえその精度は高く、初めて借りる方や遅延することなく返済できている方は正確な情報さえ入力すれば、自動審査の結果はだいたい本審査と同じ結果となるでしょう。また、自動審査を行なっている会社はその後の本審査もスピーディに行なっているところが多いため、急いで借りたいと考えている方はこのサービスを行なっている会社を選ぶと良いでしょう。</p>

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
