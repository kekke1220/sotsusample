<?php

// 1. POSTデータ取得
$name = $_POST['name'];
$age = $_POST['age'];
$adress = $_POST['adress'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$occu = $_POST['occu'];
$etc = $_POST['etc'];
$hospital_id = $_POST['hospital_id'];

// データベースへの保存
try {
    $pdo = new PDO('mysql:host=mysql634.db.sakura.ne.jp;dbname=koukeishou_sotsusample;charset=utf8', 'koukeishou', 'koukeishou12');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("INSERT INTO ohbo_form (name, age, adress, email, sex, occu, etc, hospital_id) VALUES (:name, :age, :adress, :email, :sex, :occu, :etc, :hospital_id)");

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':adress', $adress, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':occu', $occu, PDO::PARAM_STR);
$stmt->bindValue(':etc', $etc, PDO::PARAM_STR);
$stmt->bindValue(':hospital_id', $hospital_id, PDO::PARAM_INT);

$status = $stmt->execute();

if($status === false){
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
}else{
    header('Location: ohbo_kanryo.php');
}
?>