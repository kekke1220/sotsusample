<?php

//最初にSESSIONを開始！！ココ大事！！
session_start();

//POST値を受け取る
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];

//1.  DB接続します
require_once('funcs.php');
$pdo = db_conn('sotsusample');

//2. データ登録SQL作成
// gs_user_table1に、IDとWPがあるか確認する。
$stmt = $pdo->prepare('SELECT * FROM sotsusample WHERE lid = :lid');
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if($status === false){
    sql_error($stmt);
}

//4. 抽出データ数を取得
$val = $stmt->fetch();

//if(password_verify($lpw, $val['lpw'])){ //* PasswordがHash化の場合はこっちのIFを使う
    if( $val['id'] != '' && password_verify($lpw, $val['lpw'])){
        //Login成功時 該当レコードがあればSESSIONに値を代入
        $_SESSION['chk_ssid'] = session_id();
        $_SESSION['name'] = $val['name'];
        // 新たにログインしたユーザーのマイページにリダイレクト
        header('Location: http://localhost/sotsusample/compa_mypage.php?id=' . $val['id']);
        exit(); // リダイレクトしたらスクリプトの実行を終了する
    } else {
        //Login失敗時(Logout経由)
        header('Location: login.php');
        exit(); // リダイレクトしたらスクリプトの実行を終了する
    }

exit();
