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
<form>
    <div class="shohin">
        <img src="./img/product_image/<?= $_GET['detail_pd'] ?>.png" class="product_detail_img">
    </div>
    <p><?= $detail_result[0]["product_name"] ,"/", $detail_result[0]["interface"] ,"/", $detail_result[0]["screen_clearly"] ,"/", $detail_result[0]["product_os"] ,"/", $detail_result[0]["product_size"] ,"/", $detail_result[0]["product_weight"] ,"/", $detail_result[0]["product_color"] ?></p>
    <div id="app" style="position: relative;">
        <star-rating :increment="0.1" :rating="<?= $detail_result[0]["avg_review_rate"] ?>" :max-rating="3" :read-only="true" :star-size="30"></star-rating>
        <span style="font-size: 1.5em" class="detail-prices">￥<?= $detail_result[0]["price"] ?></span>
    </div>
    <div class="cart_btn" align="right" style="margin: 3%"><input type="hidden" id="insert_product" value="<?= $_GET['detail_pd'] ?>"><button id="cart_insert" type="button">カートに追加</button></div>
    <style>
   h1{
        text-align: center;
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
        /*switch($detail_result[0]["category_id"]){
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
        }*/
        $max_column = $pdo->prepare('select MAX(cpu) as "CPU",MAX(memory) as "メモリ",MAX(storage) as "ストレージ",MAX(battery) as "バッテリー",MAX(size) as "サイズ",MAX(weight) as "重さ",MAX(screen_clearly) as "解像度" 
                                    from performance inner join product on performance.product_id=product.product_id 
                                    where category_id = ?');
        $max_column->execute([$detail_result[0]["category_id"]]);
        $max_obj = $max_column->fetchAll();
        echo '<h1>商品比較</h1>';
        echo '<span style="font-size: 0.9em; margin-left: 190px;"><span style="color: red;">赤色:選択商品</span> <span style="color: blue;">青色:比較商品</span></span>';
        $result = implode(",",$compare_product);
        $compare_sql = $pdo->query('select product.product_id, product_name, category_id, coalesce(cpu,"none") as "CPU", coalesce(memory,"none") as "メモリ", coalesce(storage,"none") as "ストレージ", coalesce(battery,"none") as "バッテリー", coalesce(size,"none") as "サイズ", coalesce(weight,"none") as "重さ",coalesce(screen_clearly,"none") as "解像度" 
                                    from product INNER JOIN performance ON product.product_id=performance.product_id 
                                    where product.product_id IN('.$result.')');
        $compare_result = $compare_sql->fetchAll();
        $range_array_key = array_keys($max_obj[0]);
        foreach($compare_result as $row):
            if($row['category_id']==$detail_result[0]["category_id"]):
        ?>
            <div style="margin-bottom: 6%;">
                <div class="hikaku">
                    <span style="display: inline-block; width: 120px; margin-left: 15px;"><?= $row['product_name'] ?></span><br>
                    <img src="./img/product_image/<?= $row['product_id'] ?>.png" class="compare_product_img">
                </div>
                <table border="1" class="compare_table" style="display: inline-block;">
                    <?php for($i=0;$i<7;$i++):                    
                        if($row[$range_array_key[$i*2]]!="none" && $detail_result[0][$range_array_key[$i*2]]!="none"): ?>
                            <tr>
                                <td><div style="display: inline-block; margin-top: 13px; font-size: 0.7em;"><?= $range_array_key[$i*2] ?></div></td>
                                <td>
                                    <input type="range" max="<?= $max_obj[0][$range_array_key[$i*2]] ?>" min="0" value="<?= $detail_result[0][$range_array_key[$i*2]] ?>" id="detail_pd" class="detail_pd"/>
                                    <br>
                                    <input type="range" max="<?= $max_obj[0][$range_array_key[$i*2]] ?>" min="0" value="<?= $row[$range_array_key[$i*2]] ?>" id="compare_pd" class="compare_pd"/>
                                </td>
                                <td style="width: 40px;"><div><?= $detail_result[0][$range_array_key[$i*2]] ?></div><div><?= $row[$range_array_key[$i*2]] ?></div></td>
                            </tr>
                        <?php endif; ?>
                    <?php endfor; ?>
                </table>
            </div> 
            <?php else: ?>
                <div style="padding-bottom: 5%;">
                    <h3 style="text-align: center;"><?= $row['product_name'] ?>は同じカテゴリーの製品ではありません。</h3>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <h1>商品レビュー</h1>
    <div id="review">
        <?php
        $sql = $pdo->prepare('select * from review inner join user on review.user_id=user.user_id where product_id = ? and user_delete_flg="false"');
        $sql->execute([$_GET['detail_pd']]);
        $fetch_sql = $sql->fetchAll();
        if(!empty($fetch_sql)):
            foreach($fetch_sql as $row): ?>
                <div style="margin-bottom: 4%;">
                    <div style="padding: 2.7% 2% 0% 4%; float:left;"><i class="fas fa-user-circle fa-2x"></i></div>
                    <div>
                        <span><?= $row['user_name'] ?></span><br>
                        <star-rating :increment="0.1" :rating="<?= $row['review_rate'] ?>" :max-rating="3" :read-only="true" :star-size="18" style="display: inline-block;"></star-rating>
                        <span style="margin-left: 44%; font-size: 0.8em;"><?= $row['post_date'] ?></span><br>
                        <div style="margin-left: 13%; width: 85%;"><?= $row['review_contents'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <h2 style="text-align: center; font-size: 15px;">レビューがありません。</h2>
        <?php endif; ?>
    </div>
</form> 
    <?php require 'modules/navigation.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2/dist/vue.global.js"></script>
    <script src="https://unpkg.com/vue-star-rating@next/dist/VueStarRating.umd.min.js"></script>
    <script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
    <script src="./scripts/cart_insert.js"></script>
    <script src="./scripts/shohin-detail.js"></script>
    <script src="./scripts/range_design.js"></script>
    <?php require 'modules/footer.php'; ?>