<?php
//1.  DB接続します

include("functions.php");
$pdo = db_con();

/*try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}*/

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる, 「.」は前に上書きしないように,detail.php?id=はあとで入れた、?はそこまでurlという意味
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
   // var_dump($result);
    $view .= '<p>';
    $view .= '<a href="detail.php?id='.$result["id"].'">';
    $view .= $result["indate"].":".$result["name"];
    $view .= '</a>';
    $view .= ' ';

    $view .= '<a href="delete.php?id='.$result["id"].'">';
    $view .= '[削除]';
    $view .= '</a>';
    



    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
  </div>
</div>
<!-- Main[End] -->

</body>
</html>

