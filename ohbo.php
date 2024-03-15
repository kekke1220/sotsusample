 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>応募フォーム</title>
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
            width: 650px;
            margin: 0 10px;
            padding: 60px;
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
            margin-bottom: 10px;
        }
        
        .form-group label {
            font-size: 15px;
            display: block;
            margin-bottom: 8px;
        }
        
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="number"],
        .form-group input[type="tel"],
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }
        
        .action-btns input[type="submit"] {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            background-color: navy;
            color: #fff;
            cursor: pointer;
            margin-bottom: 12px;
            width: 103%;
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
        <form class="contact-form" method="post" action="insert4.php">
            <h1 class="form-title">応募フォーム</h1>

            <!-- <div class="form-group">
                <label for="pdf">個人情報PDF</label>
                <input type="file" id="pdf" name="pdf" required>
            </div> -->

            <div class="form-group">
                <label for="name">氏名(カナ)</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="age">年齢(例：20代、30代　等)</label>
                <input type="text" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="adress">住所(都道府県、⚪︎⚪︎市、××区まで)</label>
                <input type="text" id="adress" name="adress" required>
            </div>

            <div class="form-group">
    <label for="email">メールアドレス</label>
    <input type="email" id="email" name="email" required>
</div>

            <div class="form-group">
                <label for="sex">性別</label>
                <input type="text" id="sex" name="sex" required>
            </div>

            <div class="form-group">
                <label for="occu">職種(資格)</label>
                <input type="text" id="occu" name="occu" required>
            </div>

            <div class="form-group">
                <label for="etc">特記事項</label>
                <textarea id="etc" name="etc" required></textarea>
            </div>

            <!-- Uncomment below if you wish to include a photo upload field -->
            <!-- <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" required>
            </div> -->

            <div class="action-btns">
                <input type="submit" value="応募する">
            </div>
        </form>
    </div>
</body>
</html>