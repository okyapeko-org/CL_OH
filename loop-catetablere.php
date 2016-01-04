<div id="main-cate-table">
<table border="0" cellpadding="2" cellspacing="1" id="jquery-tablesorter-table" class="sortable">
<thead>
<tr>
<th class="nosort"><h3>キャッシング<br />サービス</h3></th>
<th class="table-pointer"><h3>実質<br />  年率</h3></th>
<th class="table-pointer"><h3>最大<br />利用<br />限度額</h3></th>
<th class="table-pointer"><h3>審査<br />
  時間</h3></th>
<th class="nosort"><h3>詳細</h3></th>
<th class="nosort"><h3>リンク</h3></th>
</tr>
</thead>
<tbody>
<!-- loop部分 -->
<?php while ( have_posts() ) : the_post(); ?>
<tr>
<td><a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-E
<?php if(is_category(array('manga','manga01','manga02','manga03','manga04','manga05','manga06','manga07','manga08'))){ ?>M
<?php }else{ ?>C
<?php } ?>
<?php $cat_id = get_queried_object()->cat_ID;$post_id = 'category_'.$cat_id; ?>
<?php the_field('cvcat',$post_id); ?>-<?php echo date_i18n("mdHi");//現在時刻まで表示 ?>" target="_blank"><?php echo post_custom('img-120x120'); ?></a>
<p class="main-cate-table-link">
<a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-E
<?php if(is_category(array('manga','manga01','manga02','manga03','manga04','manga05','manga06','manga07','manga08'))){ ?>M
<?php }else{ ?>C
<?php } ?>
<?php $cat_id = get_queried_object()->cat_ID;$post_id = 'category_'.$cat_id; ?>
<?php the_field('cvcat',$post_id); ?>-<?php echo date_i18n("mdHi");//現在時刻まで表示 ?>" target="_blank"><?php the_title(); ?></a></p></td>
<td><?php echo post_custom('最低金利'); ?><br />～<br /><?php echo post_custom('最高金利'); ?></td>
<td>

<?php echo post_custom('限度額'); ?>


</td>
<td><?php echo post_custom('sinsajikan'); ?></td>
<td><p class="main-cate-table-syosuai"><?php echo post_custom('text1'); ?><br /><?php echo post_custom('text2'); ?><br /><?php echo post_custom('text3'); ?></p></td>
<td><a href="<?php echo home_url(); ?>/re<?php echo post_custom('リファラーID'); ?>?
<?php $urlPram = array('vcptn'=> $_SESSION["PPC_keyVal"] ); echo http_build_query($urlPram); ?>
-E
<?php if(is_category(array('manga','manga01','manga02','manga03','manga04','manga05','manga06','manga07','manga08'))){ ?>M
<?php }else{ ?>C
<?php } ?>
<?php $cat_id = get_queried_object()->cat_ID;$post_id = 'category_'.$cat_id; ?>
<?php the_field('cvcat',$post_id); ?>-<?php echo date_i18n("mdHi");//現在時刻まで表示 ?>" target="_blank">申込＆審査</a><!--<br /><br />
<a href="<?php the_permalink(); ?>">もっと詳しく</a>--></td>
</tr>
<?php endwhile; // End the loop. Whew. ?>
<!-- loop部分おわり -->
</tbody>
</table>

<?php if(is_category('shufu')){ ?><p>※アイフルは20歳以上で定期的な収入と返済能力を有する当社基準を満たす方のみ申込みが可能です</p><?php } ?>

</div><!-- main-cate-table -->