<?php
//1.  DB接続します

include("functions1.php");
$pdo = db_con();

/*try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}*/

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
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
    $view .= '<a href="detail1.php?id='.$result["id"].'">';
    $view .= $result["name"].":".$result["lid"];
    $view .= '</a>';
    $view .= ' ';

    $view .= '<a href="detail1.php?id='.$result["id"].'">';
    $view .= '[編集]';
    $view .= '</a>';


    $view .= '<a href="delete1.php?id='.$result["id"].'">';
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
<title>USER一覧</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<div>
<legend>USER一覧</legend>

    <div class="container jumbotron"><?=$view?></div>
  </div>
</div>
<!-- Main[End] -->
　<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index1.php">USER登録へ</a>
    </div>
  </nav>

</body>
</html>

