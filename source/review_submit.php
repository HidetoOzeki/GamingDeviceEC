<?php session_start(); ?>
<?php require 'modules/db.php' ?>
<?php

$user_id = $_SESSION['user']['user_id'];
$product_id = $_POST['product_id'];
$rating = $_POST['rating'];
$review_content = $_POST['review_content'];

if($rating==0){
    //星評価が初期値(0)であったら投稿を中断して警告を表示させる
    echo 'abort';
    exit;
}

$pdo = new PDO($connect,USER,PASS);
$sql = $pdo->prepare('select * from review where user_id=? and product_id=?');
$sql->execute([$user_id,$product_id]);
if(empty($sql->fetchAll())){
    //レビューを投稿
    $sql = $pdo->prepare('insert into review values(?,?,CURRENT_DATE,?,?)');
    $sql->execute([$user_id,$product_id,$rating,$review_content]);
    echo 'done';
    exit;
}else{
    //レビュー更新
    $sql = $pdo->prepare('update review set post_date = CURRENT_DATE, review_rate = ? , review_contents = ? where user_id = ? and product_id = ?');
    $sql->execute([$rating,$review_content,$user_id,$product_id]);
    echo 'done';
    exit;
}
