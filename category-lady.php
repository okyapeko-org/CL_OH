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
<li>女性専用のキャッシングサービスです</li>
<li>主婦でもパートなどで安定収入があれば申し込み可能です</li>
<li>プライバシー保護など特に配慮されています。</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">主婦やOLといった女性向けレディースキャッシングローン会社は、女性への配慮がなされています。たとえば、ご家族の方に知られないようプライバシーに配慮していたり、初めてのキャッシングが不安という方向けに女性スタッフが親切に対応する、といった会社もあります。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<h4>借り換え、おまとめのメリット</h4>
<p>主婦やOLといった女性向けレディースキャッシングローン会社は、女性への配慮がなされています。たとえば、ご家族の方に知られないようプライバシーに配慮していたり、初めてのキャッシングが不安という方向けに女性スタッフが親切に対応する、といった会社もあります。</p>




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
