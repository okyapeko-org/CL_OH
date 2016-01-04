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
<li>年金暮らしでも多くの会社で65歳まで借入が可能</li>
<li>会社によっては69歳まで借入することができる</li>
<li>年金はある意味最強の安定収入！</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">主婦の方でも安定した収入があればお申し込み可能です。総量規制により借り入れ可能額の低さが気になる方は総量規制対象外の銀行系キャッシングもオススメです。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<div class="main-hikaku-info-cont">
<h4>60歳から69歳の方なら働いてなくても借りられる！</h4>
<p>キャッシングは「働いていないと借入できない」というイメージがありがちですが、実は年金を受給している高齢の方でも借入することは可能です。 むしろパート・アルバイトの方より安定した収入が確実に入ってくるので借入をしやすいという現実も。 ですから自信をもって堂々と申込に臨んでみてください。</p>
<h4>狙うは即日融資が可能なキャッシング会社。</h4>
<p>それでは今度は何を基準に会社を選べば良いかということですが、大事なのはやはり借入までのスピードでしょう。 消費者金融系の会社は特に審査スピードに力を入れており、ほとんどの会社で即日融資を受けることができます。 また低金利で有名な銀行系のカードローンも最近では審査スピードに力を入れてきています。</p>

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
