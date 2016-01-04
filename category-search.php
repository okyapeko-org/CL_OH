<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="main-w">
<div id="main-search">
<h2><img src="<?php bloginfo('template_url'); ?>/img/kanban-search.jpg" alt="キャッシング掲示板" /></h2>
<div id="main-search-in">

	<?php get_search_form(); ?>


	</div>
</div><!-- #main-search -->



<?php $posts=get_posts('category=68 & order=asc & numberposts=20'); ?>
<p id="main-search-kekka"><?php print count($posts); ?></p>







<div id="main-search-out">
<table border="0" cellpadding="2" cellspacing="1" id="jquery-tablesorter-table" class="sortable">
<thead>
<tr>
<th width="140" class="nosort"><h3>キャッシング会社</h3></th>
<th width="82" class="table-pointer"><h3>実質年率</h3></th>
<th width="89" class="table-pointer"><h3>限度額</h3></th>
<th width="74" class="table-pointer"><h3>審査時間</h3></th>
<th width="74" class="table-pointer"><h3>融資時間</h3></th>
<th width="310" class="nosort"><h3>詳細</h3></th>
<th width="87" class="nosort"><h3>リンク</h3></th>
</tr>
</thead>
<tbody>

<!-- loop部分 -->

<?php if($posts): foreach($posts as $post):setup_postdata($post); ?>
<tr>
<td><a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-EK-<?php echo date_i18n("mdHi");//現在時刻まで表示 ?>" target="_blank"><?php echo post_custom('img-120x120'); ?></a>
<p class="main-cate-table-link"><a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-EK-<?php echo date_i18n("mdHi");//現在時刻まで表示 ?>" target="_blank"><?php the_title(); ?></a></p></td>
<td><?php echo post_custom('最低金利'); ?><br />～<br /><?php echo post_custom('最高金利'); ?></td>
<td>最高<br /><?php echo post_custom('限度額'); ?>円</td>
<td><?php echo post_custom('sinsajikan'); ?></td>
<td><?php echo post_custom('yuusijikann'); ?></td>
<td><p class="main-search-out-syosuai">
<?php echo post_custom('text1'); ?><br /><?php echo post_custom('text2'); ?><br /><?php echo post_custom('text3'); ?>
</p></td>
<td>
<a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-ES-<?php echo date_i18n("mdHi");//現在時刻まで表示 ?>" target="_blank">公式サイト</a>

</td>
</tr>
<?php endforeach; endif; ?>
<!-- loop部分おわり -->	

</tbody>
</table>
</div>

</div><!-- #main-w -->



<?php get_footer(); ?>
