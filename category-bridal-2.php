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
<li>ブライダルローンでは融資額が少ない</li>
<li>カードローンはブライダルローンの不足を補うことも出来る</li>
<li>相談次第ではブライダルローンより多く借入できることがある</li>
</ul>
</div><!-- #main-hikaku-point -->
<!--
<p id="main-hikaku-bun">ビジネスローンとは主に、開業資金・従業員への給料の支払い・事業拡大などに利用されます。事業計画がしっかりあるにも関わらず、開業して間もない為に、銀行の融資が受けられない…。そんな場合に、ビジネスローンが効果を発揮します。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<!--<h3>詳細情報</h3>-->
<div class="main-hikaku-info-cont">
<h4>ブライダルローンは意外と融資額が少ない</h4>
<p>ブライダルローンは人生の節目である結婚にまつわる諸々の費用を融資してくれるサービスで、主に地方銀行や信販会社などが取り扱っています。 金利が低くとても利用しやすいサービスであるのですが、一方で「融資額が少ない(資金の50％までしか融資してくれないところも多い)」「融資までに時間がかかる(3週間かかってしまう場合も)」などの問題があります。また、金利の低さにともなって、極端に審査が厳しいという現実も。。</p>


<h4>カードローンなら総量規制対象外＋即日融資が可能</h4>
<p>そこでオススメしたいのが銀行のカードローン。年収や年齢にもよりけりですが、総量規制の対象外なので申込み後の限度額の増枠相談次第ではブライダルローンよりも多くの融資を受けることができることも。またブライダルローンの不足額をカードローンで補うという使い方もできますし、柔軟な使い方ができることも、やはりカードローンの優秀なポイントということができるでしょう。<br />
おすすめは当然、断トツの金利の低さ・借入可能額の大きさからオリックス銀行カードローンですが、最短即日の融資にも対応してくれる三菱東京UFJ銀行カードローンも非常に便利です。また、時間のない方には審査時間の非常に短いアコムなども頼りになってくれることでしょう。</p>

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
