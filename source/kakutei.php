<?php session_start(); ?>
<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
<div class="centered_input_wide">
<form action="purchase_history.php" method="post">
    <p>お名前:<?= $_SESSION['user']["user_name"] ?></p>
    <p>配送先:<?= $_SESSION['user']["user_address"] ?></p>
    <p>お支払方法:現金</p>
    <?php for($i=0;$i<5;$i++): ?>
        <input type="hidden" name="purchase_pd[]" value="<?= $i ?>">
    <?php endfor; ?>
    <p v-if="!isValidPassword" class="has-text-danger">住所が未入力です</p>
    <p>小計:￥<?= $_GET['total_price'] ?></p>
    <button type="submit" id="purchase_btn" class="centered_button">注文を確定</button>
</form>
</div>
<?php require 'modules/navigation.php'; ?>
<script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
<script src="./scripts/purchase_insert.js"></script>
<?php require 'modules/footer.php'; ?>