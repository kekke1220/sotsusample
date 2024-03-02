<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>求人票表示</title>
</head>
<body> -->
    <?php
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
            $pdfPath = $result['kyujin_file'];
            // PDFファイルの表示
            header('Content-Type: application/pdf');
            echo "<iframe src='/pdf_provider.php?path={$pdfPath}' width='100%' height='600px' style='border: none;'></iframe>";
        } else {
            echo "<p>該当するPDFファイルが見つかりません。</p>";
        }
    } else {
        echo "<p>PDFファイルが指定されていません。</p>";
    }
    ?>
</body>
</html>
