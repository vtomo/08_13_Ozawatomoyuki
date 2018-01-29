<!--登録するプログラム-->

<?php
include("functions.php");

//1.入力チェック
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["email"]) || $_POST["email"]=="" ||
  !isset($_POST["naiyou"]) || $_POST["naiyou"]==""
){
  exit('ParamError');
}

//2.POSTデータ受信
$name   = $_POST["name"];
$email  = $_POST["email"];
$naiyou = $_POST["naiyou"];

//3.DB接続
$pdo = db_con();

//4.データ登録(SQL作成)
$stmt = $pdo->prepare("INSERT INTO gs_an_table(id, name, email, naiyou,
indate )VALUES(NULL, :a1, :a2, :a3, sysdate())");
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $email);
$stmt->bindValue(':a3', $naiyou);
$status = $stmt->execute();

//5.エラー確認
if($status==false){
  error_db_info($stmt);
}else{
  //リダイレクト
  header("Location: select.php");
  exit;
}
?>
