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
<li>銀行系なら収入の３分の１以上でも収入証明書なしで借りれる</li>
<li>借りたらネットでそのまま自分の口座に振り込める</li>
<li>アルバイトやパートの方など、幅広く融資が受けれる</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">主婦やOLといった女性向けレディースキャッシングローン会社は、女性への配慮がなされています。たとえば、ご家族の方に知られないようプライバシーに配慮していたり、初めてのキャッシングが不安という方向けに女性スタッフが親切に対応する、といった会社もあります。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<h4>収入証明書不要のキャッシング</h4>
<p> 借入をするに際し、利用者にとって厳しくなってしまったこのご時世ですが、キャッシング会社によっては収入証明書が不要なキャッシング会社が存在します。 会社によって様々ですが、消費者金融系の会社なら50万円まで、銀行系なら100万円までを、収入証明書の提出をすることなく借入することが可能です。 </p>

<h4>収入証明書不要＝即日発行が可能</h4>
<p> 収入証明書は取得するのに何かと手間と時間がかかるものですので、今すぐに借入したい方にとってはとても大切なポイントです。 またキャッシング利用可能枠の大きさを考えると銀行系カードローンは特にオススメであると言うことができます。 </p>


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
