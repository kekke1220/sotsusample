<?php
// 0. SESSION開始！！
session_start();
// 1. ログインチェック処理！
// 以下、セッションID持ってたら、ok
// 持ってなければ、閲覧できない処理にする。

// funcs.phpに記載したため削除
// if( !isset($_SESSION['chk_ssid']) ||  $_SESSION['chk_ssid'] !== session_id() ){
//     exit('LOGIN ERROR');
// } else{
//     // ログイン済処理
//     session_regenerate_id(true);
//     $_SESSION['chk_ssid'] = session_id();
// }

//１．関数群の読み込み
require_once('funcs.php');
loginCheck();

//２．データ登録SQL作成
// $pdo = db_conn();
$pdo = db_conn('ohbo_form');
$stmt = $pdo->prepare('SELECT * FROM ohbo_form');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status == false) {
    sql_error($stmt);
} else {
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';
        $view .= '<a href="detail2.php?id=' . $r["id"] . '" class="btn-style">' . h($r['name']) . " " . h($r['adress']) . '</a>';
        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>応募一覧</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f2f2f2; /* ライトグレーの背景色 */
        color: #333; /* 標準テキスト色 */
    }
    div {
        padding: 10px;
        font-size: 16px;
    }
    .navbar-default {
        background-color: #001f3f; /* ネイビーベースのナビゲーションバー */
        border-color: #001f3f;
    }
    .navbar-default .navbar-brand, .navbar-default .navbar-nav>li>a {
        color: #ffffff; /* ナビゲーションバーのテキスト色を白に */
    }
    /* カスタムボタンスタイル */
    .btn-style {
        background-color: #add8e6; /* 薄いブルー */
        border: 1px solid #90c8f8;
        color: #333; /* テキスト色 */
        padding: 10px 20px;
        text-decoration: none; /* 下線を取り除く */
        border-radius: 5px; /* 角を丸く */
        display: inline-block; /* インラインブロック要素として表示 */
        margin: 5px; /* マージンで少し間隔を空ける */
    }
    .btn-style:hover {
        background-color: #90c8f8; /* ホバー時の色を少し濃く */
        color: #ffffff; /* ホバー時のテキスト色を白に */
    }
    .jumbotron {
        background-color: #ffffff; /* ジャンボトロンの背景色を白に */
        color: #333;
    }
    .data-view {
        border: 2px solid #add8e6; /* 枠線を薄いブルーに */
        padding: 20px;
        border-radius: 10px; /* 角を丸く */
        margin-top: 20px; /* 上マージンで間隔を空ける */
        background-color: #f9f9f9; /* 背景色を非常に薄いグレーに */
    }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="compa_mypage.php" class="btn-style">トップページ</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron"><?= $view ?>
            <!-- compa_mypage.phpへのジャンプボタンを追加 -->
        </div>
    </div>
    <!-- Main[End] -->

</body>

</html> 