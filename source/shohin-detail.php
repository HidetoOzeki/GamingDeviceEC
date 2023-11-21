<?php require 'modules/db.php'?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./modules/モジュール用CSS/search_box.css">
    <link rel="stylesheet" href="./modules/モジュール用CSS/navigation.css">
    <link rel="stylesheet" href="./style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require 'modules/serach_box.php'; ?>
<?php 
$pdo = new PDO($connect,USER,PASS);
$sql = $pdo->prepare('select *,(select ROUND(AVG(review_rate),1) from review WHERE product_id=?) as "avg_review_rate" from product INNER JOIN bland ON product.bland_id=bland.bland_id INNER JOIN product_spec ON product.product_id=product_spec.product_id where product.product_id=?');
$sql->execute([$_GET['detail_pd'],$_GET['detail_pd']]);
$result = $sql->fetchAll();
?>
<form action="kaimonokago.php">
    <div class="shohin">
        <img src="./img/<?= $_GET['detail_pd'] ?>.png" class="product_detail_img">
    </div>
    <p><?= $result[0]["product_name"] ,"/", $result[0]["interface"] ,"/", $result[0]["screen_clearly"] ,"/", $result[0]["product_os"] ,"/", $result[0]["product_size"] ,"/", $result[0]["product_weight"] ,"/", $result[0]["product_color"] ?></p>
    <div id="app" style="position: relative;">
        <star-rating :increment="0.5" :rating="<?= $result[0]["avg_review_rate"] ?>" :max-rating="3" :read-only="true" :star-size="30"></star-rating>
        <span style="font-size: 1.5em" class="detail-prices">￥<?= $result[0]["price"] ?></span>
    </div>
    
    <div class="cart_btn" align="right" style="margin: 3%"><button type="submit">カートに追加</button></div>

    <style>
   h1{
        text-align:center;
        font-size:  25px; 
     }
    </style>
    <?php
    $compare_product = [];
    if(isset($_GET['compare_pd'])){
        foreach($_GET['compare_pd'] as $pd){
            $compare_product[] = $pd;
        }
    }
    ?>
        <h1>商品比較</h1>
        <?php
        if(count($compare_product) > 0):
        $result = implode(",",$compare_product);
        $sql = $pdo->query('select * from product where product_id IN('.$result.')');
        foreach($sql as $row):
        ?>
        <p style="width: 40%; font-size: 0.8em; margin-left: 8px;"><?= $row['product_name'] ?></p>
        <div class="hikaku">
            <img src="./img/<?= $row['product_id'] ?>.png" class="compare_product_img">
        </div>

        <div style="display: inline-block; margin-left: 5px;">
            <p>
                <span style="font-size: 0.85em;">???：</span>
                <input
                v-model="range"
                type="range"
                max="500"
                min="10"
                class="param"/>
                <span style="font-size: 0.85em;">???：</span>
            </p>
            
            <div
            :style="bindStyle"
            ></div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
</form> 
    <?php require 'modules/navigation.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2/dist/vue.global.js"></script>
    <script src="https://unpkg.com/vue-star-rating@next/dist/VueStarRating.umd.min.js"></script>
    <script src="./scripts/shohin-detail.js"></script>
    <?php require 'modules/footer.php'; ?>