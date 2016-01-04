<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'under' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div id="main-hikaku">
<h3>キャッシング比較</h3>
<div id="main-hikaku-cont">
<dl id="main-hikaku-cont-1">
  <dt>タイプで比較する</dt>
  <dd>
	<ul>
  <li><a href="<?php echo home_url( '/' ); ?>hajimete-2">初めての方</a></li>
  <li><a href="<?php echo home_url( '/' ); ?>shufu">主婦OK</a></li>
  <li><a href="<?php echo home_url( '/' ); ?>gakusei-2">学生OK</a></li>
  <li><a href="<?php echo home_url( '/' ); ?>haken">派遣・パート・バイト</a></li>
  <li><a href="<?php echo home_url( '/' ); ?>lady">女性向け</a></li>
  </ul>
  <br clear="all" />
  </dd>
</dl>
  
<dl id="main-hikaku-cont-2">
  <dt>機能で比較する</dt>
  <dd>
<ul>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=52">審査について</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=59">低金利</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=63">借り換え＆おまとめ</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=60">土日祝でも借りれる</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=57">即日融資可能</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=61">来店不要</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=58">無利息期間あり</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=62">総量規制対象外</a></li>
  </ul>
  <br clear="all" />
  </dd>
</dl>
  
<dl id="main-hikaku-cont-3">
  <dt>金融機関で比較</dt>
  <dd>
<ul>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=49">銀行系</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=48">信販系</a></li>
    <li><a href="<?php echo home_url( '/' ); ?>?cat=47">消費者金融</a></li>
  </ul>
  <br clear="all" />
</dd>
</dl>
</div>
</div>
