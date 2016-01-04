<?php
/*
Template Name: page-sindan-go
*/
get_header(sindan); ?>

		<div id="wrap">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="main-yesno-go">
	
<ul>
	<li class="main-yesno-go1">
	<a href="<?php echo home_url( '/' ); ?>sindan"><img src="<?php bloginfo('template_url'); ?>/img/button-yarinaosi.gif" alt="診断をやり直す" /></a>
	</li>
	<li class="main-yesno-go2">
						<form action="<?php echo post_custom('formaction'); ?>" method="get">
						<input type="hidden" name="tag" value="<?php echo $_GET['Q']; ?><?php echo $_GET['Q9']; ?>診断" />
	<input id="sindan-end" type="submit" />
	</li>
</ul>	

</form>
</div>


<?php endwhile; // end of the loop. ?>

<!-- page sindan php -->



		</div><!-- #wrap -->
<?php get_footer(); ?>