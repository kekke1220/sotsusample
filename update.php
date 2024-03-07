<?php
//1. POSTデータ取得
$name   = $_POST['name'];
$adress  = $_POST['adress'];
$lat = $_POST['lat'];
$lng    = $_POST['lng'];
$hp    = $_POST['hp'];
$tell    = $_POST['tell'];
$money    = $_POST['money'];
$job    = $_POST['job'];
$time    = $_POST['time'];
$etc    = $_POST['etc'];
$id     = $_POST['ID'];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE sotsu_map SET name=:name,adress=:adress,lat=:lat,lng=:lng,hp=:hp,tell=:tell,money=:money,job=:job,time=:time,etc=:etc WHERE ID=:ID;');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':adress',  $adress,  PDO::PARAM_STR);
$stmt->bindValue(':lat',  $lat, PDO::PARAM_STR);
$stmt->bindValue(':lng', $lng, PDO::PARAM_STR);
$stmt->bindValue(':hp', $hp, PDO::PARAM_STR);
$stmt->bindValue(':tell', $tell, PDO::PARAM_STR);
$stmt->bindValue(':money', $money, PDO::PARAM_STR);
$stmt->bindValue(':job', $job, PDO::PARAM_STR);
$stmt->bindValue(':time', $time, PDO::PARAM_STR);
$stmt->bindValue(':etc', $etc, PDO::PARAM_STR);
$stmt->bindValue(':ID', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('info_henkou.php');
}

