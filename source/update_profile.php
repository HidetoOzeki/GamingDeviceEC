<?php
 const SERVER = '127.0.0.1';
 const DBNAME = 'gamingdeviceec';
 const USER = 'root';
 const PASS = '';
 $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo->prepare('update user set user_name=?, user_password=?, user_address=? where user_id=?');
    $sql->execute([$_POST['user_name'],$_POST['user_password'],$_POST['user_address'],$_POST['']]);
exit;