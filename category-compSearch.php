<?php get_header(); ?>

<div id="content" role="main">
cateranking

<div id="rankingCate" class="outer" />


<?php while ( have_posts() ) : the_post(); ?>

	
	<div class="clearfix inner rankingCate-box" style="margin-top:20px;">
		<h3><?php echo post_custom('TOP-タイトル'); ?></h3>
	<div class="rankingCate-box-right"><p><img src="/img/<?php echo post_custom('業者情報-アフィリエイト画像'); ?>" alt="<?php the_title(); ?>"/></p></div>
	<div class="rankingCate-box-left">
	<table>
		<thead>
		<tr>
			<th>スプレッド 米／ドル</th>
			<th>スプレッド ユーロ／円</th>
			<th>スプレッド 英ポンド／円</th>
			<th>スプレッド 豪ドル／円</th>
			<th>スプレッド NZドル／円</th>
			<th>スプレッド カナダドル／円</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			
			<td><?php echo post_custom('業者情報-スプレッド-米ドル／円'); ?></td>
			<td><?php echo post_custom('業者情報-スプレッド-ユーロ／円'); ?></td>
			<td><?php echo post_custom('業者情報-スプレッド-英ポンド／円'); ?></td>
			<td><?php echo post_custom('業者情報-スプレッド-豪ドル／円'); ?></td>
			<td><?php echo post_custom('業者情報-スプレッド-NZドル／円'); ?></td>
			<td><?php echo post_custom('業者情報-スプレッド-カナダドル／円'); ?></td>
			
		</tr>
		</tbody>
	</table>
	<p><?php echo post_custom('講座ページ-オススメ業者'); ?></p>
	</div>
	<div class="clearfix osusumeCate-box-bt">
	<p class="link-bt"><a href="">お申し込みはこちら</a></p>

	<p class="link-greenbt"><a href="<?php the_permalink(); ?>">この会社の詳細情報はこちら</a></p>
	</div>

	</div>
    
<?php endwhile; // End the loop. Whew. ?>



	
<?php get_template_part( 'loop', 'all-hikakumenu' ); ?>


			</div><!-- #rankingCate -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

