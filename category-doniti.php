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
<li>土日祝ならインターネット申し込みが便利。</li>
<li>５０万円以下のキャッシングが対象。</li>
<li>土日祝申し込み時の勤め先在籍確認は後日になります。</li>
</ul>
</div><!-- #main-hikaku-point -->
<!--<p id="main-hikaku-bun">普通、休日は審査対象者の勤め先の会社が休みで勤務先の確認が取ることが出来ないの為、キャッシング会社の方は借入の審査を行うことが出来ません。ですので、休日に融資を受けるのは非常に厳しいものとなります。しかしインターネットの申し込みなら土日祝、24時間いつでも申し込みができます。申し込みをすると、審査後にお近くの自動契約機にてカードを発行して、すぐに融資を受けることができます。審査も早く、インターネットから申し込みができる利点から多くの方がご利用になってます。</p>-->
<div id="main-hikaku-info">
<h4>土日祝日でも新規受付をしてくれるキャッシングとは？</h4>
<p>普通、 休日は審査対象者の勤め先が会社が休みで勤務先の確認が取ることが出来ないの為、キャッシング会社の方は借入の審査を行うことが出来ないため休日に融資を受けるのは非常に難しくなります。<br />
しかしインターネットの申し込みなら土日祝、24時間いつでも申し込みができます。申し込みをすると、審査後にお近くの自動契約機にてカードを発行して、すぐに融資を受けることができます。審査も早く、インターネットから申し込みができる利点から多くの方がご利用になってます。</p>

<h4>土日祝日で利用できるキャッシングの注意点</h4>
<p>土日祝日に融資をするために、職場への在籍確認を後日にずらしたり、収入証明書のチェックを省いたりしているため、融資額の上限が50万円までとなっています。
融資額を増枠したい場合には、後日に再度審査をする必要があります。</p>
<h4>申込から融資までの流れ</h4>
<p>①土日祝日対応している消費者金融会社の申込ページからネット申し込み<br />
②審査結果を30分程度待つ（土日祝でのお申し込みの場合、職場への在籍確認は後日となります）<br />
③審査が通っていれば、お近くの自動契約機にてカードを発行する<br />
④融資完了！</p>

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
