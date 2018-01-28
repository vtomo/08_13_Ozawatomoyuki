<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>USER登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>

</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert1.php">
  <div class="jumbotron">
   <fieldset>
    <legend>USER登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="lid"></label><br>
     <label>Password：<input type="text" name="lpw"></label><br>
     <input type="submit" value="送信">
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
