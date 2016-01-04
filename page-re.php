<?php
/*
Template Name: page-re
*/
; ?>

<?php
 session_start();
//URLパラメータの有無のチェック用に値を一時保持
if ($_SERVER['QUERY_STRING'] != null){
$_SESSION["temp_pram"] = $_SERVER['QUERY_STRING'];

//vcptnの値のみをセッション保持
$_SESSION["temp_pram"] = $_SERVER['QUERY_STRING'];
if(isset($_GET[''])) {
$_SESSION["vcptnVal"] = $_GET['vcptn'];
}

//パラメータのキーワード
$Check_id= "vcptn";

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
};
}
else $_SESSION['pram'] = "vcptn=OH-NUL"
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="robots" content="noindex">
<title><?php the_title();?></title>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/import.css" type="text/css" media="all" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />

<?php
 /** 前方一致
 * $haystackが$needleから始まるか判定します。
 * @param string $haystack
 * @param string $needle
 * @return boolean
 */
function startsWith($haystack, $needle){
    return strpos($haystack, $needle, 0) === 0;
}
/**
 * 部分一致
 * $haystackの中に$needleが含まれているか判定します。
 * @param string $haystack
 * @param string $needle
 * @return boolean
 */
function matchesIn($haystack, $needle){
    return strpos($haystack, $needle) !== FALSE;
}
?>
<meta http-equiv="Refresh" content="3;<?php
if ($_SESSION["pram"]  ==  matchesIn($_SESSION["pram"] , "OH-GAD")) {
  echo post_custom('リファラー_URL-GAD');//前方一致した場合の表示
 }
elseif ($_SESSION["pram"]  ==  matchesIn($_SESSION["pram"] , "OH-LOG")) {
  echo post_custom('リファラー_URL-LOG');//前方一致した場合の表示
 }
elseif ($_SESSION["pram"]  == matchesIn($_SESSION["pram"] , "OH-FOU")) {
  echo post_custom('リファラー_URL-FOU');//前方一致した場合の表示
 }
elseif ($_SESSION["pram"]  == matchesIn($_SESSION["pram"] , "OH-GDN")) {
  echo post_custom('リファラー_URL-GDN');//前方一致した場合の表示
 }
elseif ($_SESSION["pram"]  == matchesIn($_SESSION["pram"] , "OH-APD")) {
  echo post_custom('リファラー_URL-APD');//前方一致した場合の表示
 }
elseif ($_SESSION["pram"] == "vcptn=OH-NUL") {
     echo  post_custom('リファラー_URL-NUL');//空の場合
 } 
else{
  echo post_custom('リファラー_URL-MIS');//なにもない場合
}
?>&<?php echo $_SESSION["pram"];?>">
</head>

<body>



<div id="main-w-re">
<div id="main-w-re-in">
<div id="main-w-re-logo"><p><img src="<?php bloginfo('template_url'); ?>/img/194-40.jpg" /></p></div>
<p id="main-w-re-loading"><img src="<?php bloginfo('template_url'); ?>/img/gif-load.gif"></p><!-- #main-w-re-loading -->

<div id="main-w-re-title">
<h2><?php the_title(); ?>。今しばらくお待ちください</h2>
</div>
<!-- #main-w-re-title -->
<div id="main-w-re-link">
<p>ページが移動しない場合は、<a href="<?php
if ($_SESSION["pram"]  ==  matchesIn($_SESSION["pram"] , "OH-GAD")) {
  echo post_custom('リファラー_URL-GAD');//前方一致した場合の表示
 }
elseif ($_SESSION["pram"]  ==  matchesIn($_SESSION["pram"] , "OH-LOG")) {
  echo post_custom('リファラー_URL-LOG');//前方一致した場合の表示
 }
elseif ($_SESSION["pram"]  == matchesIn($_SESSION["pram"] , "OH-FOU")) {
  echo post_custom('リファラー_URL-FOU');//前方一致した場合の表示
 }
elseif ($_SESSION["pram"]  == matchesIn($_SESSION["pram"] , "OH-GDN")) {
  echo post_custom('リファラー_URL-GDN');//前方一致した場合の表示
 }
elseif ($_SESSION["pram"]  == matchesIn($_SESSION["pram"] , "OH-APD")) {
  echo post_custom('リファラー_URL-APD');//前方一致した場合の表示
 }
elseif ($_SESSION["pram"] == "vcptn=OH-NUL") {
     echo  post_custom('リファラー_URL-NUL');//空の場合
 } 
else{
  echo post_custom('リファラー_URL-MIS');//なにもない場合
}
?>&<?php echo $_SESSION["pram"] ;?>">こちら</a>をクリックして移動してください。</p>
</div>
<!-- #main-w-re-link -->

<div id="main-w-re-time">
<script type="text/javascript"><!--
function myFunc(){
   myD   = new Date();                              // 現在時刻 取得
   myYear = myD.getFullYear(); // 今年の '年'
   myNextYear = new Date( myYear , 0 , 1 ,<?php echo post_custom('カウントダウン_時'); ?>,0);     // 来年の１月１日の経過秒を取得
   myMsec = myNextYear.getTime() - myD.getTime(); // 来年1月1日 と現在の差(ミリ秒)
   myNextDay  = Math.floor ( myMsec / (1000*60*60*24) ); // '日' を計算
   myMsec     -= ( myNextDay * (1000*60*60*24) );       // 経過秒から '日' を引く
   myNextHour = Math.floor ( myMsec / (1000*60*60) );    //  '時' を計算
   myMsec     -= ( myNextHour * (1000*60*60) );         // 経過秒から '時' を引く
   myNextMin  = Math.floor ( myMsec / (1000*60) );       //  '分'  を計算
   myMsec     -= ( myNextMin * (1000*60) );             // 経過秒から '分' を引く
   myNextSec  = Math.floor ( myMsec / 1000 );            //  '秒' を計算
   myDisp = "";                                     // 文字クリア
   if ( myNextDay  > 0 ) myDisp += myNextDay + "日と ";   // 0日なら表示しない
   if ( myNextHour != 0 ) myDisp += myNextHour + "時間 ";  // 0時間なら表示しない
   if ( myNextMin  != 0 ) myDisp += myNextMin + "分 ";     // 0分なら表示しない
   myDisp += myNextSec + "秒";                          // 秒セット
  document.getElementById("countdown").innerHTML = myDisp;
}
// --></script>
<h3>今日中に借りるなら、<br />
<span ID="countdown" class="text-red">カウントダウン</span> <br />
以内にお申込みを！</h3>
<script type="text/javascript"><!--
setInterval( "myFunc()", 1000 );
// --></script>
</div><!-- main-w-re-time -->
</div><!-- #mian-w-re-in -->
</div><!-- #mian-w-re -->





<!-- ▼▼▼FO CV▼▼▼　-->
<script type="text/javascript">
  var _fout_queue = _fout_queue || {}; if (_fout_queue.conv === void 0) _fout_queue.conv = {};
  if (_fout_queue.conv.queue === void 0) _fout_queue.conv.queue = [];

  _fout_queue.conv.queue.push({
    'user_id': 6598,
    'convtype': 0,
    'price': 0,
    'dat': ''
  });

  (function() {
    var el = document.createElement('script'); el.type = 'text/javascript'; el.async = true;
    el.src = (('https:' == document.location.protocol) ? 'https://' : 'http://') + 'js.fout.jp/conversion.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(el, s);
  })();
</script>
<!-- ▲▲▲FO CV▲▲▲　-->


<!-- ▼▼▼ロジカド　コンバージョンタグ▼▼▼　-->
<script type="text/javascript">var smnAdvertiserId = '00002252';</script><script type="text/javascript" src="//cd-ladsp-com.s3.amazonaws.com/script/conv.js"></script>
<!-- ▲▲▲ロジカド　コンバージョンタグ▲▲▲　-->

<!--　▼　Google Analytics　▼ -->

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

<!--　▲　Google Analytics　▲ -->


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



<!-- ▼▼▼ロジカド▼▼▼　-->
<script type="text/javascript">var smnAdvertiserId = '00002252';</script><script type="text/javascript" src="//cd-ladsp-com.s3.amazonaws.com/script/pixel.js"></script>
<!-- ▲▲▲ロジカド▲▲▲　-->

<!-- ▼▼▼FO RE▼▼▼　-->
<script type=""text/javascript"">
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
<!-- ▲▲▲FO RE▲▲▲　-->




<!-- ▼▼▼Yahoo▼▼▼　-->
<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_retargeting_id = '4ZLCI64B4L';
var yahoo_retargeting_label = '';
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>
<!-- ▲▲▲Yahoo▲▲▲　-->

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


<!--　▼　Google Adwords コンバージョンタグ　▼ -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 993374189;
var google_conversion_language = "en";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "yqiACIPK1QMQ7d_W2QM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/993374189/?value=0&amp;label=yqiACIPK1QMQ7d_W2QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!--　▲　Google Adwords コンバージョンタグ　▲ -->

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


<!-- ▼▼▼Bypass_GAD▼▼▼　-->
<script src="//bypass.ad-stir.com/mk?p=129540"></script>
<!-- ▲▲▲Bypass_GAD▲▲▲　-->


<!-- ▼▼▼Bypass_AllRef▼▼▼　-->
<script src="//bypass.ad-stir.com/mk?p=129875"></script>
<!-- ▲▲▲Bypass_AllRef▲▲▲　-->


</body>
</html>
