<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['path'])) {
    $path = urldecode($_GET['path']); // URLデコードされたパス

    // ここで絶対パスを設定してみる（例としてのパスです）
    $absolutePath = "/var/www/html/htdocs/pdfs/" . $path;

    echo "デバッグ情報：<br>絶対パス: " . htmlspecialchars($absolutePath, ENT_QUOTES, 'UTF-8') . "<br>";

    if (file_exists($absolutePath)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . basename($absolutePath) . '"');
        readfile($absolutePath);
        exit;
    } else {
        echo "指定されたPDFファイルが見つかりません。絶対パス: " . htmlspecialchars($absolutePath, ENT_QUOTES, 'UTF-8');
    }
}
?>
