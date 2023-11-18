<?php session_start(); ?>
<?php
 const SERVER = '127.0.0.1';
 const DBNAME = 'gamingdeviceec';
 const USER = 'root';
 const PASS = '';
 $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo->prepare('select * from user where user_password=? and mail_address=?');
    $sql->execute([$_POST['password'],$_POST['mail_address']]);
    if(empty($sql->fetchAll())){
        $result = "none";
        echo json_encode(['msg' => [$result]]);
    }else {
        
        $result = "success";
        echo json_encode(['msg' => [$result]]);
    }
?>