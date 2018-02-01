<!--登録するプログラム-->

<?php
include("functions1.php");

//1.入力チェック
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["lid"]) || $_POST["lid"]=="" ||
  !isset($_POST["lpw"]) || $_POST["lpw"]==""
){
  exit('ParamError');
}

//2.POSTデータ受信
$name   = $_POST["name"];
$lid  = $_POST["lid"];
$lpw = $_POST["lpw"];

//3.DB接続
$pdo = db_con();

//4.データ登録(SQL作成)
$stmt = $pdo->prepare("INSERT INTO gs_user_table(id, name, lid, lpw)VALUES(NULL, :a1, :a2, :a3)");
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $lid);
$stmt->bindValue(':a3', $lpw);
$status = $stmt->execute();

//5.エラー確認
if($status==false){
  error_db_info($stmt);
}else{
//リダイレクト
  header("Location: index1.php");
  exit;
}
?>
