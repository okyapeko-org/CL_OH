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
<li>無利息キャンペーンでローンのデメリット「利息」を抑える</li>
<li>一定期間内に完済すれば、利息はゼロ</li>
<li>利息のかからない期間や限度額は、各社に差があります</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">主婦やOLといった女性向けレディースキャッシングローン会社は、女性への配慮がなされています。たとえば、ご家族の方に知られないようプライバシーに配慮していたり、初めてのキャッシングが不安という方向けに女性スタッフが親切に対応する、といった会社もあります。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<h4>無利息キャンペーンが狙い目！</h4><p>お金を借りる際、通常ならば利息が発生しますが、無利息キャンペーンを行っているキャッシング会社ならば期間中の間ならば利息がかかりません。無利息期間を上手に利用しキャッシングを行いましょう。</p>




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
