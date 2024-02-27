<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新しいパスワードを設定する</title>
</head>
<body>

<h2>新しいパスワードを設定する</h2>

<!-- メールアドレス入力フォーム -->
<form action="reset_password.php" method="post">
    <label for="email">登録されたメールアドレス:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">パスワードリセットリンクを送信</button>
</form>

</body>
</html>