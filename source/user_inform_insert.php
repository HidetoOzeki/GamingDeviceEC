<?php
 const SERVER = '127.0.0.1';
 const DBNAME = 'gamingdeviceec';
 const USER = 'root';
 const PASS = '';
 $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo->prepare('INSERT INTO user(role_id,user_name,mail_address,user_password,user_delete_flg) values("U",?,?,?,"false")');
    $sql->execute([$_POST['user_name'],$_POST['mail_address'],$_POST['password']]);
exit;