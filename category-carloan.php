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
<li>保証人・担保が不要</li>
<li>年収の３分の１以上でも借入ができる</li>
<li>金利が低い</li>
</ul>
</div><!-- #main-hikaku-point -->
<!--
<p id="main-hikaku-bun">ビジネスローンとは主に、開業資金・従業員への給料の支払い・事業拡大などに利用されます。事業計画がしっかりあるにも関わらず、開業して間もない為に、銀行の融資が受けられない…。そんな場合に、ビジネスローンが効果を発揮します。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<!--<h3>詳細情報</h3>-->
<div class="main-hikaku-info-cont">
<h4>自動車ローンの審査は厳しい</h4>
<p>一般的にディーラーなどの自動車ローンは組むのが難しいと言われています。主な理由としては、[保証人を立てることができない]・[勤続年数が短い]・[年収が少ない]などが挙げられます。とはいえ、一括で購入するのも、なかなか現実的には難しいことですよね。また、ローンを返済し終えるまでは、担保として購入した新車の所有権がクレジット会社のものとなってしまうこともデメリットとして挙げられます。</p>

<p><img src="<?php bloginfo('template_url'); ?>/img/mycar.jpg" width="660" /></p>

<h4>銀行系カードローンという名の救世主</h4>
<p>そこで救世主とも呼べる存在が銀行系カードローンです。銀行系カードローンの特徴としては[保証人や担保が不要であること]・[総量規制対象外なので、年収の3分の1以上であっても借入ができること]・さらに[低金利であること]が挙げられます。銀行系カードローンは様々な銀行が行なっていますが、特に審査時間の短さや借入可能額の大きさ・ネットで3秒診断が可能なことなどから、三菱東京UFJ銀行のカードローンは特に優秀なカードローンであると言えます。審査の際、参照する信用機関が自動車ローンなどとは異なるため、一度自動車ローンに落ちた方でも是非もう一度申し込みをしてみていただきたいと思います。</p>

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
