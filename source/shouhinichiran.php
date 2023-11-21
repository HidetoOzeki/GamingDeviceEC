<?php require 'modules/db.php'?>
<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
        <?php
        $pdo = new PDO($connect,USER,PASS);
        if(isset($_GET['purpose']) || isset($_GET['bland']) || isset($_GET['price'])):
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
                        $price_inform = '1';
                        break;
                    case '0';
                        $price_inform = '1';
                        break;
                }
                $verify[] = "price > ".$_GET['price'];
            }
            $msg = implode(" and ",$verify);
            $sql = $pdo->query('select * from product where '.$msg.'');
        ?>
        <?php else: ?>
            <?php $sql = $pdo->query('select * from product'); ?>
        <?php endif; ?>
    <div class="syouhin" id="app">
        <div class="gazou_center">
            <?php
            $i = 1;
            foreach($sql as $row): ?>
                <?php if($i%2==0): ?>
                    <form action="shohin-detail.php" method="get" class="product_form">
                        <div class="container-heart">
                            <input type="hidden" name="detail_pd" value="<?= $row['product_id'] ?>" id="detail_pd">
                            <button type="submit" class="product_btn"><img src="./img/<?= $row['product_id'] ?>.png" class="product_img"/></button>
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
                            <button type="submit" class="product_btn"><img src="./img/<?= $row['product_id'] ?>.png" class="product_img"/></button>
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue-star@0.0.4/dist/VueStar.js"></script>
    <script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
    <script src="./scripts/gamenitiran.js"></script>
    <script src="./scripts/compare_func.js"></script>
    <?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>