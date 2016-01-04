<div id="main-index-board">
<div id="main-index-board-text">
<p>キャッシング掲示板では、「ちょっとした疑問」から「誰にも聞けない相談」まで
  色んな質問をしたり、回答したり、読んだりする事が出来ます！質問も随時募集中！</p>
    
<!-- loop部分 -->
<?php $posts=get_posts('category=cat69 & numberposts=2 & order=desc'); ?>
<?php if($posts): foreach($posts as $post):setup_postdata($post); ?>
<dl>
<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
<dd>質問者：<?php echo post_custom('お名前'); ?>　投稿日時：<?php the_time("Y年n月j日(D)") ?></dd>
</dl>
<?php endforeach; endif; ?>
<!-- loop部分終了 -->

<p class="text-right"><a href="<?php echo home_url( '/' ); ?>?cat=69">質問の一覧を見る</a></p>

</div><!-- #main-index-board-text -->
<div id="main-index-board-bosyu">
<p><a href="<?php echo home_url( '/' ); ?>toukou-s"><img src="<?php bloginfo('template_url'); ?>/img/button-keijiban03.jpg" alt="質問募集中じゃぞい" /></a></p>
</div><!-- #main-index-board-bosyu -->
<br clear="all" />
</div><!-- #main-index-board -->