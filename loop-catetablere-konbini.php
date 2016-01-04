<div id="main-cate-table">
<table border="0" cellpadding="2" cellspacing="1" id="table">
<thead>
<tr>
<th width="140"><h3>キャッシング<br />サービス</h3></th>
<th width="77"><h3>ローソン</h3></th>
<th width="77"><h3>ファミリーマート</h3></th>
<th width="77"><h3>セブンイレブン</h3></th>
<th width="77"><h3>ミニストップ</h3></th>
<th width="77"><h3>サンクス</h3></th>
<th width="87"><h3>リンク</h3></th>
</tr>
</thead>
<tbody>
<!-- loop部分 -->
<?php while ( have_posts() ) : the_post(); ?>
<tr>
<td><a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-EC<?php $cat_id = get_queried_object()->cat_ID;$post_id = 'category_'.$cat_id; ?>
<?php the_field('cvcat',$post_id); ?>" target="_blank"><?php echo post_custom('img-120x120'); ?></a>
<p class="main-cate-table-link">
<a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-EC<?php $cat_id = get_queried_object()->cat_ID;$post_id = 'category_'.$cat_id; ?>
<?php the_field('cvcat',$post_id); ?>" target="_blank"><?php the_title(); ?></a></p></td>
<td><img src="http://www.nowcash-rank.com/wp-content/themes/nowcash/img/icon-loason-<?php echo post_custom('loason'); ?>.jpg" alt="loason"></td>
<td><img src="http://www.nowcash-rank.com/wp-content/themes/nowcash/img/icon-familymart-<?php echo post_custom('familymart'); ?>.jpg" alt="familymart"></td>
<td><img src="http://www.nowcash-rank.com/wp-content/themes/nowcash/img/icon-seveneleven-<?php echo post_custom('seveneleven'); ?>.jpg" alt="seveneleven"></td>
<td><img src="http://www.nowcash-rank.com/wp-content/themes/nowcash/img/icon-ministop-<?php echo post_custom('ministop'); ?>.jpg" alt="ministop"></td>
<td><img src="http://www.nowcash-rank.com/wp-content/themes/nowcash/img/icon-sanks-<?php echo post_custom('sanks'); ?>.jpg" alt="sanks"></td>
<td><a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-EC<?php $cat_id = get_queried_object()->cat_ID;$post_id = 'category_'.$cat_id; ?>
<?php the_field('cvcat',$post_id); ?>-<?php echo date_i18n("mdHi");//現在時刻まで表示 ?>" target="_blank">申込&審査</a><!--<br /><br />
<a href="<?php the_permalink(); ?>">もっと詳しく</a>--></td>
</tr>
<?php endwhile; // End the loop. Whew. ?>
<!-- loop部分おわり -->
</tbody>
</table>
</div><!-- main-cate-table -->