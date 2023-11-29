<?php session_start(); ?>
<?php require 'modules/db.php'?>
<?php
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo->prepare('insert into purchase(user_id, purchase_date) values(?,CURRENT_DATE())');
    $sql->execute([$_SESSION['user']['user_id']]);
    for($i = 1;$i<=count($_POST['product_nums']);$i++){
        $sql = $pdo->prepare('insert into purchase_details values((select COALESCE((select max(purchase_id) from purchase),1)),?,?,?)');
        $sql->execute([$i,$_POST['product_nums'][$i-1],$_POST['product_amounts'][$i-1]]);
    }
exit;