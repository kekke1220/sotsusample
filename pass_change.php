<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新しいパスワードを設定する</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans JP', sans-serif;
            background-color: #f4f4f8;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 100%;
            max-width: 400px;
        }
        h2 {
            color: #004175; /* ネイビー */
            text-align: center;
            margin-right: 30px; /* タイトルとフォームの間隔 */
        }
        label {
            color: #555;
        }
        input[type="email"] {
            padding: 10px;
            border: 2px solid #004175; /* ネイビー */
            border-radius: 5px;
            width: calc(100% - 24px);
        }
        button {
            background-color: #004175; /* ネイビー */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #002d50; /* 濃いネイビー */
        }
    </style>
</head>
<body>

<h2>新しいパスワードを設定</h2>

<!-- メールアドレス入力フォーム -->
<form action="reset_password.php" method="post">
    <label for="email">登録されたメールアドレス:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">パスワードリセットリンクを送信</button>
</form>

</body>
</html>
