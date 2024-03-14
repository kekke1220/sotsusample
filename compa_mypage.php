<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compa_mypage.css">
    <title>企業様専用ページ</title>
</head>
<body>

<div class="context">

<div class="top-top">
  <div id="top">Mot-el</div>
  <div id="sub">企業様専用ページ</div>
</div>

<a href="logout.php" class="logout-btn">ログアウト</a>

  <nav class="menu">
    <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />

    <label class="menu-open-button" for="menu-open">
      <span class="lines line-1"></span>
      <span class="lines line-2"></span>
      <span class="lines line-3"></span>
    </label>

    <a href="compa_info.php" class="menu-item lightblue"> <i class="fa fa-diamond"></i>マップ登録</a>
    <a href="#" class="menu-item lightblue"> <i class="fa fa-diamond"></i></a>
    <a href="info_henkou.php" class="menu-item green"> <i class="fa fa-coffee"></i>登録内容変更</a>
    <a href="#" class="menu-item orange"> <i class="fa fa-star"></i></a>
    <a href="ohbo_ichiran.php" class="menu-item lightblue"> <i class="fa fa-diamond"></i>応募管理</a>
    <a href="#" class="menu-item lightblue"> <i class="fa fa-diamond"></i></a>

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