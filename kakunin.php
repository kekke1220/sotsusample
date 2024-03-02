<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$filePath = '/var/www/html/abc.pdf'; // ファイルの絶対パス

if (file_exists($filePath)) {
    echo "ファイルが存在します: " . htmlspecialchars($filePath, ENT_QUOTES);
} else {
    echo "ファイルが見つかりません: " . htmlspecialchars($filePath, ENT_QUOTES);
}
?>