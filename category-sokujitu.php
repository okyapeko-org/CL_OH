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
<li>融資希望額を下げることによって審査基準を下げる</li>
<li>複数社への申込を行い審査落ち時にそなえる</li>
<li>ネット申込などで簡単スピーディに申し込み出来ます</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">即日融資が行える消費者金融会社は数多くあります。しかし、実際に申し込みを行ってから融資までに時間がかかる場合があります。それが「審査」の部分です。
昨今ではインターネットの普及により、ネット申込などで簡単スピーディに申し込みは完了出来たりしますが、申込後に消費者金融会社側が審査に手間取ってしまうと借り入れまでの時間が大幅に遅れてしまいます。書類の記入ミスなどには十分注意しておきましょう。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<div class="main-hikaku-info-cont">
<h4>融資希望額を下げることによって審査基準を下げる</h4>
<p>希望融資額を下げることによって金融会社の審査基準を下げてしまうのが効果的です。もちろん審査には収入や年齢、いままでの借り入れ実績などさまざまな部分で審査が行われるのですが（詳細は不明）年齢をかえるなどは無理な話なのでやはり希望の融資額を下げるのが現実的でしょう。</p>
<p>一般的に10万～30万程度が早いといわれていますが、個人の収入などの差もありますので即日融資を受けたい場合は希望の金額よりすこし下げて申し込むのがいいでしょう。初めての申込で即日100万の融資などとなるとある程度の信用や収入がないと難しいと思われます。</p>
</div>

<div class="main-hikaku-info-cont">
<h4>まずお試し診断でチェックを！</h4>
<p>お試し審査なら何回でもすばやく診断することができます。お試し診断とは、簡単な入力事項でお申し込み・契約が可能かを事前に確認する“仮の”診断で、年齢、収入、借り入れ希望額などを匿名で即座に診断してくれてとても便利です。
※お試し診断はお借入を検討される際の目安であり、必ずしも診断結果により契約の可否を確約するものではありません。 </p>
</div>
	
<div class="main-hikaku-info-cont">
<h4>即日融資の注意点</h4>
<p>即日融資に対応しているキャッシングであれば、カードが手元に届く前に無人契約機か店舗に出向くことで希望の口座にお金を振込んでくれますが、カード会社ごとに機能の違いがあります。</p>
<p>即日融資ＯＫのものでも「当日に振り込みをしてくれないもの」もあり、その場合は審査通過の連絡が来てから、近くの無人契約機か店舗まで出向いてカードを発行してもらう必要があります。即日振込みに対応しているクレジット会社であれば、カードが届く前に口座に振り込んでくれますので、店舗へ行く必要がありません。</p>
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
