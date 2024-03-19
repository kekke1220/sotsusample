<?php
// セッション開始
session_start();

// 1. POSTデータ取得
$name = $_POST['name'];
$adress = $_POST['adress'];
$hp = $_POST['hp'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$tell = $_POST['tell'];
$money = $_POST['money'];
$job = $_POST['job'];
$time = $_POST['time'];
$etc = $_POST['etc'];
$account_id = $_SESSION['account_id']; // 現在ログインしているユーザーのアカウントID

// データベースへの保存
try {
    $pdo = new PDO('mysql:host=mysql634.db.sakura.ne.jp;dbname=koukeishou_sotsusample;charset=utf8', 'koukeishou', 'koukeishou12');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("
INSERT INTO 
sotsu_map(name, adress, hp, lat, lng, tell, money, job, time, etc, account_id)
VALUES(:name, :adress, :hp, :lat, :lng, :tell, :money, :job, :time, :etc, :account_id);
");

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':adress', $adress, PDO::PARAM_STR);
$stmt->bindValue(':hp', $hp, PDO::PARAM_STR);
$stmt->bindValue(':lat', $lat, PDO::PARAM_STR);
$stmt->bindValue(':lng', $lng, PDO::PARAM_STR);
$stmt->bindValue(':tell', $tell, PDO::PARAM_STR);
$stmt->bindValue(':money', $money, PDO::PARAM_STR);
$stmt->bindValue(':job', $job, PDO::PARAM_STR);
$stmt->bindValue(':time', $time, PDO::PARAM_STR);
$stmt->bindValue(':etc', $etc, PDO::PARAM_STR);
$stmt->bindValue(':account_id', $account_id, PDO::PARAM_INT); // アカウントIDをバインド

$status = $stmt->execute();

if($status === false){
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
}else{
    header('Location: ok.php');
}
?>
