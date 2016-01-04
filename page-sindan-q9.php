<?php
/*
Template Name: page-sindan-q9
*/
get_header(sindan); ?>

		<div id="wrap">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<div id="main-yesno">
						<?php if ( is_front_page() ) { ?>
							<h3 class="sindanTitle"><?php echo post_custom('Qタイトル'); ?></h3>
						<?php } else { ?>
							<h3 class="sindanTitle"><?php echo post_custom('Qタイトル'); ?></h3>
						<?php } ?>
<p class="main-yesno-text">						<?php the_content(); ?></p>

<form action="<?php echo post_custom('formaction'); ?>" method="get">
	<input type="hidden" name="Q" value="<?php echo $_GET['Q']; ?><?php echo $_GET['Q8']; ?>" />
<ul>
<li class="main-yesno-li1"><input id="sindan-yes" type="submit" name="<?php echo post_custom('name'); ?>" value="<?php echo post_custom('value'); ?>" /></li>
<li class="main-yesno-li2"><input id="sindan-no" type="submit" /></li>
</ul>
</form>
<br clear="all" />
</div>


<?php endwhile; // end of the loop. ?>


		</div><!-- #wrap -->
<?php get_footer(); ?>