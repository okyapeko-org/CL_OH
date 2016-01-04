<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage ousama
 * @since 2012/09/12
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="keywords" content="キャッシング,キャッシング王" />
<meta name="robots" content="noindex,nofollow">
<title><?php if(is_home()) : bloginfo( 'description' ); ?><?php endif; ?><?php single_cat_title(); ?><?php single_post_title(); ?><?php if(is_single(array('21','43','37','10','41','52','37','50','45','54'))) : ?>
の審査情報<?php endif; ?> | <?php bloginfo('name'); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php bloginfo('template_url'); ?>/css/import.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/tablesort-script.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/anime.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/slider-script.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/tablesort-script.js" type="text/javascript"></script>

</head>

<body <?php body_class(); ?>>
<div id="head">
<h1><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '', true, 'left' );

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?>
<?php if(is_home()) : ?>
<?php bloginfo('name'); ?>
<?php endif; ?>
<?php if(is_single(array('21','43','37','10','41','52','37','50','45','54'))) : ?>
の審査情報
<?php endif; ?></h1>
<div id="head-logo">
<a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/194-40.jpg" alt="おしえて！キャッシングキングのロゴ" /></a>
</div><!-- #head-logo -->
<div id="head-cont">

</div><!-- #head-cont -->
<br clear="all" />
</div><!-- #head -->

<div id="navi">
<div id="navi-cont">
<ul>
<li><a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/navi-home.jpg" alt="navi" /></a></li>
<li><a href="<?php echo home_url( '/' ); ?>?cat=71"><img src="<?php bloginfo('template_url'); ?>/img/navi-manga.jpg" alt="navi" /></a></li>
<li><a href="<?php echo home_url( '/' ); ?>?cat=72"><img src="<?php bloginfo('template_url'); ?>/img/navi-search.jpg" alt="navi" /></a></li>
<li><a href="<?php echo home_url( '/' ); ?>?page_id=574"><img src="<?php bloginfo('template_url'); ?>/img/navi-shindan.jpg" alt="navi" /></a></li>
<li><a href="<?php echo home_url( '/' ); ?>?cat=69"><img src="<?php bloginfo('template_url'); ?>/img/navi-board.jpg" alt="navi" /></a></li>
<li><a href="<?php echo home_url( '/' ); ?>?cat=70"><img src="<?php bloginfo('template_url'); ?>/img/navi-qa.jpg" alt="navi" /></a></li>
<br clear="all" />
</ul>
</div><!-- #navi-cont" -->
</div><!-- #navi -->

<?php if(is_home()): ?>
<?php get_template_part( 'loop', 'kanban' ); ?>
<?php get_template_part( 'loop', 'ribon' ); ?>
<?php endif; ?>

<?php if(is_home()): ?>
<?php else: ?>
<div id="pan"><?php my_bread(); ?></div><!--#pan -->
<?php endif; ?>
	
<div id="wrap">