<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>本をブックマークしよう！</title>
    <link rel="stylesheet" href="css/sanitize.css"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h1>ブックマークしよう！</h1>
    <form action="insert.php" method="post">
        <ul>
            <li class="form-item">
                <label for="book">書籍名</label>
                <input type="text" name="book" id="book" class="uk-input">
            </li>

            <li class="form-item">
                <label for="internet">書籍url</label>
                <input type="text" name="internet" id="internet" class="uk-input">
            </li>

            <li class="form-item">
                <label for="comment">書籍コメント</label>
                <textarea name="comment" id="comment" cols="30" rows="10" class="uk-textarea"></textarea>
            </li>
            
        </ul>
        <input type="submit" value="送信">
    </form>    
</div>
</body>
</html>