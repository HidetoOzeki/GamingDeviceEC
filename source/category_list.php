<?php require 'modules/header.php'; ?>
<?php require 'modules/serach_box.php'; ?>
    <h3>使用用途</h3><br>
    <div class="category_div">
        仕事用　　　　　　個人用
        <form id="app">
            <label><input type="radio" name="purpose" class="none"><i class="fas fa-chalkboard-teacher fa-5x"></i></label>
            <label><input type="radio" name="purpose" class="none"><i class="fas fa-gamepad fa-5x"></i></label>
            <p>デバイスブランド</p>
            <label v-for="(image,i) in images" :bland_key="i"><input type="radio" name="bland" class="none"><img :src="image" class="category-image"></label>
            
            <p>カテゴリから選ぶ</p>
            <span class="category_span"><a v-for="(item,j) in category" :category_key="j" href="categoribetu.php" class="categories"><i :class="item"></i></a></span>
            <a href="categoribetu.php"></a>
            <p>価格</p>
            <label v-for="(price,s) in pricerange" :price_key="s"><input type="radio" name="price">{{price}}<br></label><label><input type="radio" name="price">100000円以上</label><br>
            <button type="submit">検索</button><br>
        </form>
    </div>
    <script src="./scripts/category_list.js"></script>
    <?php require 'modules/navigation.php'; ?>
    
<?php require 'modules/footer.php'; ?>
