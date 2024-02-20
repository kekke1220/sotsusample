<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: white;
        color: #333;
        display: flex;
        justify-content: center; /* 中央揃え */
        padding-top: 50px; /* ページ上部からのスペース */
    }
    form {
    background-color: #f9f9f9;
    padding: 40px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%; /* 幅を50%に設定 */
    max-width: 600px; /* 最大幅を600pxに設定 */
    margin: auto; /* 中央揃え */
    display: block;
}
    .form-title {
    text-align: center; /* テキストを中央揃えに */
    color: #004080; /* テキストの色をネイビーに */
    margin-top: 0; /* 上のマージンをなくす */
    margin-bottom: 20px; /* タイトルと入力フィールドの間のマージン */
}
    label {
        font-weight: bold;
        color: #333;
    }
    input[type="text"],
    input[type="number"],
    input[type="tel"],
    input[type="email"],
    select,
    textarea {
        width: 100%;
        padding: 5px;
        margin-top: 5px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /* 特にtextareaの高さを調整 */
    textarea {
        height: 150px; /* 高さを具体的な値に設定 */
    }
    input[type="submit"] {
        background-color: #004080; /* ネイビー色 */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: #003060; /* ホバー時は少し濃いネイビー色に */
    }

/* form-wrapperにアニメーションを適用 */
.form-wrapper {
/* ...（既存のスタイル）... */
  animation: slideDown 1.5s ease-out;
}
@keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    form {
        /* 既存のスタイル */
        animation: slideDown 0.5s ease-out; /* アニメーションを適用 */
    }
</style>
</head>
<body>
<form action="generate_pdf.php" method="post">
<h1 class="form-title">応募用PDF作成フォーム</h1>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>
    
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required><br><br>
    
    <label for="tel">Tel:</label>
    <input type="tel" id="tel" name="tel" required><br><br>
    
    <label for="sex">Sex:</label>
    <select id="sex" name="sex" required>
        <option value="">Please select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br><br>
    
    <label for="mail">Mail:</label>
    <input type="email" id="mail" name="mail" required><br><br>
    
    <label for="occupation">Occupation:</label>
    <input type="text" id="occupation" name="occupation" required><br><br>

    <label for="motivation">Motivation:</label>
    <textarea id="motivation" name="motivation" required></textarea><br><br>
    
    <!-- <label for="photo">Photo:</label>
    <input type="file" id="photo" name="photo" required><br><br> -->
    
    <input type="submit" value="Create PDF">
</form>
</body>
</html>

