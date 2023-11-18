<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
    <div class="syouhin" id="app">
        <div class="gazou_center">
        
        <?php for($i = 1;$i<=10;$i++): ?>
            <?php if($i%2==0): ?>
                <form action="shohin-detail.php" method="get" class="product_form">
                    <div class="container-heart">
                        <input type="hidden" name="detail_pd" value="<?= $i ?>" id="detail_pd">
                        <button type="submit" class="product_btn"><img src="img/monitor-img.png" class="product_img"/></button>
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
                        <input type="hidden" name="detail_pd" value="<?= $i ?>" id="detail_pd">
                        <button type="submit" class="product_btn"><img src="img/monitor-img.png" class="product_img"/></button>
                        <div class="temp">
                            <vue-star color="#F05654" id="vuestar">
                                <i slot="icon" class="fa fa-heart fa-lg" id="icon"></i>
                            </vue-star>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
        <?php endfor; ?>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue-star@0.0.4/dist/VueStar.js"></script>
    <script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
    <script src="./scripts/gamenitiran.js"></script>
    <script src="./scripts/compare_func.js"></script>
    <?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>