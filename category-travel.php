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
<li>トラベルローンとカードローンではカードローンの方が安心</li>
<li>どこにいても即日借入ができる</li>
<li>何ヶ月も貯金をしなくてもすぐに旅行資金を手に入れられる</li>
</ul>
</div><!-- #main-hikaku-point -->
<!--
<p id="main-hikaku-bun">ビジネスローンとは主に、開業資金・従業員への給料の支払い・事業拡大などに利用されます。事業計画がしっかりあるにも関わらず、開業して間もない為に、銀行の融資が受けられない…。そんな場合に、ビジネスローンが効果を発揮します。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<!--<h3>詳細情報</h3>-->
<div class="main-hikaku-info-cont">
<h4>トラベルローンと注意点</h4>
<p>トラベルローンとは旅行のためだけに借りるローンのことで旅行代理店などで申し込むことができます。卒業旅行や海外での結婚式など急な旅行の予定ができた方が申し込むことが多いようです。しかし、トラベルローンは旅行見積書の提出が必須で旅行に行くことが前提でないと貸してもらえません。また、旅行代金をトラベルローンで賄おうとすると、審査に落ちた際にはキャンセル料を支払わなくてはならない事態に陥ることもあります。</p>

<h4>カードローンならどこでも融資が受けられる</h4>
<p>カードローン選びのポイントですが、やはり何より大事なのは「即日融資ができるかどうか」と「どこでも借入ができること」ではないでしょうか。現金というのはどの場面で必要になるかわからないもの。ですのですぐ借りられる・いつでも借りられるというのは大きなポイントであると言えます。例えばCMなどでお馴染みの<a href="<?php bloginfo('template_url'); ?>/re/travel/cash01.html" target="_blank">アコム</a>は柔軟な対応やどこでも借りられるという点において非常に人気のある会社です。</p>

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
