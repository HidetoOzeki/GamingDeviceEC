<?php require 'modules/db.php'?>
<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
        <?php
        $pdo = new PDO($connect,USER,PASS);
        if(isset($_GET['product_name'])){
            $search_product = "%".$_GET['product_name']."%";
            $serach_sql = $pdo->prepare('select * from product where product_name LIKE ? and product_delete_flg = "false"');
            $serach_sql->execute([$search_product]);
            $sql = $serach_sql->fetchAll();
        }else if(isset($_GET['purpose']) || isset($_GET['bland']) || isset($_GET['price'])):
            $verify = [];
            if(isset($_GET['purpose'])){
                $verify[] = "purpose_id = '".$_GET['purpose']."'";
            }
            if(isset($_GET['bland'])){
                $verify[] = "bland_id = '".$_GET['bland']."'";
            }
            if(isset($_GET['price'])){
                switch($_GET['price']){
                    case '0';
                        $price_first = 0;
                        $price_last = 1500;
                        break;
                    case '1';
                        $price_first = 1500;
                        $price_last = 10000;
                        break;
                    case '2';
                        $price_first = 10000;
                        $price_last = 50000;
                        break;
                    case '3';
                        $price_first = 50000;
                        $price_last = 99999;
                        break;
                    case '4';
                        $price_first = 100000;
                        $price_last = 900000000;
                        break;
                }
                $verify[] = $price_first." <= price and price < ".$price_last;
            }
            $msg = implode(" and ",$verify);
            $sql = $pdo->query('select * from product where '.$msg.' and product_delete_flg = "false"');
        ?>
        <?php else: ?>
            <?php $sql = $pdo->query('select * from product where product_delete_flg = "false"'); ?>
        <?php endif; ?>
    <div class="syouhin" id="app">
        <div class="gazou_center">
            <?php
            $product_result = $sql->fetchAll();
            $i = 1;
            if(!empty($product_result)):
                foreach($product_result as $row):
                    if($row['product_delete_flg']=='true')
                        continue;
                ?>
                    <?php if($i%2==0): ?>
                        <form action="shohin-detail.php" method="get" class="product_form">
                            <div class="container-heart">
                                <input type="hidden" name="detail_pd" value="<?= $row['product_id'] ?>" id="detail_pd">
                                <button type="submit" class="product_btn"><img src="./img/product_image/<?= $row['product_id'] ?>.png" class="product_img"/></button>
                                <div class="temp">
                                    <vue-star color="#F05654">
                                        <i slot="icon" class="fa fa-heart fa-lg" id="icon"></i>
                                    </vue-star>
                                </div>
                            </div>
                        </form>
                        <br>
                    <?php else: ?>
                        <form action="shohin-detail.php" method="get" class="product_form">
                            <div class="container-heart">
                                <input type="hidden" name="detail_pd" value="<?= $row['product_id'] ?>" id="detail_pd">
                                <button type="submit" class="product_btn"><img src="./img/product_image/<?= $row['product_id'] ?>.png" class="product_img"/></button>
                                <div class="temp">
                                    <vue-star color="#F05654" id="vuestar">
                                        <i slot="icon" class="fa fa-heart fa-lg" id="icon"></i>
                                    </vue-star>
                                </div>
                            </div>
                        </form>
                    <?php endif; ?>
                <?php
                $i++;
                endforeach; ?>
            <?php else: ?>
                <h1>商品が見つかりません</h1>
            <?php endif; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue-star@0.0.4/dist/VueStar.js"></script>
    <script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
    <script src="./scripts/gamenitiran.js"></script>
    <script src="./scripts/compare_func.js"></script>
    <?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>