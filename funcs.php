<?php

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function db_conn() {
    try {
        $db_name = 'koukeishou_sotsusample';
        $db_host = 'mysql634.db.sakura.ne.jp';
        $db_id   = 'koukeishou';      // アカウント名
        $db_pw   = 'koukeishou12';    // パスワード

        // $db_id   = 'root';      // アカウント名
        // $db_pw   = '';          // パスワード
        // $db_host = 'localhost'; // DBホスト
        $server_info ='mysql:dbname='.$db_name.';charset=utf8;host='.$db_host;
        $pdo = new PDO($server_info, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

//SQLエラー
function sql_error($stmt)
{
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit('SQLError:' . $error[2]);
}

//リダイレクト
function redirect($file_name)
{
    header('Location: ' . $file_name);
    exit();
}


// ログインチェク処理 loginCheck()

function loginCheck(){

if( !isset($_SESSION['chk_ssid']) ||  $_SESSION['chk_ssid'] !== session_id() ){
    exit('LOGIN ERROR');
} else{
    // ログイン済処理
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
}

}

// ハッシュ化
function pass_h($pass){
   return password_hash($pass, PASSWORD_DEFAULT);
}