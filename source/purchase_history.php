<?php session_start(); ?>
<?php require 'modules/db.php' ?>
<?php require 'modules/utilcommon.php' ?>
<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'?>

<h1 class="page_title">購入履歴</h1>

<div class="purchase_history">

    <?php

    if(!isset($_SESSION['user'])){
        redirect('login.php');
    }

    $id = $_SESSION['user']['user_id'];

    $pdo = new PDO($connect,USER,PASS);
    //$sql = $pdo->prepare('select * from purchase where user_id=?');
    $history_sql = $pdo->prepare('select DISTINCT product_name, product_id, purchase_id, purchase_date from purchase INNER JOIN purchase_details USING(purchase_id) INNER JOIN product USING(product_id) where user_id=?');
    $history_sql->execute([$id]);
    $sql = $history_sql->fetchAll();
    $count = 0;
    echo '<p>ご購入日 : ' , $sql[0]['purchase_date'] , '<p>';
    $save_date = $sql[0]['purchase_date'];
    $save_purchase_id = $sql[0]['purchase_id'];
    /*foreach($sql as $purchase){
        $purchase_id = $purchase['purchase_id'];
        $sql = $pdo->prepare('select * from purchase_details where purchase_id = ?');
        $sql->execute([$purchase_id]);
        echo '<p>ご購入日 : ' , $purchase['purchase_date'] , '<p>';
        foreach($sql as $product){
            $sql = $pdo->prepare('select * from product where product_id = ?');
            $sql->execute([$product['product_id']]);*/
            foreach($sql as $item){
                if($item["purchase_id"]!=$save_purchase_id){
                    echo '<p>ご購入日 : ' , $item['purchase_date'] , '<p>';
                }
                $count++;
                echo '
                <form action="shohin-detail.php" method="GET" id="detail_form',$count,'">
                <div class="purchased_item" onClick="document.forms[\'detail_form',$count,'\'].submit();">
                <input type="hidden" name="detail_pd" value="',$item['product_id'],'">
                <img class="purchased_item_img" src="img/product_image/', $item['product_id'] ,'.png" alt="">
                </form>
                <div class="purchased_item_description">
                <p> ' , $item['product_name'] , '</p>
                <form action="post_review.php" method="post">
                <input type="hidden" name="product_id" value="', $item['product_id'] ,'">
                <button type="submit">レビューを書く</button>
                </form>
                </div>
                </div>';
                $save_purchase_id = $item['purchase_id'];
            }
        //}
    //}

    ?>
</div>
<script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
<script src="./scripts/purchase_history_jumpToDetail.js"></script>

<?php require 'modules/navigation.php';?>
<?php require 'modules/footer.php'; ?>