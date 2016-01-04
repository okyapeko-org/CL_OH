<?php
/*
Template Name: page-sindan-kekka
*/
get_header(); ?>

		<div id="wrap">
			<div id="main" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page-sindan-kekka' );
			?>

			</div><!-- #main --><!-- kekka-php end -->


<?php get_sidebar(); ?>
		</div><!-- #wrap -->
<?php get_footer(); ?>