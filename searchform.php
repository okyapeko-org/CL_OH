<form name="chbox" action="<?php echo home_url( '/' ); ?>" method="get">



<table border="0" cellpadding="2" cellspacing="1" >
<tr>
<th>金融機関</th>
<td>
<select name='cat' id='cat' class='postform' >
<option value='68' selected='selected'>ご希望の金融機関がございましたら選択して下さい</option>
<!--<option class="level-0" value="48">信販系</option>-->
<option class="level-0" value="47">消費者金融</option>
<option class="level-0" value="49">銀行カードローン</option>
</select>
</td>
</tr>
<tr>
<th>特徴で探す</th>
<td>
<ul>
<li><label for="a01"><input type="checkbox" value="otamesisinsa" id="a01">お試し審査</label></li>
<!--<li><label for="a02"><input type="checkbox" value="ladies" id="a02">レディースローン</label></li>-->

<li><label for="a03"><input type="checkbox" value="teikinri" id="a03">低金利</label></li>
<li><label for="a04"><input type="checkbox" value="raitenhuyou" id="a04">来店不要</label></li>
<li><label for="a05"><input type="checkbox" value="murisoku" id="a05">無利息期間</label></li>
<li><label for="a06"><input type="checkbox" value="hajimete" id="a06">初めて</label></li>
<li><label for="a07"><input type="checkbox" value="tasya" id="a07">他社借入がある</label></li>
<li><input type="checkbox" value="sokujitusinsa">即日審査</li>
<li><label for="a08"><input type="checkbox" value="sokujituyuusi" id="a08">即日融資</label></li>
<li><label for="a09"><input type="checkbox" value="donitisyuku" id="a09">土日祝</label></li>
<li><label for="a10"><input type="checkbox" value="souryoukiseigai" id="a10">総量規制対象外</label></li>
<li><label for="a11"><input type="checkbox" value="omatome" id="a11">借換・おまとめ</label></li>
<li><label for="a34"><input type="checkbox" value="naisyo" id="a34">会社・家族に内緒</label></li>
</ul>

</td>
</tr>
<tr>
<th>職業で探す</th>
<td>
<ul>
<li><label for="a12"><input type="checkbox" value="kaisyain" id="a12">会社員</label></li>
<li><label for="a13"><input type="checkbox" value="koumuin" id="a13">公務員</label></li>
<li><label for="a14"><input type="checkbox" value="sengyousyufu" id="a14">主婦</label></li>
<li><label for="a15"><input type="checkbox" value="jieigyou" id="a15">自営業・法人</label></li>

<li><label for="a16"><input type="checkbox" value="part" id="a16">パート・アルバイト</label></li>
<li><label for="a17"><input type="checkbox" value="gakusei" id="a17">学生</label></li>
</ul>
</td>
</tr>
<tr>
<th	>目的で探す</th>
<td>
<ul>
<li><label for="a18"><input type="checkbox" value="shopping" id="a18">ショッピング</label></li>
<li><label for="a19"><input type="checkbox" value="seikatuhi" id="a19">生活費</label></li>
<li><label for="a20"><input type="checkbox" value="business" id="a20">ビジネス・事業資金</label></li>
<li><label for="a21"><input type="checkbox" value="bridal" id="a21">ブライダル・結婚</label></li>

<li><label for="a22"><input type="checkbox" value="ryokou" id="a22">旅行・レジャー</label></li>


<li><label for="a23"><input type="checkbox" value="gakuhi" id="a23">学費・教育</label></li>
<li><label for="a24"><input type="checkbox" value="sousiki" id="a24">葬儀・葬式</label></li>
<!--<li><label for="a25"><input type="checkbox" value="jyuutaku" id="a25">住宅ローン<br></label></li>

<li><input type="checkbox" value="car">自動車・バイク</li>
-->
<li><label for="a27"><input type="checkbox" value="hikkosi" id="a27">引越し・リフォーム</label></li>
</ul>
</td>
</tr>
<tr>
<th>利用可能なコンビニ</th>
<td>
<ul>
<li><label for="a28"><input type="checkbox" value="familymart" id="a28">ファミリーマート</label></li>
<li><label for="a29"><input type="checkbox" value="circleksunkus" id="a29">サークルKサンクス</label></li>
<li><label for="a30"><input type="checkbox" value="ministop" id="a30">ミニストップ</label></li>
<li><label for="a32"><input type="checkbox" value="seveneleven" id="a32">セブンイレブン</label></li>
<li><label for="a33"><input type="checkbox" value="loason" id="a33">ローソン</label></li>
</ul>
</td>
</tr>

<tr>
<td colspan="2">
<p class="center"><input type="submit" id="test_aaa" name="tag" onclick="BoxCheck()"></p>
</td>
</tr>

</table>

</form>

<script type="text/javascript">
<!--

function BoxCheck(){

  //チェックされた項目を記録する変数
  var str="";

  //for文でチェックボックスを１つずつ確認
  for( i=0; i<29; i++ )
  {
    //チェックされているか確認する
    if( document.chbox.elements[i].checked )
    {
      //変数strが空でない時、区切りのコンマを入れる
      if( str != "" ) str=str+"+";

      //チェックボックスのvalue値を変数strに入れる
      str=str+document.chbox.elements[i].value;
    }
  }

  document.getElementById('test_aaa').value=str;

}

// -->
</script>
