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
<li>主婦でも一定の収入があれば申し込み可能。</li>
<li>年収3分の1以上の借入れをするならば総量規制対象外の銀行系を</li>
<li>女性専用のレディースキャッシングもオススメです。</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">主婦の方でも安定した収入があればお申し込み可能です。総量規制により借り入れ可能額の低さが気になる方は総量規制対象外の銀行系キャッシングもオススメです。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<div class="main-hikaku-info-cont">
<h4>一定の収入があればパートやバイトの方でも申し込み可能です。</h4>
<p>主婦の方でもパートやアルバイトで収入があれば審査のうえ消費者金融会社での借り入れが可能です。たとえばプロミスだと担保・保証人不要で、必要なものは運転免許証もしくはその他身分証明書類です。
<br />
※借り入れ総額によっては収入証明書類（源泉徴収票など）が必要になる場合もあります。
<br /><a href="<?php echo home_url( '/' ); ?>haken?cont">パートやアルバイトで収入のある方はこちらも参考にしてください。</a></p>

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
