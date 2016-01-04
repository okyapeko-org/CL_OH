<div id="main-cate-table">
<table border="0" cellpadding="2" cellspacing="1" id="table" class="sortable">
<thead>
<tr>
<th width="140" class="nosort"><h3>キャッシング<br />サービス</h3></th>
<th width="65"><h3>実質<br />年率</h3></th>
<th width="70"><h3>限度額</h3></th>
<th width="70"><h3>審査<br />時間</h3></th>
<th width="270" class="nosort"><h3>詳細</h3></th>
<th width="70" class="nosort"><h3>リンク</h3></th>
</tr>
</thead>
<tbody>
<!-- loop部分 -->
<?php while ( have_posts() ) : the_post(); ?>
<tr>
<td><a href="<?php echo home_url( '/' ); ?>re<?php echo post_custom('リファラーID'); ?>14" target="_blank"><?php echo post_custom('img-100x60'); ?></a>
<p class="main-cate-table-link">
<a href="<?php echo home_url( '/' ); ?>re<?php echo post_custom('リファラーID'); ?>14" target="_blank"><?php the_title(); ?></a></p></td>
<td><?php echo post_custom('最低金利'); ?><br />～<br /><?php echo post_custom('最高金利'); ?></td>
<td>

<?php if(is_single(array('1244'))) : ?>
<?php echo post_custom('限度額'); ?>
<?php elseif(is_single(array('54'))) : ?>
最高<?php echo post_custom('限度額'); ?>
<?php else: ?>
11<?php echo post_custom('最低借入額'); ?><br />～<br /><?php echo post_custom('限度額'); ?>
<?php endif; ?>	

</td>
<td><?php echo post_custom('sinsajikan'); ?></td>
<td><p class="main-cate-table-syosuai"><?php echo post_custom('text1'); ?><br /><?php echo post_custom('text2'); ?><br /><?php echo post_custom('text3'); ?></p></td>
<td><a href="<?php echo home_url( '/' ); ?>re<?php echo post_custom('リファラーID'); ?>14" target="_blank"><img src="<?php echo home_url( '/' ); ?>wp-content/themes/osusume/img/button-05.jpg" alt="" /></a><br />
<a href="<?php the_permalink(); ?>"><img src="<?php echo home_url( '/' ); ?>wp-content/themes/osusume/img/button-06.jpg" alt="" /></a></td>
</tr>
<?php endwhile; // End the loop. Whew. ?>
<!-- loop部分おわり -->	
</tbody>
</table>
</div><!-- main-cate-table -->