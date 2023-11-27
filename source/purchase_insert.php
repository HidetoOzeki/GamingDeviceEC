<?php session_start(); ?>
<?php require 'modules/db.php'?>
<?php
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo->prepare('insert into cart values(?,?,CURRENT_DATE());');
    $sql->execute([$_POST['']]);
exit;