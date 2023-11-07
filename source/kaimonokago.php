<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
<div class="centered_input_wide">
    <p>小計 ￥〇〇,〇〇〇</p>
    <p><form action="kakutei.php" method="post"><input type="submit" value="レジに進む(〇個の商品)[税込み]" id="button"></form></p>    
        <div class="purchase_product">
            <img src="./img/monitor-img.png" class="purchase_img">
            <h3>商品名</h3>
            <p>商品の値段</p>
            <p>その他詳細</p>
            <form><button class="button_de" type="submit">削除</button></form>
            <div id="app" class="app">
                <button class="decrease_btn" @click="decrease">-</button><div class="count"><input type="number" v-model="count" :value="count"></div><button @click="increase" class="increase_btn">+</button>
            </div>
        </div>
    </div>
<script src="./scripts/kaimonokago.js"></script>
<?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>