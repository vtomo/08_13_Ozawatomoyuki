<?php
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
include("functions1.php");
$id = $_GET["id"];

//1.  DB接続します functionでくくる
//DB接続関数
$pdo = db_con();
  
  //２．データ登録SQL作成
  $stmt = $pdo->prepare("DELETE FROM gs_user_table WHERE id=:id");
  $stmt->bindValue(":id", $id, PDO::PARAM_INT);
  $status = $stmt->execute();
  
  //３．データ表示
  $view="";
  if($status==false){
    error_db_info($stmt);
   

  }else{
    header("Location: select1.php");
    exit();
    
    }

?>
