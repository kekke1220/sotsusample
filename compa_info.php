<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>医療機関登録</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 70px;
            background-color: white;
        }
        
        .form-wrapper {
            width: 450px;
            margin: 0 10px;
            padding: 40px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: slideDown 1.5s ease-out;
        }
        
        .contact-form {
            display: flex;
            flex-direction: column;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            font-size: 16px;
            display: block;
            margin-bottom: 8px;
        }
        
        .form-group input[type="text"],
        .form-group input[type="file"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            width: calc(100% - 20px);
            margin-top: 4px;
        }
        
        .action-btns input[type="submit"] {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            background-color: navy;
            color: #fff;
            cursor: pointer;
            margin-bottom: 12px;
            width: 100%;
            font-size: 15px;
        }
        
        .action-btns input[type="submit"]:hover {
            background-color: #555;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-200px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="form-wrapper">
        <form class="contact-form" method="post" action="insert3.php">
            <h1>医療機関登録</h1>

            <div class="form-group">
                <label for="name">医療機関名</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="adress">住所</label>
                <input type="text" id="adress" name="adress" required>
            </div>

            <div class="form-group">
                <label for="lat">緯度</label>
                <input type="text" id="lat" name="lat" required>
            </div>

            <div class="form-group">
                <label for="lng">経度</label>
                <input type="text" id="lng" name="lng" required>
            </div>

            <div class="form-group">
                <label for="hp">ホームページ</label>
                <input type="text" id="hp" name="hp" required>
            </div>

            <div class="form-group">
                <label for="kyujin_file">求人票</label>
                <input type="file" id="kyujin_file" name="kyujin_file" required>
            </div>

            <div class="action-btns">
                <input type="submit" value="登録">
            </div>
        </form>
    </div>
</body>

</html>
