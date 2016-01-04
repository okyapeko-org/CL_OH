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


<li>滞納さえなければ誰にもばれずに借りることはほぼ可能</li>
<li>滞納をしてしまうと電話や郵便物で入金案内があるので注意が必要</li>
<li>WEB完結の業者に申し込めばさらにリスクを減らすことができます</li>
</ul>
</div><!-- #main-hikaku-point -->
<!--
<p id="main-hikaku-bun">ビジネスローンとは主に、開業資金・従業員への給料の支払い・事業拡大などに利用されます。事業計画がしっかりあるにも関わらず、開業して間もない為に、銀行の融資が受けられない…。そんな場合に、ビジネスローンが効果を発揮します。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<!--<h3>詳細情報</h3>-->
<div class="main-hikaku-info-cont">
<h4>結論から言うと滞納さえなければ、誰にもばれずに借りることはほぼ可能</h4>
<p>滞納をしてしまうと、電話や郵便物で入金のお願いがありますので、最悪の場合ご家族にばれてしまう可能性があります。ですが、滞納をせずに毎月約束の額を返済していれば、まず家族にばれる心配はないと思って大丈夫です。しかしながらまったくバレない可能性がないわけではありません。そう、<span class="marker">申込みをする際に出向く必要のある"無人契約機"です</span>。堂々と入れる人なら何ら問題はありませんが、大多数の人はあまり他人に見られたい光景ではないはず。さらに見られていたのが知人であれば…あとから問いただされるのは必至でしょう。<br />そこでオススメしたいのが、<span class="marker">WEBで全てが完結するWEB完結のキャッシング会社</span>です。無人契約機に出向かずともお持ちのパソコン・携帯・スマートフォンからパパッと契約することができますし、なんと即日融資に対応！銀行が振込を受け付けている15時まででしたら即日振込のサービスを行っている業者もあります。利用者には本当にありがたいサービスと言えますので、利用しない手はありませんよ！</p>

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
