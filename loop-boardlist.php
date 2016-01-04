<div id="all-board">
<h3>よくあるご質問の一欄</h3>
<div id="all-board-cont">
<!-- loop部分 -->
<?php $posts=get_posts('category=69 & numberposts=20 & order=desc'); ?>
<?php if($posts): foreach($posts as $post):setup_postdata($post); ?>
<dl>
<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
<dd>質問者：<?php echo post_custom('お名前'); ?>　投稿日時：<?php the_time("Y年n月j日(D)") ?></dd>
</dl>
<?php endforeach; endif; ?>
<!-- loop部分おわり -->	
</div><!-- #all-board-cont -->
</div><!-- #all-board -->