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
<li>借り換え、おまとめのメリットは低金利</li>
<li>返済が長期になり過ぎないように注意しましょう</li>
<li>年収によっておまとめの出来るローン会社が違ってきます</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">複数の金融機関のローン・借金を一つにまとめる（一本化する）事で返済管理を楽にし、金利が低いローンにまとめ月々の支払学を下げるローンの事です。（精神的にも楽になります！） </p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">
<h4>借り換え、おまとめのメリット</h4>
<p>1 返済日を1つにできる。<br />
返済期間を長く設定し月々の返済額を少なくしながら貯金をしたり、金利が下がった分を毎月の生活費にまわすこともできます。</p>
<p>2　返済計画を立てることができる。<br />
複数の返済日から解放され精神的なゆとりができる。 さらに、おまとめローンを利用し、きちんと返済していくと、新たな融資受けやすくなります。</p>

<h4>返済が長すぎる場合は過払い分も支払う事になるので注意を</h4>
<p>おまとめローン全体のデメリットは、まとめたのに金利が低いため、月々の返済が楽になるという理由で返済期間を長く設定したために、長期に渡って返済していくことになってしまうことがあります。また、おまとめしたことにより、過払い分もすべて支払うことになりますのでご注意を。</p>

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
