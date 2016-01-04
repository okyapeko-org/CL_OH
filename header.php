<?php
 session_start();
//URLパラメータの有無のチェック用に値を一時保持

$_SESSION["temp_pram"] = $_SERVER['QUERY_STRING'];
if(isset($_GET['PPC_key'])) {
$_SESSION["PPC_keyVal"] = $_GET['PPC_key'];
}

//パラメータのキーワード
$Check_id= "PPC_key";



//パラメータのキーワードと一致するかチェック
if (stristr($_SESSION["temp_pram"] ,$Check_id)){
     // キーワードと一致し、URLのパラメータが空の場合、セッションの値を保持
     if (empty ($_SESSION["temp_pram"])){   $_SESSION['pram'];
     }
     // キーワードと一致し、URLのパラメータがあり、セッションで値を保持している場合
     else if (isset($_SESSION["temp_pram"])){
          //セッションの変数削除
          unset( $_SESSION[ 'pram' ] );
          //セッション変数をURLのパラメータにする
           $_SESSION["pram"] = $_SESSION["temp_pram"];

} }
//上記以外の場合、セッションの値を保持
else {
   $_SESSION['pram'];
}


//query化
$urlPram =
array('vctpn'=> $_SESSION["PPC_keyVal"] );

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="keywords" content="キャッシング比較,カードローン比較,キャッシング審査比較,カードローン審査比較" />
<title><?php if(is_home()) : bloginfo( 'description' ); ?><?php endif; ?><?php single_cat_title(); ?><?php single_post_title(); ?><?php if(is_single(array('21','43','37','10','41','52','37','50','45','54'))) : ?>
の審査情報 | <?php endif; ?><?php bloginfo('name'); ?></title>
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
<link href="<?php bloginfo('template_url'); ?>/css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/design.css" rel="stylesheet" type="text/css" />

<link href="<?php bloginfo('template_url'); ?>/css/tablesort-script.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/anime.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/slider-script.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.tablesorter.min.js" type="text/javascript"></script>

<?php if(is_category('ichiran')){ ?>

<script>
<!--
jQuery( function() {
    jQuery( '#jquery-tablesorter-table' ) . tablesorter( {
        headers: {
            0: { sorter: false },
            14: { sorter: false }
        }
    } );
} );
// -->
</script>

<?php }elseif(array(is_category('cashing','search'))){ ?>

<script>
<!--
jQuery( function() {
    jQuery( '#jquery-tablesorter-table' ) . tablesorter( {
        headers: {
            0: { sorter: false },
            5: { sorter: false },
			6: { sorter: false }
        }
    } );
} );
// -->
</script>

<?php }else{ ?>

<script>
<!--
jQuery( function() {
    jQuery( '#jquery-tablesorter-table' ) . tablesorter( {
        headers: {
            0: { sorter: false },
            4: { sorter: false },
			5: { sorter: false }
        }
    } );
} );
// -->
</script>

<?php } ?>


</head>

<body <?php body_class(); ?>>
<div id="head">
<div id="head-in" class="clearfix">
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
<div id="head-l">
<a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/194-40.jpg" alt="おしえて！キャッシングキングのロゴ" /></a>
</div><!-- #head-l -->
<div id="head-r">
<ul>
<li><a href="<?php echo home_url( '/' ); ?>?cat=72&navi"><img src="<?php bloginfo('template_url'); ?>/img/icon-navi-01.jpg" alt="キャッシング検索" /></a></li>
<li><a href="<?php echo home_url( '/' ); ?>?cat=71&navi"><img src="<?php bloginfo('template_url'); ?>/img/icon-navi-02.jpg" alt="まんがでわかるキャッシング" /></a></li>
<li><a href="<?php echo home_url( '/' ); ?>?page_id=574&navi"><img src="<?php bloginfo('template_url'); ?>/img/icon-navi-03.jpg" alt="キャッシング診断" /></a></li>
<br clear="all" />
</ul>
</div><!-- #head-r -->
</div><!-- #head-in -->
</div><!-- #head -->

<div id="navi">
<div id="navi-cont">
<ul>
<li class="navi-cont-li"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/navi-home.jpg" alt="navi" /></a></li>
<li class="navi-cont-li"><a href="<?php echo home_url( '/' ); ?>?cat=71&navi"><img src="<?php bloginfo('template_url'); ?>/img/navi-manga.jpg" alt="navi" /></a></li>
<li class="navi-cont-li"><a href="<?php echo home_url( '/' ); ?>?cat=72&navi"><img src="<?php bloginfo('template_url'); ?>/img/navi-search.jpg" alt="navi" /></a></li>
<li class="navi-cont-li"><a href="<?php echo home_url( '/' ); ?>?page_id=574&navi"><img src="<?php bloginfo('template_url'); ?>/img/navi-shindan.jpg" alt="navi" /></a></li>
<li class="navi-cont-li"><a href="<?php echo home_url( '/' ); ?>?cat=69&navi"><img src="<?php bloginfo('template_url'); ?>/img/navi-board.jpg" alt="navi" /></a></li>
<li class="navi-cont-li"><a href="<?php echo home_url( '/' ); ?>?cat=70&navi"><img src="<?php bloginfo('template_url'); ?>/img/navi-qa.jpg" alt="navi" /></a></li>
<li class="navi-cont-li-end"><a href="<?php echo home_url( '/' ); ?>?cat=74&navi"><img src="<?php bloginfo('template_url'); ?>/img/navi-taiken.jpg" alt="navi" /></a></li>
<br clear="all" />
</ul>
</div><!-- #navi-cont" -->
</div><!-- #navi -->

<?php if(is_home()): ?>

<?php get_template_part( 'loop', 'ribon' ); ?>
<?php endif; ?>

<?php if(is_home()): ?>
<?php else: ?>
<div id="pan"><?php my_bread(); ?></div><!--#pan -->
<?php endif; ?>
	
<div id="wrap" class="clearfix">