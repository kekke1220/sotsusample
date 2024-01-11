<?php

//1. POSTデータ取得
$name   = $_POST['name'];
$email  = $_POST['email'];
$lid  = $_POST['lid'];
$lpw = $_POST['lpw'];

//2. DB接続します
require_once('funcs2.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO sotsusample(name,email,lid,lpw)VALUES(:name,:email,:lid,:lpw)');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    header('Location: sign_up_end.php');
  
}