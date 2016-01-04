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
<li>旦那様に収入があれば専業主婦でもOK</li>
<li>借入可能額に制限があるが、それでも生活費の足し程度なら十分な額</li>
<li>即日融資はできない場合が多いので、余裕を持って申込をしましょう</li>
</ul>
</div><!-- #main-hikaku-point -->
<!--
<p id="main-hikaku-bun">ビジネスローンとは主に、開業資金・従業員への給料の支払い・事業拡大などに利用されます。事業計画がしっかりあるにも関わらず、開業して間もない為に、銀行の融資が受けられない…。そんな場合に、ビジネスローンが効果を発揮します。</p>
-->
</div><!-- #main-hikaku -->

<div id="main-hikaku-info">
<!--<h3>詳細情報</h3>-->
<div class="main-hikaku-info-cont">
<h4>なんとあのメガバンクだったら専業主婦でもお金を借りれる！！</h4>
<p>普段あまりメインで家事などをすることのない旦那様にはピンとこないかもしれませんが、専業主婦の方だって何かとお金が必要になる場面は多いものですよね。ところが実態は、ほとんどのキャッシング会社で、本人に収入がない限りは専業主婦の方であってもお金を貸してもらえません。
</p><p>しかしながら、銀行系のカードローン会社の中にはなんと本人に収入のない専業主婦の方でも融資をしてくれる会社が存在します！それはなんと、あの<span style="background:yellow;color:red;">世界規模のメガバンク「みずほ銀行」</span>です！みずほ銀行カードローンでは専業主婦の方は30万円までと、借入可能額の制限はありますが、それでも生活費への足しはもちろん、思わぬアクシデントによる出費などの場合でも、これだけ余裕のある融資額でしたら十分事足りるのではないでしょうか。</p><p>ところが銀行系カードローンであるため申込に少々時間がかかってしまい、本当に必要になった際の「今すぐ借りたい！」には応えてもらえない可能性が高いです。「まだ切羽詰まってるわけじゃないからいいや」と考えるのではなく、「<span style="background:yellow;color:red;">万一に備えて一枚持っておこう</span>」と考えるようにし、不測の事態に備えておくことが賢い選択肢と言えるのではないでしょうか。
</p>
<p>※なお、ご自身に収入のある兼業主婦の方はさらに選択の幅が広がります。詳しくは<a href="<?php echo home_url( '/' ); ?>shufu?cont">こちらのリンク</a>を参照してください。</p>


</div>
</div>

<h3 class="main-hikaku-ichiran">カテゴリ別キャッシング比較</h3>

<?php get_template_part( 'loop', 'catetablere' );?>

<?php get_template_part( 'loop', 'shindan' );?>

<?php get_template_part( 'loop', 'osusume' );?>

<?php get_template_part( 'loop', 'hikaku' );?>
<?php get_template_part( 'loop', 'search' );?>
<?php get_template_part( 'loop', 'manga' );?>






</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
