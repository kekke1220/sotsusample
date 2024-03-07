<?php
session_start();
require_once('funcs.php');
loginCheck();


$id = $_GET['ID']; //?id~**を受け取る
require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM sotsu_map WHERE ID=:ID;');
$stmt->bindValue(':ID', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if ($status == false) {
    sql_error($stmt);
} else {
    $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ更新</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    height: 150vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

        
        .form-wrapper {
            width: 450px;
            padding: 40px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: slideDown 1.5s ease-out;
        }
        
        h1 {
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            font-size: 16px;
            display: block;
            margin-bottom: 8px;
        }
        
        .form-group input[type="text"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            width: calc(100% - 20px); /* 入力フィールドの幅を調整 */
        }
        
        .action-btns input[type="submit"] {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            background-color: navy;
            color: white;
            cursor: pointer;
            width: 100%; /* ボタンの幅を調整 */
            font-size: 15px;
        }
        
        .action-btns input[type="submit"]:hover {
            background-color: #555;
        }
        
         /* @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-200px);
            }
            to {
                opacity: 1;
                transform: translateY(-50px);
            } 
        } */
    </style>
</head>

<body>
    <div class="form-wrapper">
        <form method="POST" action="update.php">
            <h1>データ更新</h1>
            <div class="form-group">
                <label for="name">医療機関名</label>
                <input type="text" id="name" name="name" value="<?= $row['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="adress">住所</label>
                <input type="text" id="adress" name="adress" value="<?= $row['adress'] ?>" required>
            </div>

            <div class="form-group">
                <label for="lat">緯度</label>
                <input type="text" id="lat" name="lat" value="<?= $row['lat'] ?>" required>
            </div>

            <div class="form-group">
                <label for="lng">経度</label>
                <input type="text" id="lng" name="lng" value="<?= $row['lng'] ?>" required>
            </div>

            <div class="form-group">
                <label for="hp">ホームページ</label>
                <input type="text" id="hp" name="hp" value="<?= $row['hp'] ?>" required>
            </div>
            
            <div class="text">※下記より求人票作成に必要な情報です。</div><br>

            <div class="form-group">
                <label for="name">電話番号</label>
                <input type="text" id="tell" name="tell" value="<?= $row['tell'] ?>" required>
            </div>

            <div class="form-group">
                <label for="name">時給</label>
                <input type="text" id="money" name="money" value="<?= $row['money'] ?>" required>
            </div>

            <div class="form-group">
                <label for="name">職務内容</label>
                <input type="text" id="job" name="job" value="<?= $row['job'] ?>" required>
            </div>

            <div class="form-group">
                <label for="name">時間・期間</label>
                <input type="text" id="time" name="time" value="<?= $row['time'] ?>" required>
            </div>

            <div class="form-group">
                <label for="name">特記事項</label>
                <input type="text" id="etc" name="etc" value="<?= $row['etc'] ?>" required>
            </div>

            <div class="action-btns">
                <input type="submit" value="更新">
                <input type="hidden" name="ID" value="<?= $id ?>">
            </div>
        </form>
    </div>
</body>

</html>
