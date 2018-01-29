<!--関数
(共通で使うものを関数化してこのファイルに入れておく)-->

<?php

//1.DB接続関数（PDO）
function db_con(){
    try {
        $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
        return $pdo;
      } catch (PDOException $e){
        exit('データベースに接続できませんでした。'.$e->getMessage());
      }
}

//2.SQL処理エラー関数
function error_db_Info($stmt){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}

//3.XSS:htmlspecialchars
function h($str){
    return htmlspecialchars($str, ENT_QuOTES);
}

?>
