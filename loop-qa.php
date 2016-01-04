<div id="all-qa">
<h3>よくあるご質問の一欄</h3>
<div id="all-qa-cont">
<ul>
<?php $posts=get_posts('category=70 & order=asc & numberposts=20'); ?>
<?php if($posts): foreach($posts as $post):setup_postdata($post); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; endif; ?>
<!-- loop部分おわり -->	
</ul>
</div><!-- #all-qa-cont -->
</div><!-- #all-qa -->