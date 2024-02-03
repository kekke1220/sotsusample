<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="info_regi.css">
    <title>Document</title>
</head>
<body>

<div class="top-top">
<div id="top">medi-side</div>
<div id="sub">個人情報登録</div>
</div>

<form method="POST" action="insert.php" enctype="multipart/form-data">
        <!-- enctypeは画像入れる時入れる！ -->
            
        
                <div>
                    <label for="name">名前</label>
                    <input type="text" id="name" name="name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div>
                    <label for="adress">所在地</label>
                    <input type="text" id="adress" name="adress">
                </div>
                <div>
                    <label for="image">顔写真</label>
                    <input type="file" id="image" name="image">
                </div>
                <div>
                    <input type="submit" value="送信">
                </div>
            
    </form>
    
</body>
</html>