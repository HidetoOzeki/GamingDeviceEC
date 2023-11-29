<?php session_start(); ?>
<?php require 'modules/db.php'; ?>
<?php
  $pdo = new PDO($connect,USER,PASS);
  $sql = $pdo->prepare('select * from cart inner join product on cart.product_id=product.product_id where user_id = ?');
  $sql->execute([$_SESSION['user']["user_id"]]);
if($sql->rowCount() == 0){
  $data = "レコードが有りません";
}else{
  foreach ($sql as $row) {
      $data[] = $row;
  }
}
//値をjson形式で出力
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>