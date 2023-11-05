<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
    <div class="syouhin">
        <?php for($i = 1;$i<=6;$i++): ?>
            <?php if($i%2==0): ?>
                <form action="shohin-detail.php" method="get" class="product_form">
                    <div class="container-heart">
                        <button type="submit" class="product_btn"><img src="img/monitor-img.png" class="product_img"/></button>
                        <span><i class="far fa-heart heart_red fa-lg"></i></span>
                    </div>
                </form>
                <br>
            <?php else: ?>
                <form action="shohin-detail.php" method="get" class="product_form">
                    <div id="app" class="container-heart">
                        <button type="submit" class="product_btn"><img src="img/monitor-img.png" class="product_img"/></button>
                        <span><i class="far fa-heart heart_red fa-lg"></i></span>
                    </div>
                </form>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
    <script src="./scripts/gamenitiran.js"></script>
    <?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>