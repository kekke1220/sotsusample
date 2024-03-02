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


    if ($result && !empty($result['kyujin_file'])) {
        $pdfPath = urlencode($result['kyujin_file']); // URLエンコードが必要な場合
        // PDFファイルのダウンロードリンクを提供
        echo "<a href='pdf_provider.php?path={$pdfPath}' target='_blank'>PDFファイルを表示</a>";
    } else {
        echo "<p>該当するPDFファイルが見つかりません。</p>";
    }}

?>


</body>
</html>
