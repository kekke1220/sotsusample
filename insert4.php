<?php

// 1. POSTデータ取得
$name = $_POST['name'];
$age = $_POST['age'];
$adress = $_POST['adress'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$occu = $_POST['occu'];
$etc = $_POST['etc'];

// データベースへの保存
try {
    $pdo = new PDO('mysql:dbname=ohbo_form;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("
INSERT INTO 
ohbo_form(name, age, adress, email, sex, occu, etc)
VALUES(:name, :age, :adress, :email, :sex, :occu, :etc);
");

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':adress', $adress, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':occu', $occu, PDO::PARAM_STR);
$stmt->bindValue(':etc', $etc, PDO::PARAM_STR);

$status = $stmt->execute();

if($status === false){
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
}else{
    header('Location: ohbo_kanryo.php');
}
?>
