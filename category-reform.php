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
<li>水漏れ、雨漏り、故障などの緊急修理は『即日借入』できる会社を！</li>
<li>増築などの大掛かりなリフォームには『低金利』な会社がオススメ！</li>
<li>年収の３分の１以上借入するなら銀行系ローン</li>
</ul>
</div><!-- #main-hikaku-point -->
<!--
<p id="main-hikaku-bun">ビジネスローンとは主に、開業資金・従業員への給料の支払い・事業拡大などに利用されます。事業計画がしっかりあるにも関わらず、開業して間もない為に、銀行の融資が受けられない…。そんな場合に、ビジネスローンが効果を発揮します。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<!--<h3>詳細情報</h3>-->
<div class="main-hikaku-info-cont">
<h4>緊急性ありの場合は「即日借入」できるキャッシング会社を。</h4>
<p>窓ガラスが割れた・お風呂が壊れたなど緊急性を要する場合のリフォームなら、とにかくすぐに借りられるというポイントが何より重要。現在では来店せずにパソコン・スマートフォンなどでWeb完結できるキャッシング会社が増えており、また審査も散らばった窓ガラスを片付けている間に結果が出るため安心。会社によっては振込もその日のうちにしてもらえるので、お金がなくてもその日のうちに業者に修繕してもらうことが可能となります。</p>
</div>
<div class="main-hikaku-info-cont">
<h4>緊急性の高くないリフォームの場合は「低金利」の会社を。</h4>
<p>部屋を増築したい・バリアフリーにしたいなど、緊急性の低いリフォームの場合は銀行系カードローンがおすすめ。低金利・かつ総量規制対象外のため大きく借入することができるためです。リフォームというのは規模によってピンきりですが、基本的には安い買い物ではないもの。大きく借りれば金利はさらに下がりますので、とっても便利！</p>
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
