<?php
// セッション開始
session_start();

// データベース接続
try {
    $pdo = new PDO('mysql:dbname=sotsu_map;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

// URLからidを取得
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id === 0) {
    echo "不正なIDです。";
    exit;
}

// データベースからidに一致する医療機関の情報を取得
$stmt = $pdo->prepare("SELECT * FROM sotsu_map WHERE id = :id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$result) {
    echo "情報が見つかりませんでした。";
    exit;
}

// HTML出力
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>求人情報詳細</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #fff;
            width: 80%;
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .info h2 {
            color: #fff;
            background-color: #003366; /* 紺色 */
            padding: 10px;
            margin: -20px -20px 20px -20px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        .info div {
            margin-bottom: 15px;
        }
        .info label {
            display: block;
            color: #003366; /* 紺色 */
            margin-bottom: 5px;
            font-weight: bold;
        }
        .info .text-area {
            display: block;
            background-color: #fff; /* 背景色を白に */
            padding: 10px;
            border: 2px solid #e9e9e9; /* 枠線を追加して浮き出た感じを演出 */
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* 影を追加 */
            overflow-y: auto; /* 内容が多い時にスクロールバーを表示 */
            white-space: pre-wrap; /* 改行を保持 */
            height: auto; /* 高さを自動で調整 */
        }
        .info #etc, .info #job {
            min-height: 140px; /* 特記事項と職務内容の最小高さを設定 */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="info">
            <h2>求人票</h2>
            <div><label for="name">医療機関名</label><span id="name" class="text-area"><?php echo htmlspecialchars($result['name'], ENT_QUOTES); ?></span></div>
            <div><label for="adress">住所</label><span id="adress" class="text-area"><?php echo htmlspecialchars($result['adress'], ENT_QUOTES); ?></span></div>
            <div><label for="tell">電話番号</label><span id="tell" class="text-area"><?php echo htmlspecialchars($result['tell'], ENT_QUOTES); ?></span></div>
            <div><label for="money">時給</label><span id="money" class="text-area"><?php echo htmlspecialchars($result['money'], ENT_QUOTES); ?></span></div>
            <div><label for="job">職種・職務内容</label><div id="job" class="text-area"><?php echo htmlspecialchars($result['job'], ENT_QUOTES); ?></div></div>
            <div><label for="time">時間・期間</label><span id="time" class="text-area"><?php echo htmlspecialchars($result['time'], ENT_QUOTES); ?></span></div>
            <div><label for="etc">特記事項</label><div id="etc" class="text-area"><?php echo htmlspecialchars($result['etc'], ENT_QUOTES); ?></div></div>
        </div>
    </div>
</body>
</html>
