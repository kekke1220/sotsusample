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
    <link rel="stylesheet" href="info.css">
    <title>Document</title>
</head>
<body>

<div class="top-top">
<div id="top">medi-side</div>
<div id="sub">個人情報登録・変更</div>
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

   <a href="select.php" class="menu-item orange"> <i class="fa fa-star"></i> トップページ</a>
   <a href="mypage.php" class="menu-item lightblue"> <i class="fa fa-diamond"></i> マイページ</a>
   <a href="info_regi.php" class="menu-item blue"> <i class="fa fa-anchor"></i>登録</a>
   <a href="display.php" class="menu-item purple"> <i class="fa fa-microphone"></i>変更</a>
</nav>

    
</body>
</html>