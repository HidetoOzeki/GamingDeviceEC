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
$sql = $pdo->prepare('select product.product_name, product.category_id, price, interface, product_spec.screen_clearly, product_os, product_size, product_weight, product_color,
                     (select ROUND(AVG(review_rate),1) from review WHERE product_id=?) as "avg_review_rate",
                      coalesce(cpu,"none") as "CPU", coalesce(memory,"none") as "メモリ", coalesce(storage,"none") as "ストレージ", coalesce(battery,"none") as "バッテリー", coalesce(size,"none") as "サイズ", coalesce(weight,"none") as "重さ",coalesce(performance.screen_clearly,"none") as "解像度" 
                      from product INNER JOIN performance ON product.product_id=performance.product_id INNER JOIN product_spec ON product.product_id=product_spec.product_id where product.product_id=?');
$sql->execute([$_GET['detail_pd'],$_GET['detail_pd']]);
$detail_result = $sql->fetchAll();
?>
<form action="kaimonokago.php">
    <div class="shohin">
        <img src="./img/product_image/<?= $_GET['detail_pd'] ?>.png" class="product_detail_img">
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
        switch($detail_result[0]["category_id"]){
            case "000001":
                $max_items = "MAX(cpu) as 'CPU',MAX(memory) as 'メモリ',MAX(storage) as 'ストレージ',MAX(size) as 'サイズ',MAX(weight) as '重さ'";
                break;
            case "000002":
                $max_items = "MAX(size) as 'サイズ',MAX(weight) as '重さ'";
                break;
            case "000003":
                $max_items = "MAX(size) as 'サイズ',MAX(screen_clearly) as '解像度',MAX(weight) as '重さ'";
                break;
            case "000004":
                $max_items = "MAX(size) as 'サイズ',MAX(weight) as '重さ'";
                break;
            case "000005":
                $max_items = "MAX(battery) as 'バッテリー',MAX(screen_clearly) as '解像度',MAX(weight) as '重さ'";
                break;
        }
        $max_column = $pdo->query('select '.$max_items.' from performance');
        $max_obj = $max_column->fetchAll();
        echo '<h1>商品比較</h1><br>';
        $result = implode(",",$compare_product);
        $compare_sql = $pdo->query('select product.product_id, product_name, category_id, coalesce(cpu,"none") as "CPU", coalesce(memory,"none") as "メモリ", coalesce(storage,"none") as "ストレージ", coalesce(battery,"none") as "バッテリー", coalesce(size,"none") as "サイズ", coalesce(weight,"none") as "重さ",coalesce(screen_clearly,"none") as "解像度" from product INNER JOIN performance ON product.product_id=performance.product_id where product.product_id IN('.$result.')');
        $compare_result = $compare_sql->fetchAll();
        foreach($compare_result as $row):
            if($row['category_id']==$detail_result[0]["category_id"]):
        ?>
                <div class="hikaku">
                    <span style="display: inline-block; width: 150px;"><?= $row['product_name'] ?></span><br>
                    <img src="./img/product_image/<?= $row['product_id'] ?>.png" class="compare_product_img">
                </div>
                <table border="1" class="compare_table">
                    <?php for($i=0;$i<7;$i++):
                        $range_array = array_slice($row, 6, 17);
                        $range_array_key = array_keys($range_array);
                        
                        
                        if($range_array[$i]!="none"): ?>
                            <tr>
                                <td><div style="display: inline-block; margin-top: 13px; font-size: 0.7em;"><?= $range_array_key[$i*2] ?></div></td>
                                <td>
                                    <input type="range" max="<?= $max_obj[0][$range_array_key[$i*2]] ?>" min="0" value="<?= $detail_result[0][$range_array_key[$i*2]] ?>" id="detail_pd" class="detail_pd"/>
                                    <br>
                                    <input type="range" max="<?= $max_obj[0][$range_array_key[$i*2]] ?>" min="0" value="<?= $range_array[$i] ?>" id="compare_pd" class="compare_pd"/>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endfor; ?>
                </table>
            <?php endif; ?>
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