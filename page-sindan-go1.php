<?php
/*
Template Name: page-sindan-go
*/
get_header(sindan); ?>

		<div id="wrap">
			
<div id="main-shindan">
						<form action="<?php echo post_custom('formaction'); ?>" method="get">
						<input type="hidden" name="tag" value="<?php echo $_GET['Q']; ?><?php echo $_GET['Q9']; ?>診断" />
	<input id="sindan-end" type="submit" name="Q1" value="hajimete+" />
</form>
</div>



			<div id="main" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="sindanCont">
					
					<h2>借入タイプ診断</h2>

					<div class="sindanContMain">

						<?php if ( is_front_page() ) { ?>
							<h3 class="sindanTitle"><?php echo post_custom('Qタイトル'); ?></h3>
						<?php } else { ?>
							<h3 class="sindanTitle"><?php echo post_custom('Qタイトル'); ?></h3>
						<?php } ?>

						<div class="mondai">
						<?php the_content(); ?>
						</div>

						<h4>関連キーワード</h4>
						<p class="kanrenKey"><a href="<?php echo post_custom('関連キーワードURL'); ?>"><?php echo post_custom('関連キーワード'); ?></a></p>
					</div><!-- .sindanContMain end -->

					<div class="sindanForm">
						<form action="<?php echo post_custom('formaction'); ?>" method="get">
						<input type="hidden" name="tag" value="<?php echo $_GET['Q']; ?><?php echo $_GET['Q9']; ?>診断" />
						<input id="sindanSubmitYes" type="submit" />
						</form>

					</div><!-- .sindanForm end -->
				</div><!-- #sindanCont end -->
				</div><!-- #post-## -->


<?php endwhile; // end of the loop. ?>

			</div><!-- #main --><!-- page sindan php -->



		</div><!-- #wrap -->
<?php get_footer(); ?>