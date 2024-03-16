<?php
require_once('funcs.php');
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
        $pdo = new PDO('mysql:host=mysql634.db.sakura.ne.jp;dbname=koukeishou_sotsusample;charset=utf8', 'koukeishou', 'koukeishou12');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // エラーモードを例外モードに設定
    } catch (PDOException $e) {
        exit('データベースに接続できませんでした。エラー: ' . $e->getMessage());
    }

    // データをデータベースに挿入する準備をする
    $stmt = $pdo->prepare("INSERT INTO sotsusample (name, email, lid, lpw) VALUES (:name, :email, :lid, :lpw)");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':lid', $lid, PDO::PARAM_STR);
    $stmt->bindParam(':lpw', pass_h($lpw), PDO::PARAM_STR);

    // データベースに挿入を実行し、成功したかどうかをチェックする
    try {
        $stmt->execute();
        $user_id = $pdo->lastInsertId();
        $user_url = "http://koukeishou.sakura.ne.jp/sotsusample/compa_mypage.php?id=" . $user_id; // マイページのURLを生成
        $stmt_update = $pdo->prepare("UPDATE sotsusample SET mypage_url = :user_url WHERE id = :user_id");
        $stmt_update->bindParam(':user_url', $user_url, PDO::PARAM_STR);
        $stmt_update->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt_update->execute();
        // 登録後にマイページにリダイレクトする
        header("Location: index.php");
        exit; // リダイレクトしたらスクリプトの実行を終了する
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
    <link rel="stylesheet" href="sign_up_end.css">
    <title>登録完了</title>
</head>
<body>
    
    <div class="txt1">ご登録が完了致しました。</div>
    <!-- ここにログインリンクを追加 -->
    <a href="index.php">ログイン</a>

</body>
</html>