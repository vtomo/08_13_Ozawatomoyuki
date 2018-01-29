<!--個別データ取得・表示プログラム-->

<?php
include("functions1.php");
$id = $_GET["id"];

//1.DB接続
  $pdo = db_con();
  
//2.データ取得
  $stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
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

<!-- [画面] USER編集-->  
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>USER編集</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
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

  <!-- FOOTER -->
  <footer class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="select1.php">USER一覧へ</a>
        </div>
    </div>
  </footer>
  
  </body>
  </html>
  

