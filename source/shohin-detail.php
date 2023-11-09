<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
<body>
<form action="kaimonokago.php">
    <div class="shohin">
        <img src="./img/monitor-img.png" class="product_detail_img">
    </div>
    <p>0.0   ☆☆☆   ￥~~~~~</p>
    <button type="submit">カートに追加</button>

    <style>
   h1{
        text-align:center;
        font-size:  25px; 
     }
    </style>
    
    <h1>商品比較</h1>
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
</form> 
    <?php require 'modules/navigation.php'; ?>
    
    <?php require 'modules/footer.php'; ?>