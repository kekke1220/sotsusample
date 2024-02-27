<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを受け取る
    $name = $_POST['name'];
    $email = $_POST['email'];
    $lid = $_POST['lid'];
    $lpw = $_POST['lpw'];

    // データベースに接続
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=sotsusample;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // エラーモードを例外モードに設定
    } catch (PDOException $e) {
        exit('データベースに接続できませんでした。エラー: ' . $e->getMessage());
    }

    // データをデータベースに挿入する準備をする
    $stmt = $pdo->prepare("INSERT INTO sotsusample (name, email, lid, lpw) VALUES (:name, :email, :lid, :lpw)");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':lid', $lid, PDO::PARAM_STR);
    $stmt->bindParam(':lpw', $lpw, PDO::PARAM_STR);

    // データベースに挿入を実行し、成功したかどうかをチェックする
    try {
        $stmt->execute();
        $user_id = $pdo->lastInsertId();
        $user_url = "http://example.com/user_profile.php?id=" . $user_id;
        $stmt_update = $pdo->prepare("UPDATE sotsusample SET mypage_url = :user_url WHERE id = :user_id");
        $stmt_update->bindParam(':user_url', $user_url, PDO::PARAM_STR);
        $stmt_update->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt_update->execute();
        echo "ユーザーのプロフィールページのURL: " . $user_url;
    } catch (PDOException $e) {
        exit('データベースへの挿入に失敗しました。エラー: ' . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compa-regi.css">
    <title>Document</title>
</head>
<body>

<div class="form-wrapper">

  <h1>雇用主様専用 新規登録</h1>

  <form name="form1" action="sign_up_end.php" method="post">

    <div class="form-item">
      <label for="name"></label>
      <input type="text" name="name" required="required" placeholder="企業名"></input>
    </div>

    <div class="form-item">
      <label for="email"></label>
      <input type="email" name="email" required="required" placeholder="メールアドレス"></input>
    </div>

    <div class="form-item">
      <label for="lid"></label>
      <input type="text" name="lid" required="required" placeholder="ID"></input>
    </div>

    <div class="form-item">
      <label for="lpw"></label>
      <input type="text" name="lpw" required="required" placeholder="Password"></input>
    </div>

    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="登録"></input>
    </div>

  </form>
  
</div>

</body>
</html>