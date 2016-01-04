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
<li>審査基準の一つは『一定の収入』があり『返済能力』があるか</li>
<li>中小のキャッシングサービスより大手の方が使い勝手は良い</li>
<li>両親の同意書が必要になってくる場合もありますのでご注意を</li>
</ul>


<!--<p id="main-hikaku-bun">学生はキャッシングできないと思われがちですが、20歳以上でアルバイトなどで一定の収入があればキャッシングすることは可能です。学生のみを対象にしたキャッシングサービス※もありますが、会社の規模が中小となりますのでアコムやプロミスなどの大手と比べると金利が高かったり、コンビニなどで気軽に借入することが難しかったりします。ですので借入をする際は下のキャッシング一覧に掲載している大手のキャッシング会社を選ぶ事をお勧めします。
<br />
※学生ローンとは、学生を対象にしたキャッシングです。金利は消費者金融大手に比べると比較的高い傾向にあります。</p>-->

</div><!-- #main-hikaku-point -->



<div id="main-hikaku-info">
<h4>審査基準はどの辺をチェックされるの？</h4>
<p>学生はキャッシングできないと思われがちですが、20歳以上でアルバイトなどで一定の収入があればキャッシングすることは可能です。学生キャッシングに限らずですが、キャシング会社にとって『ちゃんと返済ができるかどうか』が審査ポイントの重要な一つとなっています。</p>
<h4>収入が全くない場合でもキャッシングできるの？</h4>
<p>アルバイトをしなければ絶対に借りる事が出来ないということはありません。総量規制対象外の銀行系カードローンならばキャッシング出来る場合もあります。ただし両親の同意書が必要になってくる場合もありますのでご注意を。</p>
<h4>学生のみを対象にしたキャッシング会社ってどうなの？</h4>
<p>学生をターゲットにしたキャッシング会社もありますが、アコムやプロミスなどの大手に比べると金利が高かったり、コンビニなどで借り入れ、返済が気軽に出来ないこともございます。ですので大手キャッシング会社から選んでお申し込みをする方が、より快適なキャッシングサービスを受けることが可能です。</p>
</div><!-- #main-hikaku-info -->

<h3 class="main-hikaku-ichiran">カテゴリ別キャッシング比較</h3>
<?php get_template_part( 'loop', 'catetablere' );?>

<?php get_template_part( 'loop', 'osusume' );?>

</div><!-- #main-hikaku -->

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>
<?php get_template_part( 'loop', 'manga' );?>





</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
