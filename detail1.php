<?php
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
$id = $_GET["id"];

//1.  DB接続します
try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
  }
  
  //２．データ登録SQL作成
  $stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
  $stmt->bindValue(":id", $id, PDO::PARAM_INT);
  $status = $stmt->execute();
  
  //３．データ表示
  $view="";
  if($status==false){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
  }else{
    $row = $stmt->fetch();
    //var_dump($row);



    //Selectデータの数だけ自動でループしてくれる, 「.」は前に上書きしないように,detail.php?id=はあとで入れた、?はそこまでurlという意味
    /*while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
      $view .= '<p>';
      $view .= '<a href="detail.php?id='.$result["id"].'">';
      $view .= $result["name"]."[".$result["indate"]."]";
      $view .= '</a>';
      $view .= '</p>';*/
    }

?>
  
   <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>USER編集</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
    <form method="post" action="update1.php">
    <div class="jumbotron">
     <fieldset>
      <legend>USER編集</legend>
       <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
       <label>Email：<input type="text" name="lid" value="<?=$row["lid"]?>"></label><br>
       <label>Password：<input type="text" name="lpw" value="<?=$row["lpw"]?>"></label><br>
       
       <input type="submit" value="送信">
       <input type="hidden" name="id" value="<?=$id?>">
      </fieldset>
    </div>
  </form>
  <!-- Main[End] -->
  
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select1.php">USER一覧へ</a></div>
  </nav>
  
  </body>
  </html>
  

