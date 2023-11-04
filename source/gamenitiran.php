<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
    <div class="syouhin">
        <?php for($i = 1;$i<=6;$i++): ?>
            <?php if($i%2==0): ?>
                <img src="img/syouhin1.jpg" class="product_img"/><br>
            <?php else: ?>
                <img src="img/monitor-img.png" class="product_img"/>
            <?php endif; ?>
        <?php endfor; ?>
    </div>    
    <?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>