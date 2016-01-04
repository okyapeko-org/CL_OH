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
<li>最短一時間以内でのスピーディなキャッシング</li>
<li>即日で口座振込が可能な会社もあり</li>
<li>最近は銀行系キャッシング並の低金利に</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">すぐに借りられる！でも金利が高い･･･と思われがちですが、銀行系の金利に近づいてきています。消費者金融会社の特徴は、融資スピードの早さです。インターネットでの申し込みでは、最短で申し込んだその日の内に自分の口座に振り込んでくれるなど、即日での融資が可能なので特に便利です。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<div class="main-hikaku-info-cont">
<h4>その日に申し込んで、その日に口座に振りこんでくれる即日融資も</h4>
<p>消費者金融での最大のメリットはその日に融資を受けれることです。急な出費でお金が必要となったり、お急ぎの方には頼もしい味方です。お急ぎの場合は審査通過後に自動契約機でカードを受け取り、その日に融資を受けることができます。消費者金融の最大の強みは融資のスピード、利便性の高さです。
</p>
<p>※即日融資に対応してるのは収入証明書が要らない50万円以下のキャッシングが対象となります。</p>
</div>

<div class="main-hikaku-info-cont">
<h4>消費者金融のイメージを払拭</h4>
<p>お金を借りる際、あまり他人には知られたくないと思います。近年、消費者金融系はどこよりもプライバシー保護に力を入れています。たとえば、申込時に必要となる書類を会社名が分からないようにして送ってきたり、本人確認の電話も個人名でかけてくれたり他人に知られにくい配慮をおこなっています。</p>
</div>
</div>

<h3 class="main-hikaku-ichiran">カテゴリ別キャッシング比較</h3>
<?php get_template_part( 'loop', 'catetablere' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>
<?php get_template_part( 'loop', 'manga' );?>






</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
