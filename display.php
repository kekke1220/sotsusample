<?php
session_start();
require_once('funcs3.php');
loginCheck();

//２．データ登録SQL作成
$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM sotsusample_mypage');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status == false) {
    sql_error($stmt);
} else {
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';
        $view .= '<a href="detail.php?id=' . $r["id"] . '"class="btn-current-info">';
        $view .= " 現在の登録情報 " ;
        $view .= '</a>';
        $view .= "</p>";

    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="display.css">
    <title>個人情報登録</title>
    <!-- <link rel="stylesheet" href="css/login.css" /> -->

</head>

<body id="main">
    <!-- Head[Start] -->
  
        
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand btn-top-mypage1" href="select.php">トップ</a></div>
                <div class="navbar-header"><a class="navbar-brand btn-top-mypage2" href="mypage.php">マイページトップ</a></div>
            </div>

    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron"><?= $view ?></div>
    </div>
    <!-- Main[End] -->

</body>

</html>