<?php session_start(); ?>
<?php require 'modules/db.php'?>
<?php
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo->prepare('update user set user_name=?, user_password=?, user_address=? where user_id=?');
    $sql->execute([$_POST['user_name'],$_POST['user_password'],$_POST['user_address'],$_SESSION['user']["user_id"]]);
    $update_user_inform = $pdo->prepare('select * from user where user_id=?');
    $update_user_inform->execute([$_SESSION['user']["user_id"]]);
    $data = $update_user_inform->fetchAll();
    $_SESSION['user'] = ["user_id" => $data[0]["user_id"],"rolo_id" => $data[0]["rolo_id"],"mail_address" => $data[0]["mail_address"],"user_name" => $data[0]["user_name"],"user_password" => $data[0]["user_password"],"user_address" => $data[0]["user_address"]];
exit;