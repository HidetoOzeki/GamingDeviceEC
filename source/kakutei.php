<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
<div class="centered_input_wide">
<form action="purchase_history.php" method="post">
    <p>お名前:</p>
    <p>配送先:</p>
    <p>お支払方法:現金</p>
    <p v-if="!isValidPassword" class="has-text-danger">住所が未入力です</p>
    <p>小計:￥</p>
    <input class="centered_button" type="submit" value="注文を確定">
</form>
</div>
    <?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>