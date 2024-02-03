<?php
session_start();
require_once('funcs3.php');
loginCheck();

$id = $_GET['id']; //?id~**を受け取る
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM sotsusample_mypage WHERE id=:id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
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
    <link rel="stylesheet" href="detail.css">
</head>

<body>

    <!-- Head[Start] -->
    <header>
      
    </header>
    <div class="top-top">
       <div id="top">medi-side</div>
       <div id="sub">個人情報変更</div>
    </div>

    <!-- Head[End] -->
    <form method="POST" action="update.php" enctype="multipart/form-data">
        <div class="jumbotron">

            <div class="form-container">
                <div>
                    <label for="name">名前</label>
                    <input type="text" id="name" name="name" value="<?= h($row['name']) ?>">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?= h($row['email']) ?>">
                </div>
                <div>
                    <label for="adress">所在地</label>
                    <input type="text" id="adress" name="adress" value="<?= h($row['adress']) ?>">
                </div>
            </div>

            <div class="image-container">
                <?php
                  if(!empty($row['image'])){
                  echo '<img src="' . $row['image'] . '" width="200" height="300">';
                  }
                ?>
            </div>

 
        </div>

         <!-- 新しい画像のアップロードフィールド（もし必要なら） -->
         <div class="newimg-container">
                  <label for="new_image">新しい画像を選択</label>
                  <input type="file" id="new_image" name="image">
                <!-- 既存の画像のパスを隠しフィールドとして保持 -->
                  <input type="hidden" name="existing_image" value="<?= h($row['image']) ?>">
            </div>

        
        <div class="submit-container">
             <input type="submit" value="更新">
             <input type="hidden" name="id" value="<?= $id ?>">
        </div>
            
           
    </form>

    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header1"><a class="navbar-brand" href="select.php">トップ</a></div>
                <div class="navbar-header2"><a class="navbar-brand" href="mypage.php">マイページトップ</a></div>
            </div>
        </nav>
</body>
</html>
