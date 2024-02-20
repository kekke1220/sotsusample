<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require('fpdf186/fpdf.php'); // FPDFライブラリのパスに応じて変更してください

// FPDFがフォントファイルを見つけられるようにフォントパスを定義
define('FPDF_FONTPATH', 'fpdf186/font/');

// フォームデータの取得
$name = $_POST['name'] ?? 'N/A';
$age = $_POST['age'] ?? 'N/A';
$address = $_POST['address'] ?? 'N/A';
$tel = $_POST['tel'] ?? 'N/A';
$sex = $_POST['sex'] ?? 'N/A';
$mail = $_POST['mail'] ?? 'N/A';
$occupation = $_POST['occupation'] ?? 'N/A';
$motivation = $_POST['motivation'] ?? 'N/A';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(0, 0, 128); // ネイビー色

// 「Application Details」の追加
$pdf->Cell(0, 10, 'Application Details', 0, 1, 'C');
$pdf->Ln(10); // タイトルと最初の項目の間にスペースを追加

$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0); // 黒色

// 各項目をPDFに追加
$fields = [
    'Name' => $name,
    'Age' => $age,
    'Address' => $address,
    'Tel' => $tel,
    'Sex' => $sex,
    'Mail' => $mail,
    'Occupation' => $occupation,
    'Motivation' => $motivation
];

foreach ($fields as $label => $value) {
    if ($label === 'Motivation') {
        $pdf->MultiCell(0, 10, "$label: $value", 0, 'L');
    } else {
        $pdf->Cell(0, 10, "$label: $value", 0, 1);
        $pdf->Ln(5); // 各項目の間にスペースを追加
    }
}

// PDFの出力
$pdf->Output();
?>