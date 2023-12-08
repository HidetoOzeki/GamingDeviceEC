<?php session_start(); ?>
<?php
if(!isset($_SESSION['user'])){
    header("location: login.php");
    exit();
}
?>
<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>

<div id="app" class="centered_input_wide">
<span v-if="check_item">
    <p>小計 ￥{{price}}</p>
    <p><form action="kakutei.php" method="get"><input type="submit" :value="`レジに進む(${items.length}個の商品)[税込み]`" id="button"><input type="hidden" name="total_price" v-model="price"><span v-for="(post_item,s) in items" :post_key="s"><input type="hidden" name="purchase_pd[]" :value="post_item.product_id"><input type="hidden" name="purchase_amount[]" v-model="amounts[s]"></span></form></p>
    <div v-for="(item,i) in items" :key="i" class="purchase_product">
        <img :src="`./img/product_image/${item.product_id}.png`" class="purchase_img">
        <h3>{{item.product_name}}</h3>
        <p>￥{{item.price}}</p>
        <p>{{item.cart_date}}</p>
        <form><button @click="delete_btn(item.product_id,i)" class="button_de" type="button">削除</button></form>
        <div class="stepper-app">
            <button class="decrease_btn" @click="decrease(i)">-</button><div class="count"><input type="number" v-model="amounts[i]" readonly"></div><button @click="increase(i)" class="increase_btn">+</button>
        </div>
    </div>
</span>
<span v-else><p style="text-align: center; font-size: 1.5em;">カートに商品がありません。</p></span>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
<script src="./scripts/kaimonokago.js"></script>
<?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>