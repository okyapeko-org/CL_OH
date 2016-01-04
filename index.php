<?php get_header(); ?>

<div id="main">

<!--
<div class="main-index-ad">
	<a href="<?php echo home_url( '/' ); ?>?cat=71"><img src="<?php bloginfo('template_url'); ?>/img/660-122.jpg" alt="まんがでわかるキャッシング" width="660" height="122" /></a>
</div>--><!-- #main-ad -->


	
<?php get_template_part( 'loop', 'search2' ); ?>

<?php get_template_part( 'loop', 'manga' );?>

<div class="main-cont-l">
<h3><a href="<?php echo home_url( '/' ); ?>?cat=70"><img src="<?php bloginfo('template_url'); ?>/img/button-qa.gif" alt="よくあるご質問" /></a></h3>
<div class="main-cont-in">

<ul>
<!-- loop部分 -->
<?php $posts=get_posts('category=cat70 & order=asc & numberposts=5'); ?>
<?php if($posts): foreach($posts as $post):setup_postdata($post); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; endif; ?>
<!-- loop部分おわり -->	
</ul>


</div><!-- .main-cont-in -->
</div><!-- .main-cont-l -->

<div class="main-index-r">
<h3><a href="<?php echo home_url( '/' ); ?>?cat=74"><img src="<?php bloginfo('template_url'); ?>/img/button-taiken.gif" alt="担当者K村のリアル体験談" /></a></h3>

<div class="main-index-r-cont">
<ul>
<!-- loop部分 -->
<?php $posts=get_posts('category=cat74 & numberposts=5 & order=asc'); ?>
<?php if($posts): foreach($posts as $post):setup_postdata($post); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; endif; ?>
<!-- loop部分おわり -->	
</ul>

</div>
</div><!-- .main-index-r -->

<br clear="all" />

<?php get_template_part( 'loop', 'board' ); ?>

<?php get_template_part( 'loop', 'comp' );?>

</div><!-- #main -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
