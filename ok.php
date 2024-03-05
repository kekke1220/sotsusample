<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>登録完了ページ</title>
   <style>
    body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #f0f0f0;
    font-family: 'Arial', sans-serif;
}

.container {
    text-align: center;
}

.touroku {
    font-size: 24px;
    color: #002244;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 20px; /* 間隔を調整 */
}

.touroku2 {
    font-size: 18px;
    color: #555;
    margin-bottom: 20px; /* 間隔を調整 */
}

.cta_btn07, .cta_btn03 {
    text-decoration: none;
    color: #fff;
    background-color: #007bff; /* 明るいネイビー */
    padding: 15px 30px;
    border-radius: 5px;
    font-size: 16px;
    margin: 10px;
    transition: background-color 0.3s;
}

.cta_btn07:hover, .cta_btn03:hover {
    background-color: #0056b3; /* ホバー時は少し暗めのネイビー */
}

.cta_btn03 {
    background-color: #003366; /* より濃いネイビー */
}

.cta_btn03:hover {
    background-color: #002244; /* ホバー時はさらに暗め */
}

</style>

</head>

<body>


     <div class="touroku">登録完了</div><br>
     <div class="touroku2">下記の【MAP】より貴院が表示されるかご確認下さい。</div><br>

     <a href="map.php" class="cta_btn07">MAP</i></a>

     <a href="info_henkou.php" class="cta_btn03">
       登録済医療機関一覧
     </a>
     
    

</body>

</html>