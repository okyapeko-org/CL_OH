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
<li>今日中に現金が必要な方に最適なサービス</li>
<li>ネット審査＆申込みだからどこにいても振込みしてもらえる</li>
<li>即日振込みを受けるための申込み締め切り時間を必ず確認</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">主婦やOLといった女性向けレディースキャッシングローン会社は、女性への配慮がなされています。たとえば、ご家族の方に知られないようプライバシーに配慮していたり、初めてのキャッシングが不安という方向けに女性スタッフが親切に対応する、といった会社もあります。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<h4>誰にも合わずに希望の銀行口座に振込み</h4><p>パソコンやスマートフォン、タブレット端末からのネット契約は色々なメリットがあります。その中でも特に便利なのが、誰にも合わずに済む、来店不要の即日振込みサービスです。
即日振込み対応のキャッシング会社なら、カードが手元に届く前に希望の銀行口座に振込みをしてくれます。
来店するのは億劫だと思ってる方や、忙しい方、お急ぎの方には大変便利です。</p>

<h4>即日振込みサービスを受けるためには？</h4><p>即日振込みサービスは、平日9:00～14:50までの手続き完了が条件となります。</p>
<p>最短の流れは<br />

お申し込み（審査通過のため複数社のお申込をおすすめします。）<br />
⇓<br />
審査通過後、必要書類をFAXもしくはメール<br />
⇓<br />
平日14:00までに契約が完了なら即日振込み</p>
<p>契約を完了した時間が遅いと、翌日の振込みとなってしまう場合がありますので、時間に余裕を持って申込みましょう。</p>


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
