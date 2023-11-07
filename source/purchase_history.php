<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'?>

<h1 class="page_title">購入履歴</h1>

<div class="purchase_history">
    <?php for($i = 0;$i < 6;$i++): ?>
    <div class="purchased_item">
    <img class="purchased_item_img" src="img/monitor-img.png" alt="">
    <div class="purchased_item_description">
        <button>レビューを書く</button>
    </div>

    </div>
    <?php endfor; ?>

</div>


<?php require 'modules/navigation.php';?>
<?php require 'modules/footer.php'; ?>