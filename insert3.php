<?php

// 1. POSTデータ取得
$name = $_POST['name'];
$adress = $_POST['adress'];
$hp = $_POST['hp'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

// アップロード先ディレクトリ
$uploadDir = '/var/www/html/htdocs/uploads/';

// アップロードされたファイルのパス
$uploadedFilePath = $uploadDir . basename($_FILES['kyujin_file']['name']);

// ファイルをアップロード
if (move_uploaded_file($_FILES['kyujin_file']['tmp_name'], $uploadedFilePath)) {
    echo "ファイルがアップロードされました。\n";
} else {
    echo "ファイルのアップロードに失敗しました。\n";
}

// データベースへの保存
try {
    $pdo = new PDO('mysql:dbname=sotsu_map;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("
INSERT INTO 
sotsu_map(name, adress, hp, kyujin_file, lat, lng)
VALUES(:name, :adress, :hp, :kyujin_file, :lat, :lng);
");

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':adress', $adress, PDO::PARAM_STR);
$stmt->bindValue(':hp', $hp, PDO::PARAM_STR);
$stmt->bindValue(':kyujin_file', $uploadedFilePath, PDO::PARAM_STR); // アップロードされたファイルのパスを保存
$stmt->bindValue(':lat', $lat, PDO::PARAM_STR);
$stmt->bindValue(':lng', $lng, PDO::PARAM_STR);

$status = $stmt->execute();

if($status === false){
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
}else{
    header('Location: ok.php');
}
?>