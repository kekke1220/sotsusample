<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// アップロード先ディレクトリのパスを指定
$uploadDir = '/var/www/html/htdocs/uploads/';

if (isset($_GET['file'])) {
    $fileName = basename($_GET['file']); // ファイル名の取得とサニタイズ
    $filePath = $uploadDir . $fileName; // 完全なファイルパスの構築

    if (file_exists($filePath)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $fileName . '"');
        readfile($filePath);
        exit;
    } else {
        echo "指定されたPDFファイルが見つかりません。";
    }
} else {
    echo "ファイルが指定されていません。";
}
?>

<!-- <?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// ファイル名がクエリパラメーターから渡されたか確認
if (isset($_GET['file'])) {
    // basename()を使用してファイル名の取得とサニタイズを行い、ディレクトリトラバーサル攻撃を防ぐ
    $fileName = basename($_GET['file']);
    // 受け取ったファイル名を表示（デバッグ用、実際の運用では削除推奨）
    echo "受け取ったファイル名: " . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . "<br>";
    // アップロードディレクトリのパスを指定し、完全なファイルパスを構築
    $filePath = '/var/www/html/htdocs/uploads/' . $fileName;

    // ファイルが存在するか確認
    if (file_exists($filePath)) {
        // PDFファイルをブラウザに表示
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $fileName . '"');
        readfile($filePath);
        exit;
    } else {
        // ファイルが見つからない場合はエラーメッセージを表示
        echo "指定されたPDFファイルが見つかりません。絶対パス: " . htmlspecialchars($filePath, ENT_QUOTES, 'UTF-8');
    }
} else {
    // ファイル名が指定されていない場合はエラーメッセージを表示
    echo "ファイルが指定されていません。";
}
?>
 -->
