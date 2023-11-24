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
$sql = $pdo->prepare('select *,(select ROUND(AVG(review_rate),1) from review WHERE product_id=?) as "avg_review_rate" from product INNER JOIN performance ON product.product_id=performance.product_id INNER JOIN product_spec ON product.product_id=product_spec.product_id where product.product_id=?');
$sql->execute([$_GET['detail_pd'],$_GET['detail_pd']]);
$detail_result = $sql->fetchAll();
?>
<form action="kaimonokago.php">
    <div class="shohin">
        <img src="./img/<?= $_GET['detail_pd'] ?>.png" class="product_detail_img">
    </div>
    <p><?= $detail_result[0]["product_name"] ,"/", $detail_result[0]["interface"] ,"/", $detail_result[0]["screen_clearly"] ,"/", $detail_result[0]["product_os"] ,"/", $detail_result[0]["product_size"] ,"/", $detail_result[0]["product_weight"] ,"/", $detail_result[0]["product_color"] ?></p>
    <div id="app" style="position: relative;">
        <star-rating :increment="0.5" :rating="<?= $detail_result[0]["avg_review_rate"] ?>" :max-rating="3" :read-only="true" :star-size="30"></star-rating>
        <span style="font-size: 1.5em" class="detail-prices">￥<?= $detail_result[0]["price"] ?></span>
    </div>
    
    <div class="cart_btn" align="right" style="margin: 3%"><input type="hidden" id="insert_product" value="<?= $_GET['detail_pd'] ?>"><button id="cart_insert" type="submit">カートに追加</button></div>

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
            if($_GET['detail_pd']!=$pd){
                $compare_product[] = $pd;
            } 
        }
    }
    ?>
    
    <?php
    if(count($compare_product) > 0):
        echo '<h1>商品比較</h1><br>';
        $detail_range = array_values($detail_result[0]);
        $result = implode(",",$compare_product);
        $compare_sql = $pdo->query('select * from product INNER JOIN performance ON product.product_id=performance.product_id where product.product_id IN('.$result.')');
        $compare_result = $compare_sql->fetchAll();
        //$compare_range = $pdo->query('select MAX(*) from performance where performance.product_id IN(1,2,3,4)');
        foreach($compare_result as $row):
            $compare_range = array_values($row);
        ?>
            <div class="hikaku">
                <span style="display: inline-block; width: 150px;"><?= $row['product_name'] ?></span><br>
                <img src="./img/<?= $row['product_id'] ?>.png" class="compare_product_img">
            </div>
            <table border="1" class="compare_table">
                <?php for($i=0;$i<13;$i+=2): ?>
                    <?php if(isset($compare_range[$i+17]) && isset($detail_range[$i+17])): ?>
                        <tr>
                            <td><div style="display: inline-block; margin-top: 13px; font-size: 0.7em;">インターフェース</div></td>
                            <td>   
                                <input type="range" max="180" min="10" value="<?= $detail_range[($i+1)+17] ?>" id="detail_pd" class="detail_pd"/>
                                <br>
                                <input type="range" max="180" min="10" value="<?= $compare_range[$i+17] ?>" id="compare_pd" class="compare_pd"/>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endfor; ?>
            </table>
        <?php endforeach; ?>
    <?php endif; ?>
</form> 
    <?php require 'modules/navigation.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2/dist/vue.global.js"></script>
    <script src="https://unpkg.com/vue-star-rating@next/dist/VueStarRating.umd.min.js"></script>
    <script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
    <script src="./scripts/cart_insert.js"></script>
    <script src="./scripts/shohin-detail.js"></script>
    <script src="./scripts/range_design.js"></script>
    <?php require 'modules/footer.php'; ?>