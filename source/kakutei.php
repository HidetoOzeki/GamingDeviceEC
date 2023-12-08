<?php session_start(); ?>
<?php require 'modules/db.php'?>
<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>

<div class="centered_input_wide">
<form>
    <p>お名前:<?= $_SESSION['user']["user_name"] ?></p>
    <p>配送先:<?php if((!is_null($_SESSION['user']["user_address"])) && (!empty($_SESSION['user']["user_address"]))){
                        echo $_SESSION['user']["user_address"];
                    }else {
                        echo '-----------';
                        $msg = "住所が未入力です";
                    } ?></p>
    <p>お支払方法:現金</p>
    <?php for($i=0;$i<count($_GET['purchase_pd']);$i++): ?>
        <input type="hidden" name="purchase_pd[]" class="hidden_pd_num" value="<?= $_GET['purchase_pd'][$i] ?>">
        <input type="hidden" name="purchase_pd[]" class="hidden_amount" value="<?= $_GET['purchase_amount'][$i] ?>">
    <?php endfor; ?>
    <?php if(isset($msg)): ?>
        <p style="margin-left: 120px;"><?= $msg ?></p>
    <?php endif; ?>
    <p>小計:￥<?= $_GET['total_price'] ?></p>
    <?php if(isset($msg)): ?>
        <button type="button" id="purchase_btn" class="centered_button" disabled>注文を確定</button>
    <?php else: ?>
        <button type="button" id="purchase_btn" class="centered_button">注文を確定</button>
    <?php endif; ?>
</form>
</div>
<?php require 'modules/navigation.php'; ?>
<script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
<script src="./scripts/purchase_insert.js"></script>
<?php require 'modules/footer.php'; ?>