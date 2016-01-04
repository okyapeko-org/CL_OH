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
<li>総量規制とは借りすぎや貸しすぎを防ぐためにつくられた新しい規制</li>
<li>消費者金融系（アコムなど）では年収の3分の1以上の借入不可</li>
<li>銀行カードローンならば総量規制対象外</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">総量規制とは借りすぎや貸しすぎを防ぐためにつくられた新しい規制（ルール）で、「銀行以外からの借入れが年収の3分の1以上ある個人」の方は新規の借入れが出来ない仕組みとなっています。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<div class="main-hikaku-info-cont">

<h4>総量規制とは？</h4>
<p>総量規制とは借りすぎや貸しすぎを防ぐためにつくられた新しい規制（ルール）で、「銀行以外からの借入れが年収の3分の1以上ある個人」の方は新規の借入れが出来ない仕組みとなっています。</p>
<h4>銀行系カードローンならば総量規制の対象外！</h4>
<p>今回の総量規制は三菱東京UFJ銀行カードローンなどの「銀行カードローンは対象外」となります。銀行系以外の消費者金融（アコムやプロミス）でお金を借りている人も銀行系のローンに一本化することで総量規制対象外になります。<br />ですのでノンバンク系での借り入れが年収3分の1以上を超えられている方や3分の1になりそうな方は銀行カードローンに乗り換えることをおススメします。</p>
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
