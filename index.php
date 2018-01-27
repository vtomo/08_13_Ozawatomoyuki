<?php 


//PDOでデータベース接続
$result="";
try {
	$pdo = new PDO('mysql:host=localhost;dbname=gs_db;charset=utf8','root',"");
	$stmt=$pdo->query('select*from gs_an_table');
	while($record = $stmt->fetch(PDO::FETCH_ASSOC)){
		$result.='<tr>';foreach($record as $book){
		$result.='<td>'.$book.'</td>';
		}
		$result.='</tr>';
	}

}catch (PDOException $e) {
    $result = "#ERR:". $e->getMessage();
}
$pdo=null;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/sanitize.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
	h1{font-size:18pt;font-weight:bold;color:#666;}
	body{font-size:13pt;color:#666;margin:5px 25px;}
	tr{margin:5px;}
	th{padding:5px;color:white;background:darkgray};
	td{padding:5px;color:black;background:#e0e0ff;}
	</style>
</head>
<body>
	<h1>ブックマーク！！</h1>
	<table>
	<tr>
	<th>ID</th><th>書籍名</th><th>書籍URL</th><th>書籍コメント</th><th>登録日時</th>
	</tr>
	<?php echo $result;?>
	</table>

			<?php
				//一回のみ$result = $stmt->fetch(PDO::FETCH_ASSOC);
				while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
			?>





				<?php } ?>
	

</body>
</html>

