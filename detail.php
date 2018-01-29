<!--個別データ取得・表示プログラム-->

<?php
include("functions.php");
$id = $_GET["id"];

//1.DB接続
$pdo = db_con();

  //2.データ取得
  $stmt = $pdo->prepare("SELECT * FROM gs_an_table WHERE id=:id");
  $stmt->bindValue(":id", $id, PDO::PARAM_INT);
  $status = $stmt->execute();
  
//3.データ表示
  $view="";
  if($status==false){
    error_db_info($stmt);
  }else{
    $row = $stmt->fetch();
  }
?>
  
<!-- [画面] データ編集-->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ編集</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
    <form method="post" action="update.php">
    <div class="jumbotron">
     <fieldset>
      <legend>データ編集</legend>
       <label>カテゴリ：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
       <label>イメージ：<input type="text" name="email" value="<?=$row["email"]?>"></label><br>
       <label>方 法 ：<textArea name="naiyou" rows="4" cols="40"><?=$row["naiyou"]?></textArea></label><br>
       <input type="submit" value="送信">
       <input type="hidden" name="id" value="<?=$id?>">
      </fieldset>
    </div>
  </form>

  <!-- FOOTER -->
  <footer class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </footer>
  
  </body>
  </html>
  

