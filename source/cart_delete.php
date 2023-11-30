<?php session_start(); ?>
<?php require 'modules/db.php'; ?>
<?php
  $pdo = new PDO($connect,USER,PASS);
  $sql = $pdo->prepare('delete from cart where product_id=?');
  $sql->execute([$_POST['delete_pd']]);

//値をjson形式で出力
$data = "成功";
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>