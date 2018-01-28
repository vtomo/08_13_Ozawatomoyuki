<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
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





</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Customize Your Life！</legend>
     <label>カテゴリ：
        <select name="name">
            <option value="体">体</option>
            <option value="恋愛">恋愛</option>
            <option value="仕事">仕事</option>
            <option value="勉強">勉強</option>
            <option value="家庭">家庭</option>
            <option value="お金">お金</option>
         </select><br>
     <label>イメージ：<input type="text" name="email"></label><br>
     <label>方  法 ：<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
　 <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧へ</a></div>
  </nav>


</body>
</html>
