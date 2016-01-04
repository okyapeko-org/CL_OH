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
<li>インターネットでの申し込みなら来店不要なうえ即日融資可能</li>
<li>Web完結!自宅でできるのでスピーディ</li>
<li>借りているところを見られたくない方にオススメ</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">来店する時間がない方、借りているところを見られたくない方にオススメのインターネットでの申し込み。 インターネットでの申し込みのメリットは、Web上のサービスが使えますし、自宅にて事前に各社を比較したり調べる事もできることです。誰にも会うことなく24時間いつでも申し込みができますので、大変便利です。ネットで申し込めば、審査結果が早くわかり、記入漏れもなく安心ですし、何よりもその日に融資を受けれるのが魅力です。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<div class="main-hikaku-info-cont">
<h4>インターネットからお申し込みの際、ご郵送契約とご来店契約の2種類があります。</h4>
<p>インターネットでのご郵送契約では申し込みをして、審査通過後、契約書類が送付されますので、書類を作成、郵送またはFAXするとカードが郵送されてきます。それからの利用になります。また郵送の場合、指定口座に振り込んでくれるなどのメリットがあります。
</p>
<p>ご来店契約はインターネットで申し込みをして、審査通過後、お近くの店頭窓口・自動契約機で契約し、最短でキャッシングを利用することができます。</p>
</div>

<div class="main-hikaku-info-cont">
<h4>インターネットから申し込みの流れ</h4>
<p>1　申し込み完了後すぐに利用可能金額を確認できる。</p>
<p>※各社共に目安はお昼までに完了していれば即日融資可能です。</p>
<p>

2　審査結果の連絡があります。(約30分程度)</p>
<p>

3　契約書類を作成し、書類を郵送した後、キャッシングが利用できます。</p>
<p>

※来店する場合は必要書類を持参し、店頭窓口・自動契約機で契約書類を作成し、カード発行後、キャッシングが利用できます。お急ぎの方におすすめです。</p>
</div>
	
<div class="main-hikaku-info-cont">
<h4>必要な書類</h4>
<p>運転免許証や健康保険証が必要となります。50万円以上の借入の場合は収入証明書が必要となります。</p>
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
