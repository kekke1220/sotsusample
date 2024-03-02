<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>求人票表示</title>
</head>
<body>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// データベース接続
try {
    $pdo = new PDO('mysql:dbname=sotsu_map;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

// IDをもとにデータベースからPDFファイルのパスを取得
if (isset($_GET['id'])) {
    $ID = $_GET['id'];
    $stmt = $pdo->prepare("SELECT kyujin_file FROM sotsu_map WHERE ID = :ID");
    $stmt->bindValue(':ID', $ID, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($_GET['id'])) {
        $ID = $_GET['id'];
        $stmt = $pdo->prepare("SELECT kyujin_file FROM sotsu_map WHERE ID = :ID");
        $stmt->bindValue(':ID', $ID, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($result && !empty($result['kyujin_file'])) {
            $fileName = $result['kyujin_file']; // 直接ファイル名を取得
    
            // データベースから取得したkyujin_fileの値を出力して確認
            echo "データベースから取得したファイル名: " . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . "<br>";
    
            $pdfFileName = urlencode($fileName); // ファイル名をURLエンコード
            echo "<a href='pdf_provider.php?file={$pdfFileName}' target='_blank'>PDFファイルを表示</a>";
        } else {
            echo "<p>該当するPDFファイルが見つかりません。</p>";
        }
    }
}    

//     if ($result && !empty($result['kyujin_file'])) {
//         // データベースから取得したファイルパスからファイル名を抽出
//         $filePath = $result['kyujin_file']; // データベースから取得したファイルパス
//         $filePathParts = explode('/', $filePath);
//         $fileName = end($filePathParts); // パスの最後の部分がファイル名

//         // ファイル名を出力して確認（デバッグ用）
//         echo "データベースから取得したファイル名: " . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . "<br>";

//         $pdfFileName = urlencode($fileName); // ファイル名をURLエンコード
//         echo "<a href='pdf_provider.php?file={$pdfFileName}' target='_blank'>PDFファイルを表示</a>";
//     } else {
//         echo "<p>該当するPDFファイルが見つかりません。</p>";
//     }
// } else {
//     echo "<p>IDが指定されていません。</p>";
// }

?>

</body>
</html>
