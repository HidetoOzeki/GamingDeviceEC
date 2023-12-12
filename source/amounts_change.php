<?php session_start(); ?>
<?php require 'modules/db.php'; ?>
<?php
  $pdo = new PDO($connect,USER,PASS);
  for($i = 0;$i<count($_POST['amounts']);$i++){
    $sql = $pdo->prepare('update cart set amounts = ? where user_id = ? ');
    $sql->execute([$_POST['amounts'][$i],$_SESSION['user']["user_id"],$_POST['items'][0]["product_id"]]);
  }

//値をjson形式で出力
$data = "成功";
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>