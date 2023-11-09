<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./modules/モジュール用CSS/search_box.css">
    <link rel="stylesheet" href="./modules/モジュール用CSS/navigation.css">
    <link rel="stylesheet" href="./style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require 'modules/serach_box.php'; ?>
    <div class="shohin">
        <img src="./img/monitor-img.png" class="product_detail_img">
    </div>
    
    <div id="app" class="star_div">
        <star-rating :increment="0.5" :rating="2.5" :max-rating="3" :read-only="true" :star-size="30"></star-rating>
    </div>
    <span>￥~~~~~</span>
    <div class="cart_btn" align="right"><button type="submit">カートに追加</button></div>


    
    <h2>商品比較</h2>
    <p>ゲーミングモニター/27/~~</p>
    <div class="hikaku">
        <img src="./img/monitor-img.png" class="compare_product_img">
    </div>
    
    <div id="app">
        <p>
            <span>???：</span>
            <input
            v-model="range"
            type="range"
            max="500"
            min="10"
            />???
        </p>
        <p>
            <span>???：</span>
            <input
            v-model="red"
            type="range"
            max="255"
            min="0"
            />???
        </p>
        <p>
            <span>???：</span>
            <input
            v-model="green"
            type="range"
            max="255"
            min="0"
            />???
        </p>
        <p>
            <span>???：</span>
            <input
            v-model="blue"
            type="range"
            max="255"
            min="0"
            />???
        </p>
        <div
        :style="bindStyle"
        ></div>
    </div>
    
    <?php require 'modules/navigation.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2/dist/vue.global.js"></script>
    <script src="https://unpkg.com/vue-star-rating@next/dist/VueStarRating.umd.min.js"></script>
    <script src="./scripts/shohin-detail.js"></script>
    <?php require 'modules/footer.php'; ?>