<?php require 'modules/header.php'; ?>
<?php require 'modules/serach.php'; ?>
    <h3>使用用途</h3><br>
    <div class="category_div">
        仕事用　　　　　　個人用
        <form>
            <label><input type="radio" name="purpose" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label>
            <label><input type="radio" name="purpose" class="none"><img src="./img/ゲームコントローラのアイコン.png" class="personal"></label>
            <p>デバイスブランド</p>
            <label><input type="radio" name="bland" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label>
            <label><input type="radio" name="bland" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label>
            <label><input type="radio" name="bland" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label><br>
            <label><input type="radio" name="bland" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label>
            <label><input type="radio" name="bland" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label>
            <label><input type="radio" name="bland" class="none"><img src="" class="bland"></label>
            <p>カテゴリから選ぶ</p>
            <label><input type="radio" name="category" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label>
            <label><input type="radio" name="category" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label>
            <label><input type="radio" name="category" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label><br>
            <label><input type="radio" name="category" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label>
            <label><input type="radio" name="category" class="none"><img src="./img/0044-simple-art-m.png" class="worker"></label>
            <label><input type="radio" name="category" class="none"><img src="" class="category"></label>
            <p>価格</p>
            <label><input type="radio" name="price">0-1500円</label>　　　　<label><input type="radio" name="price">100000円以上</label><br>
            <label><input type="radio" name="price">1500-10000円</label><br>
            <label><input type="radio" name="price">10000-50000円</label><br>
            <label><input type="radio" name="price">50000-100000円</label>　　　　<button type="submit">検索</button><br>
        </form>
    </div>
    <div id="nav" class="nav">
        <button class="home"><i class="fas fa-home fa-3x"></i></button>
        <button class="cart"><i class="fas fa-shopping-cart fa-3x"></i></button>
        <button class="user"><i class="fas fa-user fa-3x"></i></button>
        <button class="user1"><i class="fas fa-user fa-3x"></i></button>
    </div>
    <?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>
