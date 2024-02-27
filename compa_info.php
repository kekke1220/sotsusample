<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>医療機関登録</title>
    <link rel="stylesheet" href="index.css">
    
</head>

<body>

  <a href="select.php" class="btn btn-radius-gradient">登録済医療機関一覧</a>

</div>

    <form class="login" method="post" action="insert3.php">

        <input id="name" type="text" placeholder="医療機関名" name="name"><br>
        <input id="adress" type="text" placeholder="住所" name="adress"><br>
        <input id="lat" type="text" placeholder="緯度" name="lat"><br>
        <input id="lng" type="text" placeholder="経度" name="lng"><br>
        <input id="hp" type="text" placeholder="ホームページ" name="hp"><br>
        <input id="kyujin_file" type="file" placeholder="求人票" name="kyujin_file"><br>
        <input id="touroku" type="submit" value="登録">

    </form>

</body>


</html>