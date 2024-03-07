<?php

session_start();
require_once('funcs.php');
loginCheck();


//1. POSTデータ取得
$id = $_GET['ID'];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM sotsu_map WHERE ID = :ID;');
$stmt->bindValue(':ID', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('info_henkou.php');
}
