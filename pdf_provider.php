<?php
// セキュリティ上の理由から、ファイルパスの検証は非常に重要です。
// ここでは簡単のために直接ファイルパスを使用していますが、実際には推奨されません。

if (isset($_GET['path'])) {
    $path = $_GET['path'];

    // ここでファイルパスの検証とセキュリティチェックを実施
    // 不正なパスが指定されていないことを確認する

    // ファイルをブラウザに提供
    header('Content-Type: application/pdf');
    readfile($path);
    exit;
} else {
    echo "PDFファイルが指定されていません。";
}
?>