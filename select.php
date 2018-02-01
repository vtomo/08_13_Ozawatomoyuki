<!--全データ取得・表示プログラム-->

<?php
include("functions.php");

//1.DB接続
$pdo = db_con();

//2.データ取得
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$status = $stmt->execute();

//3.データ表示
$view="";
if($status==false){
  error_db_info($stmt);
}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="detail.php?id='.$result["id"].'">';
    $view .= $result["name"].":".$result["email"].":".$result["naiyou"].":".$result["indate"];
    $view .= '</a>';
    $view .= ' ';

    $view .= '<a href="delete.php?id='.$result["id"].'">';
    $view .= '[削除]';
    $view .= '</a>';
    $view .= '</p>';
  }
}

// imageUploader 追加 ここから
/*public function getImages(){
  $images = [];
  $files = [];
  $imageDir = opendir(IMAGES_DIR);
  while(false!==($file=readdir($imageDir))){
      if($file === '.'|| $file ==='..'){
          continue;
      }
      $files[] = $file;
      if(file_exists(THUMBNAIL_DIR . '/' . $file)){
          $images[] = basename(THUMBNAIL_DIR) . '/' . $file;
      }else{
          $images[] = basename(IMAGES_DIR) .'/'.$file;
      }
   }
   array_multisort($files,SORT_DESC,$images);
   return $images;
}*/
// imageUploader 追加 ここまで



?>

<!-- [画面]データ一覧 -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>データ一覧</title>
  <link rel="stylesheet" href="css/range.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}
  
  /*-- index2追加 ここから --*/
  /*
  ul{
        list-style:none;
        margin:0;
        padding:0;
    }
    li{
        margin-bottom:5px;
    }
  */
  /*-- index2追加 ここまで --*/
  
  
  </style>
</head>

<body id="main">

    <div>
    　  <legend>データ一覧</legend>

    <!-- index2追加 ここから -->
<!--
    <ul>
        <?php //foreach($images as $image):?>
            <li>
                <a href="<?php //echo h(basename(IMAGES_DIR)) . '/' . h(basename($image)); ?>">
                    <img src="<?php //echo h($image);?>">
                </a>
            </li>

            
        <?php //endforeach;?>
    </ul>
-->

    <!-- index2追加 ここまで -->



        <div class="container jumbotron"><?=$view?></div>
    </div>

<!--FOOTER-->
    <footer class="navbar navbar-default">
     <div class="container-fluid">
       <div class="navbar-header">
         <a class="navbar-brand" href="index.php">データ登録へ</a>
         <a class="navbar-brand" href="index2.php">イメージ登録へ</a>
       </div>
     </div>
  </footer>

</body>
</html>

