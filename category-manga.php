<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="main">

<div id="main-manga-kanban">
	
<div id="main-manga-kanban-list">
<p>目次</p>
<ul>
    <li><a href="<?php echo home_url( '/' ); ?>manga01?main">銀行系キャッシングなら安心で低金利</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>manga02?main">おまとめローンで返済額が安くなる!?</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>manga03?main">主婦でも借りれるキャッシングとは？</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>manga04?main">フリーターでもキャッシング出来るの？</a></li>
</ul>
	
<ul>
	<li><a href="<?php echo home_url( '/' ); ?>manga05?main">学生でもキャッシングできるの？</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>manga06?main">事業資金も借り入れできるの？</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>manga07?main">今すぐ借りれるキャッシング</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>manga08?main">低金利で無利息のキャッシングって？</a></li>
</ul>
</div>
	
<!--
<dl>
	<dt>目次</dt>
    <dd><a href="<?php echo home_url( '/' ); ?>manga/entry895.html">銀行系キャッシングなら安心で低金利</a></dd>
    <dd><a href="<?php echo home_url( '/' ); ?>manga/entry900.html">おまとめローンで返済額が安くなる!?</a></dd>
    <dd><a href="<?php echo home_url( '/' ); ?>manga/entry902.html">主婦でも借りれるキャッシングとは？</a></dd>
    <dd><a href="<?php echo home_url( '/' ); ?>manga/entry904.html">フリーターでもキャッシング出来るの？</a></dd>
    <dd><a href="<?php echo home_url( '/' ); ?>manga/entry906.html">学生でもキャッシングできるの？</a></dd>
    <dd><a href="<?php echo home_url( '/' ); ?>manga/entry908.html">事業資金も借り入れできるの？</a></dd>
    <dd><a href="<?php echo home_url( '/' ); ?>manga/entry910.html">今すぐ借りれるキャッシング</a></dd>
    <dd><a href="<?php echo home_url( '/' ); ?>manga/entry912.html">低金利で無利息のキャッシングってどんなのがあるの？</a></dd>
</dl>
-->
</div>


<?php get_template_part( 'loop', 'manga-02' );?>


<?php get_template_part( 'loop', 'shindan' );?>


<?php get_template_part( 'loop', 'search' );?>

	
</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
