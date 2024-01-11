<?php

session_start();
require_once('funcs3.php');
loginCheck();

//1. POSTデータ取得
$name   = $_POST['name'];
$email  = $_POST['email'];
$adress = $_POST['adress'];
$age    = $_POST['age'];
$job    = $_POST['job'];
$id     = $_POST['id'];





$existing_image = $_POST['existing_image']; // 既存の画像パスを取得

// 新しい画像がアップロードされたかどうかをチェック
if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    // アップロードされたファイルをサーバーに保存
    $uploadedFileName = $_FILES['image']['name'];
    $uploadPath = 'path/to/upload/directory/' . $uploadedFileName;
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath);

    // 新しい画像のパスを変数にセット
    $image = $uploadPath;
} else {
    // 新しい画像がアップロードされていない場合は、既存の画像パスを使用
    $image = $existing_image;
}



//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE sotsusample_mypage SET name=:name, email=:email, adress=:adress, age=:age, job=:job, image=:image WHERE id=:id;');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':adress', $adress, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':job', $job, PDO::PARAM_STR);
$stmt->bindValue(':image', $image, PDO::PARAM_STR);

$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('mypage.php');
}