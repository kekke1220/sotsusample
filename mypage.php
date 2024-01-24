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
    <link rel="stylesheet" href="mypage.css">
    <title>Document</title>
</head>
<body>

<div class="top-top">
<div id="top">medi-side</div>
<div id="sub">マイページ</div>
</div>

<!-- <nav>
<ul>
<li class=”current”><a href=select.php>Home</a></li>
<li><a href=”#”>お気に入り求人</a></li>
<li><a href=”#”>応募一覧</a></li>
<li><a href=”#”>マッチング歴</a></li>
<li><a href=”#”>個人情報変更</a></li>
<li><a href=contactform.php>お問い合わせ</a></li>
</ul>
</nav> -->

<nav class="menu">
   <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
   <label class="menu-open-button" for="menu-open">
    <span class="lines line-1"></span>
    <span class="lines line-2"></span>
    <span class="lines line-3"></span>
  </label>

   <a href="select.php" class="menu-item blue"> <i class="fa fa-anchor"></i>トップページ</a>
   <a href="favorite.php" class="menu-item green"> <i class="fa fa-coffee"></i> お気に入り求人</a>
   <a href="apply.php" class="menu-item red"> <i class="fa fa-heart"></i> 応募一覧</a>
   <a href="match.php" class="menu-item purple"> <i class="fa fa-microphone"></i>マッチング歴</a>
   <a href="info.php" class="menu-item orange"> <i class="fa fa-star"></i> 情報登録・変更</a>
   <a href="contactform.php" class="menu-item lightblue"> <i class="fa fa-diamond"></i> お問い合わせ</a>
</nav>

<span id="view_today"></span>

<script type="text/javascript">
document.getElementById("view_today").innerHTML = getToday();

function getToday() {
	var now = new Date();
	var year = now.getFullYear();
	var mon = now.getMonth()+1; //１足す
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