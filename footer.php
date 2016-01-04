<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
</div><!-- #wrap -->

<div id="footer">
<div id="footer-cont">
	
<ul id="footer-pl">
<li>・キャッシングキングではキャッシングの最新情報提供を努めており、情報更新に万全を期しておりますが、内容を保証するものではございません。</li>
<li>・当サイトは各社と情報掲載の提携（公式サイトへのリンクするものに関して）を行った上で、商品の掲載を行っております。</li>
<li>・各商品提供会社の公式サイトにて内容をご確認頂き、ご自身の判断、責任で商品をご検討ください。</li>
</ul>

<p id="footer-link"><a href="<?php echo home_url( '/' ); ?>">HOME</a> | <a href="<?php echo home_url( '/' ); ?>cookie">クッキーに関するポリシー</a> | <a href="<?php echo home_url( '/' ); ?>policy">プライバシーポリシー</a> | <a href="<?php echo home_url( '/' ); ?>?page_id=822">運営者情報</a> | </p>
<p id="copyright">Copyright(C) 2014 all right reserved by <a href="<?php echo home_url( '/' ); ?>">おしえて！キャッシングキング</a></p>
</div>
</div><!-- footer -->


<!-- PageTop -->
<div class="PageTop"><a href="#head"><img src="<?php bloginfo('template_url'); ?>/img/cmn_pagetop_on.png" width="58" height="35" alt="TOPに戻る" class="rover" /></a></div>
<!-- /PageTop -->


	<script type="text/javascript">
  var sorter = new TINY.table.sorter("sorter");
	sorter.head = "head";
	sorter.asc = "asc";
	sorter.desc = "desc";
	sorter.even = "evenrow";
	sorter.odd = "oddrow";
	sorter.evensel = "evenselected";
	sorter.oddsel = "oddselected";
	sorter.paginate = true;
	sorter.currentid = "currentpage";
	sorter.limitid = "pagelimit";
	sorter.init("table",1);
  </script>




<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35559865-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<!-- ▼▼▼MicroAd通常▼▼▼ -->
<script type="text/javascript" class="microad_blade_track">
<!--
var microad_blade_jp = microad_blade_jp || { 'params' : new Array(), 'complete_map' : new Object() };
(function() {
var param = {'co_account_id' : '8964', 'group_id' : '', 'country_id' : '1', 'ver' : '2.1.0'};
microad_blade_jp.params.push(param);

var src = (location.protocol == 'https:')
? 'https://d-track.send.microad.jp/js/blade_track_jp.js' : 'http://d-cache.microad.jp/js/blade_track_jp.js';

var bs = document.createElement('script');
bs.type = 'text/javascript'; bs.async = true;
bs.charset = 'utf-8'; bs.src = src;

var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(bs, s);
})();
-->
</script>

<!-- ▲▲▲MicroAd通常▲▲▲ -->

	
    
<!-- ▼▼▼imobile▼▼▼　-->
<!-- ▼▼▼imobile TOP▼▼▼　-->
<?php if(is_home()): ?>
<script type="text/javascript">
  imobile_adv_sid = "6157";
  imobile_adv_cq = "top=5";
  document.write(unescape("%3Cscript src='" + ((document.location.protocol == "http:") ? "http" : "https") + "://spcnv.i-mobile.co.jp/script/adv.js?20120316'" + "%20type='text/javascript'%3E%3C/script%3E"));
</script>
<?php else: ?>
<?php endif; ?>

<!-- ▼▼▼imobile 検索▼▼▼　-->
<?php if(is_category("72") || is_category("68") || is_category("47") || is_category("49") ): ?>
<script type="text/javascript">
  imobile_adv_sid = "6157";
  imobile_adv_cq = "top=8";
  document.write(unescape("%3Cscript src='" + ((document.location.protocol == "http:") ? "http" : "https") + "://spcnv.i-mobile.co.jp/script/adv.js?20120316'" + "%20type='text/javascript'%3E%3C/script%3E"));
</script>
<?php else: ?>
<?php endif; ?>

<!-- ▼▼▼imobile 診断▼▼▼　-->
<?php if(is_page("574") || is_page("68") || is_page("202") || is_page("206") || is_page("208") || is_page("210") || is_page("212") || is_page("214") || is_page("216") || is_page("218") || is_page("220") || is_category("1") ): ?>
<script type="text/javascript">
  imobile_adv_sid = "6157";
  imobile_adv_cq = "detail=7";
  document.write(unescape("%3Cscript src='" + ((document.location.protocol == "http:") ? "http" : "https") + "://spcnv.i-mobile.co.jp/script/adv.js?20120316'" + "%20type='text/javascript'%3E%3C/script%3E"));
</script>
<?php else: ?>
<?php endif; ?>

<!-- ▼▼▼imobile 詳細▼▼▼　-->
<?php if(is_single("21") || is_single("81") || is_single("1244") || is_single("34") || is_single("10") || is_single("37") || is_single("41") || is_single("54") ): ?>
<script type="text/javascript">
  imobile_adv_sid = "6157";
  imobile_adv_cq = "detail=8";
  document.write(unescape("%3Cscript src='" + ((document.location.protocol == "http:") ? "http" : "https") + "://spcnv.i-mobile.co.jp/script/adv.js?20120316'" + "%20type='text/javascript'%3E%3C/script%3E"));
</script>
<?php else: ?>
<?php endif; ?>

<!-- ▼▼▼imobile しつもん▼▼▼　-->
<?php if(
is_category("70") ||
is_single("655") ||
is_single("657") ||
is_single("659") ||
is_single("661") ||
is_single("663") ||
is_single("669") ||
is_single("671") ||
is_single("673") ||
is_single("675") ||
is_single("677") ||
is_single("679") ||
is_single("681") ||
is_single("683") ||
is_single("685") ||
is_single("688")
 ): ?>
<script type="text/javascript">
  imobile_adv_sid = "6157";
  imobile_adv_cq = "detail=6";
  document.write(unescape("%3Cscript src='" + ((document.location.protocol == "http:") ? "http" : "https") + "://spcnv.i-mobile.co.jp/script/adv.js?20120316'" + "%20type='text/javascript'%3E%3C/script%3E"));
</script>
<?php else: ?>
<?php endif; ?>

<!-- ▼▼▼imobile まんが▼▼▼　-->
<?php if(
is_category("71") ||
is_category("83") ||
is_category("85") ||
is_category("84") ||
is_category("87") ||
is_category("88") ||
is_category("89") ||
is_category("86") ||
is_category("82") 
 ): ?>
<script type="text/javascript">
  imobile_adv_sid = "6157";
  imobile_adv_cq = "detail=6";
  document.write(unescape("%3Cscript src='" + ((document.location.protocol == "http:") ? "http" : "https") + "://spcnv.i-mobile.co.jp/script/adv.js?20120316'" + "%20type='text/javascript'%3E%3C/script%3E"));
</script>
<?php else: ?>
<?php endif; ?>


<!-- ▼▼▼imobile 体験談▼▼▼　-->
<?php if(
is_category("74") ||
is_single("715") ||
is_single("717") ||
is_single("719") ||
is_single("721") ||
is_single("723") ||
is_single("725") ||
is_single("727") ||
is_single("729") ||
is_single("771") ||
is_single("774") ||
is_single("776") ||
is_single("778") ||
is_single("780")
 ): ?>
<script type="text/javascript">
  imobile_adv_sid = "6157";
  imobile_adv_cq = "detail=6";
  document.write(unescape("%3Cscript src='" + ((document.location.protocol == "http:") ? "http" : "https") + "://spcnv.i-mobile.co.jp/script/adv.js?20120316'" + "%20type='text/javascript'%3E%3C/script%3E"));
</script>
<?php else: ?>
<?php endif; ?>

<!-- ▼▼▼imobile 掲示板▼▼▼　-->
<?php if(
is_category("69") ||
is_single("635") ||
is_single("834") ||
is_single("838") ||
is_single("860") ||
is_single("864") ||
is_single("887") ||
is_single("890") ||
is_single("918") ||
is_single("1418") ||
is_single("1436") ||
is_single("1598") 
 ): ?>
<script type="text/javascript">
  imobile_adv_sid = "6157";
  imobile_adv_cq = "detail=6";
  document.write(unescape("%3Cscript src='" + ((document.location.protocol == "http:") ? "http" : "https") + "://spcnv.i-mobile.co.jp/script/adv.js?20120316'" + "%20type='text/javascript'%3E%3C/script%3E"));
</script>
<?php else: ?>
<?php endif; ?>

<!-- ▼▼▼imobile カテゴリ▼▼▼　-->
<?php if(
is_category("92") ||
is_category("52") ||
is_category("93") ||
is_category("90") ||
is_category("80") ||
is_category("90") ||
is_category("64") ||
is_category("102") ||
is_category("100") ||
is_category("97") ||
is_category("81") ||
is_category("103") ||
is_category("53") ||
is_category("59") ||
is_category("75") ||
is_category("48") ||
is_category("63") ||
is_category("51") ||
is_category("94") ||
is_category("57") ||
is_category("95") ||
is_category("60") ||
is_category("105") ||
is_category("98") ||
is_category("96") ||
is_category("56") ||
is_category("54") ||
is_category("61") ||
is_category("73") ||
is_category("55") ||
is_category("47") ||
is_category("77") ||
is_category("58") ||
is_category("101") ||
is_category("62") ||
is_category("106") ||
is_category("99") ||
is_category("104") ||
is_category("76") ||
is_category("49") ||
is_category("91")
 ): ?>
<script type="text/javascript">
  imobile_adv_sid = "6157";
  imobile_adv_cq = "detail=6";
  document.write(unescape("%3Cscript src='" + ((document.location.protocol == "http:") ? "http" : "https") + "://spcnv.i-mobile.co.jp/script/adv.js?20120316'" + "%20type='text/javascript'%3E%3C/script%3E"));
</script>
<?php else: ?>
<?php endif; ?>

<!-- ▲▲▲imobile▲▲▲　-->

<!-- ▼▼▼ロジカド▼▼▼　-->
<script type="text/javascript">var smnAdvertiserId = '00002252';</script><script type="text/javascript" src="//cd-ladsp-com.s3.amazonaws.com/script/pixel.js"></script>
<!-- ▲▲▲ロジカド▲▲▲　-->

<!-- ▼▼▼FO▼▼▼　-->
<script type="text/javascript">
  var _fout_queue = _fout_queue || {}; if (_fout_queue.segment === void 0) _fout_queue.segment = {};
  if (_fout_queue.segment.queue === void 0) _fout_queue.segment.queue = [];

  _fout_queue.segment.queue.push({
    'user_id': 6598
  });

  (function() {
    var el = document.createElement('script'); el.type = 'text/javascript'; el.async = true;
    el.src = (('https:' == document.location.protocol) ? 'https://' : 'http://') + 'js.fout.jp/segmentation.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(el, s);
  })();
</script>
<!-- ▲▲▲FO▲▲▲　-->

<!-- ▼▼▼GDN▼▼▼ -->
<!-- リマーケティング タグの Google コード -->
<!--------------------------------------------------
リマーケティング タグは、個人を特定できる情報と関連付けることも、デリケートなカテゴリに属するページに設置することも許可されません。タグの設定方法については、こちらのページをご覧ください。
http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 993374189;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/993374189/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- ▲▲▲GDN▲▲▲ -->

<!-- ▼▼▼Yahoo▼▼▼　-->
<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_retargeting_id = '4ZLCI64B4L';
var yahoo_retargeting_label = '';
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>
<!-- ▲▲▲Yahoo▲▲▲　-->


<!-- ▼▼▼YahooN▼▼▼　-->
<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_retargeting_id = 'YBLK92LQK3';
var yahoo_retargeting_label = '';
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>
<!-- ▲▲▲YahooN▲▲▲　-->


<!-- ▼▼▼YahooC▼▼▼　-->
<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_retargeting_id = 'R6XES3KKC8';
var yahoo_retargeting_label = '';
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>
<!-- ▲▲▲YahooC▲▲▲　-->


<!-- ▼▼▼Bypass▼▼▼　-->
<script src="//bypass.ad-stir.com/mk?p=129537"></script>
<!-- ▲▲▲Bypass▲▲▲　-->


<!-- ▼▼▼SS_BU▼▼▼　-->
<!-- Yahoo Code for your Target List -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_ss_retargeting_id = 1000020006;
var yahoo_sstag_custom_params = window.yahoo_sstag_params;
var yahoo_ss_retargeting = true;
/* ]]> */
</script>
<script type="text/javascript" src="//s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//b97.yahoo.co.jp/pagead/conversion/1000020006/?guid=ON&script=0&disvt=false"/>
</div>
</noscript>
<!-- ▲▲▲SS_BU▲▲▲　-->


<!-- ▼▼▼SS_NOW▼▼▼　-->
<!-- Yahoo Code for your Target List -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_ss_retargeting_id = 1000020237;
var yahoo_sstag_custom_params = window.yahoo_sstag_params;
var yahoo_ss_retargeting = true;
/* ]]> */
</script>
<script type="text/javascript" src="//s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//b97.yahoo.co.jp/pagead/conversion/1000020237/?guid=ON&script=0&disvt=false"/>
</div>
</noscript>
<!-- ▲▲▲SS_NOW▲▲▲　-->


<!-- ▼▼▼SS_CA▼▼▼　-->
<!-- Yahoo Code for your Target List -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_ss_retargeting_id = 1000020232;
var yahoo_sstag_custom_params = window.yahoo_sstag_params;
var yahoo_ss_retargeting = true;
/* ]]> */
</script>
<script type="text/javascript" src="//s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//b97.yahoo.co.jp/pagead/conversion/1000020232/?guid=ON&script=0&disvt=false"/>
</div>
</noscript>
<!-- ▲▲▲SS_CA▲▲▲　-->


</body>
</html>
