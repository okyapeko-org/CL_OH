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
<li>大口対応（最大500～800万）</li>
<li>低金利（3.5～17.8％）</li>
<li>総量規制対象外なので年収の3分の1以上の借入れが可能</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">銀行系の特徴、魅力として大口対応と低金利があります。そして、その二つの特徴を組み合わせた利点「融資限度額が増えるほど金利が下がる」という部分に着目することで、利息負担額を減らした効果的なキャッシングが出来ます。</p>-->

</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<h4>銀行カードローンの特徴とは？</h4>
<p>銀行系の特徴、魅力は大口対応と低金利です。
銀行カードローンは借入限度額が大きく審査に通れば新規で100万円以上の借入ができる場合もあります。あと、消費者金融系と信販会社系に比べて金利が低くなっております。</p>
<h4>銀行カードローンならば総量規制の対象外！</h4>
<p>総量規制とは借りすぎや貸しすぎを防ぐためにつくられた新しい規制（ルール）で、「銀行以外からの借入れが年収の3分の1以上ある個人」の方は新規の借入れが出来ない仕組みとなっています。<br />
銀行系以外でお金を借りている人も銀行系のローンに一本化することで総量規制対象外になりますので、
ノンバンク系での借り入れが年収3分の1以上を超えられている方や、3分の1になりそうな方は銀行カードローンに乗り換えることをおススメします。</p>


</div><!-- #main-hikaku-info -->

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
