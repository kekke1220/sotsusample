<?php

session_start();
require_once('funcs.php');
loginCheck();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="select.css">
    <title>Document</title>
</head>
<body>

<div class="context">

<div class="top-top">
<div id="top">medi-side</div>
<div id="sub">トップページ</div>
</div>

    <nav class="menu">
   <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
   <label class="menu-open-button" for="menu-open">
    <span class="lines line-1"></span>
    <span class="lines line-2"></span>
    <span class="lines line-3"></span>
  </label>

   <a href="mypage.php" class="menu-item blue"> <i class="fa fa-anchor"></i> マイページ</a>
   <a href="map.php" class="menu-item green"> <i class="fa fa-coffee"></i> マップ検索</a>
   <a href="occu.php" class="menu-item red"> <i class="fa fa-heart"></i> 職種検索</a>
   <a href="freeword.php" class="menu-item purple"> <i class="fa fa-microphone"></i> フリーワード検索</a>
   <a href="contactform.php" class="menu-item orange"> <i class="fa fa-star"></i> お問い合わせ</a>
   <a href="logout.php" class="menu-item lightblue"> <i class="fa fa-diamond"></i> ログアウト</a>
</nav>

<span id="view_today"></span>

</div>


<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >

<script type="text/javascript">
document.getElementById("view_today").innerHTML = getToday();

function getToday() {
	var now = new Date();
	var year = now.getFullYear();
	var mon = now.getMonth()+1; //１を足すこと
	var day = now.getDate();
	var you = now.getDay(); //曜日(0～6=日～土)

	//曜日の選択肢
	var youbi = new Array("日","月","火","水","木","金","土");
	//出力用
	var s = year + "年" + mon + "月" + day + "日 (" + youbi[you] + ")";
	return s;
}
</script>


</body>
</html>