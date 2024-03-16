<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>応募完了</title>
    <style>
        body, html {
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f4f4f8; /* 背景色 */
    font-family: Arial, sans-serif; /* フォントファミリー */
}

.container {
    text-align: center;
    background-color: white;
    padding: 40px 60px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

h1 {
    color: navy; /* タイトルの色 */
    margin-bottom: 20px;
}

p {
    color: #333; /* テキストの色 */
    margin-bottom: 30px;
}

.button {
    display: inline-block;
    background-color: navy; /* ボタンの背景色 */
    color: white; /* ボタンのテキスト色 */
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #555; /* ホバー時の背景色 */
}

    </style>
</head>
<body>

<div class="container">
    <h1>応募完了</h1>
    <p>応募先からのメールをお待ちください。</p>
    <a href="select.php" class="button">ホームに戻る</a>
</div>

</body>
</html>
