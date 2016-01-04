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
<li>高額の借入をする場合、収入証明書などが必要になることも</li>
<li>返済能力や信用度が審査のポイント</li>
<li>主婦も借り入れ可能</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">最近、パートやアルバイトでも借り入れ可能なキャッシング会社は増えてきています。審査の際に重要な部分は返済能力や定期的な収入があるかどうかという点です。また主婦でも安定した収入があれば申し込み可能です。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<h4>審査の基準は毎月一定の収入があり、きちんと返済できるかどうか</h4>
<p>最近はアルバイトやパートの方でも借りられるキャッシングが増えてきています。 審査基準はキャッシング会社によって若干違いますが、どの会社も主に返済能力があるか、信用力があるかというところは必ず見ます。
<br />パートやアルバイトの方は正社員の方に比べると収入が少なく、月の収入が定まっていないため審査に通りにくい場合がありますが、アルバイトであっても毎月一定の収入があり、きちんと返済できるということがわかれば大丈夫です。
<br />又、固定電話を持っていたり、保証人がいたりすれば信用度アップに繋がります。そこをクリアすればアルバイトやパートでもキャッシングが可能なのです。 </p>

<h4>収入証明書が必要となる場合もあります</h4>
<p>５０万円を超える契約を行う場合や他社を含めた借入れ総額が１００万円を超える場合、収入証明書が必要となる場合があります。提示を求められた場合は、給料明細（数ヶ月以内のもの）、源泉徴収票を提出しなければなりません。なお、個人事業主の方は確定申告書が必要になります。</p>

<h4>主婦の方でも定期的な収入があればOK</h4>
<p>主婦の方でもパートやアルバイト、派遣社員などで働いているのであれば、原則可能です。
なお専業主婦の方の場合は総量規制対象外のローンが適応されない、三菱東京UFJ銀行カードローンなど銀行系のカードローンをおすすめします。</p>

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
