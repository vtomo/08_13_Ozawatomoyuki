<!--データ削除プログラム-->

<?php
include("functions1.php");
$id = $_GET["id"];

//1.DB接続(関数)
$pdo = db_con();
  
//2.データ登録(SQL作成)
$stmt = $pdo->prepare("DELETE FROM gs_user_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
  $view="";
  if($status==false){
    error_db_info($stmt);
  }else{
    //リダイレクト
    header("Location: select1.php");
    exit();  
  }

?>
