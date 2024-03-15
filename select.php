<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="select.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->
    <title>ホーム</title>
</head>

<body>

<div class="context">

<div class="top-top">
  <div id="top">Mot-el</div>
  <div id="sub">ホーム</div>
</div>

  <nav class="menu">

    <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />

    <label class="menu-open-button" for="menu-open">
      <span class="lines line-1"></span>
      <span class="lines line-2"></span>
      <span class="lines line-3"></span>
    </label>

    <a href="medi_side.php" class="menu-item green"> <i class="fa fa-coffee"></i>Mot-elとは</a> 
    <a href="#" class="menu-item orange"> <i class="fa fa-star"></i></a>
    <a href="map.php" class="menu-item green"> <i class="fa fa-coffee"></i> マップ検索</a>
    <a href="#" class="menu-item orange"> <i class="fa fa-star"></i></a>
    <a href="contactform.php" class="menu-item orange"> <i class="fa fa-star"></i> お問い合わせ</a>
    <a href="#" class="menu-item orange"> <i class="fa fa-star"></i></a>

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