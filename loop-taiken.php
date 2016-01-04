<div id="all-taiken">
<h3>キャッシング『リアル』体験談一覧</h3>
<div id="all-taiken-cont">
<!-- loop部分 -->
<?php $posts=get_posts('category=74 & numberposts=20 & order=asc'); ?>
<?php if($posts): foreach($posts as $post):setup_postdata($post); ?>
<dl>
<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
<dd>お名前：<?php the_author_firstname(); ?>　投稿日時：<?php the_time('Y年n月j日 (D)'); ?></dd>
</dl>
<?php endforeach; endif; ?>
<!-- loop部分おわり -->	
</div><!-- #all-taiken-cont -->
</div><!-- #all-taiken -->