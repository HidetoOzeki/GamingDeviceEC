<?php require 'modules/header.php'; ?>
<?php require 'modules/db.php'?>


    <h1 class="page_title_1">削除が完了しました</h1>
<?php
$pdo = new PDO($connect,USER,PASS);
if(isset($_POST['product_id'])){
    $sql=$pdo->prepare('update product set product_delete_flg = ? where product_id=?');
    $sql->execute(['true',$_POST['product_id']]);
}
if(isset($_POST['user_id'])){
    $sql=$pdo->prepare('update user set user_delete_flg = ? where user_id=?');
    $sql->execute(['true',$_POST['user_id']]);
}
if(isset($_POST['review_user_inform']) && isset($_POST['review_product_inform'])){
    
    $sql=$pdo->prepare('delete from review where user_id = ? and product_id = ?');
    $sql->execute([$_POST['review_user_inform'],$_POST['review_product_inform']]);
}
?>
    <br>
    <form action="admin_control.php">
    <button class="centered_button">一覧に戻る</button>
    </form>
<?php require 'modules/footer.php'; ?>
