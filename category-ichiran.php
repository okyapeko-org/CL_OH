<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="wrap">

<div id="main-w">

<div id="main-w-cate-table">
<table border="0" cellpadding="2" cellspacing="1" id="jquery-tablesorter-table" class="sortable">
<thead>
<tr>
<th width="140" class="nosort"><h3>キャッシング<br />サービス</h3></th>
<th width="90" class="table-pointer"><h3>最高<br />年率</h3></th>
<th width="120" class="table-pointer"><h3>最低<br />年率</h3></th>
<th width="90" class="table-pointer"><h3>最大<br />限度額</h3></th>
<th width="90" class="table-pointer"><h3>最低<br />限度額</h3></th>
<th width="90" class="table-pointer"><h3>審査<br />時間</h3></th>
<th width="90" class="table-pointer"><h3>主婦<br />OK</h3></th>
<th width="70" class="table-pointer"><h3>おまとめ</h3></th>
<th width="70" class="table-pointer"><h3>総量規制</h3></th>
<th width="70" class="table-pointer"><h3>来店不要</h3></th>
<th width="70" class="table-pointer"><h3>学生・バイト</h3></th>
<th width="70" class="table-pointer"><h3>お試し診断</h3></th>
<th width="70" class="table-pointer"><h3>土日祝</h3></th>
<th width="70" class="table-pointer"><h3>無利息期間</h3></th>
<th width="70" class="nosort"><h3>リンク</h3></th>
</tr>
</thead>
<tbody>
<!-- loop部分 -->
<?php while ( have_posts() ) : the_post(); ?>
<tr>
<td><a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-EA-<?php echo date_i18n("mdHi");//現在時刻まで表示 ?>" target="_blank"><?php echo post_custom('img-120x120'); ?></a>
<p class="main-cate-table-link">
<a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-EA-<?php echo date_i18n("mdHi");//現在時刻まで表示 ?>" target="_blank"><?php the_title(); ?></a></p></td>
<td><?php echo post_custom('最高金利'); ?></td>
<td><?php echo post_custom('最低金利'); ?></td>
<td><?php echo post_custom('限度額'); ?>円</td>
<td><?php echo post_custom('最低借入額'); ?>円</td>
<td><?php echo post_custom('sinsajikan'); ?></td>
<td><?php echo post_custom('sengyousyuhu'); ?></td>
<td><?php echo post_custom('omatome'); ?></td>
<td><?php echo post_custom('souryoukiseigai'); ?></td>
<td><?php echo post_custom('raitenhuyou'); ?></td>
<td><?php echo post_custom('gakusei'); ?></td>
<td><?php echo post_custom('otamesisinsa'); ?></td>
<td><?php echo post_custom('donitisyuku'); ?></td>
<td><?php echo post_custom('murisokukikan'); ?></td>
<td><a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-EA-<?php echo date_i18n("mdHi");//現在時刻まで表示 ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/button-05.jpg" alt="" /></a><br />
<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/button-06.jpg" alt="" /></a></td>
</tr>
<?php endwhile; // End the loop. Whew. ?>
<!-- loop部分おわり -->	
</tbody>
</table>
	
<p>※1 主婦の方でも、パート、アルバイトによる安定した収入がある場合はお申込み可能です。</p>
<p>※2 オリックス銀行はお申し込み時の年齢が満20歳以上65歳以下の方で、毎月安定した収入のある方が対象となります。</p>
<p>※3 三菱東京UFJ銀行カードローンの主婦の方の利用限度額は30万円、学生の方は10万円となります。</p>
<p>※4 プロミスの無利息サービスはメールアドレス登録とWeb明細利用の登録が必要です。</p>
<p>※5 みずほ銀行の情報は「エグゼクティブプラン」になります。</p>
</div><!-- main-cate-table -->

<?php get_template_part( 'loop', 'hikakuw' );?>

<div id="main-search-in">
<p id="main-search-saikensaku">もっと条件を詳しく絞り込む</p>
<?php get_search_form(); ?>
</div>

</div><!-- #main-w -->

</div><!-- #wrap -->


<?php get_footer(); ?>