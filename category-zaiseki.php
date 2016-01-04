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

<div id="main-hikaku">
<h2><?php single_cat_title(); ?></h2>

<div id="main-hikaku-point">
<ul>
<li>在籍確認なし＝職場に不自然な電話がかかってこない</li>
<li>インターネット上ですべてが完結してしまうWEB完結</li>
<li>入会申込書などの契約書類の郵送物のやり取りというのもありません</li>
</ul>
</div><!-- #main-hikaku-point -->

<!--<p id="main-hikaku-bun">主婦の方でも安定した収入があればお申し込み可能です。総量規制により借り入れ可能額の低さが気になる方は総量規制対象外の銀行系キャッシングもオススメです。</p>
-->
</div><!-- #main-hikaku -->




<div id="main-hikaku-info">

<div class="main-hikaku-info-cont">
<h4>知ってる人は知ってる独特な方法</h4>
<p>在籍確認とは、職場や実家などに消費者金融会社が会社名を伏せて、申込者が在籍しているかの確認をするための電話のことです。基本的にはあたかも仕事などの用事があるかのように装い電話をしてきますが、フルネームで確認をすることや要件を聞いても絶対に言わないなどやり方が独特であるため、そういう事情をわかっている人には勘ぐられてしまう恐れがあります。</p>
<h4>プロミスならWeb完結も可能</h4>
<p>そこで特にオススメしたいのが、「カード発行なし」が選べるようになったプロミスです！カード発行をしないことでWebだけで契約が完結ということも可能になりました！<br/>①契約方法で「Web」を選択、②審査結果の受取方法で「メール」を選択、③書面の受取方法で「ホームページにて書面を確認」を選択するとWeb完結の申し込みが出来ます！<br/>審査通過後の契約時には、④返済方法を「口座振替（口フリ）」にして、⑤カードなしを選択すると仮IDが発行されるので、プロミスのWebサイトにアクセスしてWebIDとパスワードを設定しましょう。<br/>対応金融機関が200行以上なのでどなたでも安心して申し込みが出来ます。<br/>※お申込者それぞれの状況により希望に添えない場合もある</p>

</div>



</div>

<h3 class="main-hikaku-ichiran">カテゴリ別キャッシング比較</h3>
<?php get_template_part( 'loop', 'catetablere' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>
<?php get_template_part( 'loop', 'manga' );?>






</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
