<?php session_start(); ?>
<?php require 'modules/db.php'; ?>
<?php
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo->prepare('select * from user where user_password=? and mail_address=?');
    $sql->execute([$_POST['password'],$_POST['mail_address']]);
    $data = $sql->fetchAll();
    if(empty($data)){
        $result = "none";
        echo json_encode(['msg' => [$result]]);
    }else {
        $_SESSION['user'] = ["user_id" => $data[0]["user_id"],"mail_address" => $data[0]["mail_address"],"user_name" => $data[0]["user_name"],"user_password" => $data[0]["user_password"],"user_address" => $data[0]["user_address"]];
        $check_amin = $data[0]["role_id"];
        $result = "success";
        echo json_encode(['msg' => [$result,$check_amin]]);
    }
?>