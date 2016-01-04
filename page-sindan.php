<?php
/*
Template Name: page-sindan
*/
get_header(); ?>

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
<ul>
<li class="main-yesno-li1"><input id="sindan-yes" type="submit" name="Q1" value="hajimete+" /></li>
<li class="main-yesno-li2"><input id="sindan-no" type="submit" /></li>
</ul>
</form>
<br clear="all" />
</div>










<?php endwhile; // end of the loop. ?>

<!-- page sindan php -->



		</div><!-- #wrap -->
<?php get_footer(); ?>