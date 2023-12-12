<?php session_start(); ?>
<?php
if(!isset($_SESSION['user'])){
    header("location: login.php");
    exit();
}
?>
<?php require 'modules/db.php'; ?>
<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
<?php
$pdo = new PDO($connect,USER,PASS);
$sql = $pdo->query('select * from bland');
?>
    <h3>使用用途</h3><br>
    <div class="category_div">
        　仕事用　　　　　　　　　個人用
        <form action="shouhinichiran.php" id="app" method="get">
            <label><input type="radio" name="purpose" value="W" class="none"><i class="fas fa-chalkboard-teacher fa-5x"></i></label>
            <label><input type="radio" name="purpose" value="P" class="none"><i class="fas fa-gamepad fa-5x"></i></label>
            <p>デバイスブランド</p>
            <?php foreach($sql as $row): ?>
                <label class="bland_label"><input type="radio" name="bland" value="<?= $row['bland_id'] ?>" class="none"><img src="./img/<?= $row['bland_id'] ?>.png" class="bland-image"></label>
            <?php
            
            endforeach;
            ?>
            <p>カテゴリから選ぶ</p>
            <span class="category_span" v-for="(item,j) in category" :category_key="j"><label><input type="radio" :value="`00000${j+1}`" name="category_id" class="none"><i :class="item"></i></label></span>
            <p>価格</p>
            <div class="wrap">
                <div v-for="(price,s) in pricerange" :price_key="s">
                    <label>
                        <input type="radio" :value="`${s}`" name="price">{{price}}
                    </label>
                    <br>
                </div>
                　　　　
                <p class="price">
                    <label>
                        <input type="radio" value="4" name="price">100000円以上
                    </label>
                </p>
                <button type="submit" style="position: absolute; top: 70%; right: 25%" class="button is-info is-outlined is-rounded" >検索</button>
            </div>
        </form>
    </div>
    <script src="./scripts/category_list.js"></script>
    <?php require 'modules/navigation.php'; ?>
    
<?php require 'modules/footer.php'; ?>
