<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// ファイル名がクエリパラメーターから渡されたか確認
if (isset($_GET['file'])) {
    // ファイル名をURLデコード
    $fileName = urldecode($_GET['file']);
    
    // 受け取ったファイル名を表示
    echo "受け取ったファイル名: " . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . "<br>";

    // ファイルが存在するか確認
    if (file_exists($fileName)) {
        // PDFファイルをブラウザに表示
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . basename($fileName) . '"');
        readfile($fileName);
        exit;
    } else {
        // ファイルが見つからない場合はエラーメッセージを表示
        echo "指定されたPDFファイルが見つかりません。絶対パス: " . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8');
    }
} else {
    // ファイル名が指定されていない場合はエラーメッセージを表示
    echo "ファイルが指定されていません。";
}
?>
