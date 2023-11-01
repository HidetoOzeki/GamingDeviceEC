<?php require 'modules/header.php'; ?>
<?php require 'modules/serach.php'; ?>
    <h3>使用用途</h3><br>
    <div class="category_div">
        仕事用　　　　　　個人用
        <form>
            <label><input type="radio" name="purpose" class="none"><i class="fas fa-chalkboard-teacher fa-5x"></i></label>
            <label><input type="radio" name="purpose" class="none"><i class="fas fa-gamepad fa-5x"></i></label>
            <p>デバイスブランド</p>
            <label><input type="radio" name="bland" class="none"></label>
            <label><input type="radio" name="bland" class="none"></label>
            <label><input type="radio" name="bland" class="none"></label><br>
            <label><input type="radio" name="bland" class="none"></label>
            <label><input type="radio" name="bland" class="none"></label>
            <label><input type="radio" name="bland" class="none"></label>
            <p>カテゴリから選ぶ</p>
            <label><input type="radio" name="category" class="none"><i class="fas fa-mobile-alt fa-5x "></i></label>
            <label><input type="radio" name="category" class="none"><i class="fas fa-mouse fa-5x "></i></label>
            <label><input type="radio" name="category" class="none"><i class="fas fa-tv fa-5x"></i></label><br>
            <label><input type="radio" name="category" class="none"><i class="fas fa-microphone-alt fa-5x"></i></label>
            <label><input type="radio" name="category" class="none"><i class="fas fa-keyboard fa-5x"></i></label>
            <label><input type="radio" name="category" class="none"></label>
            <p>価格</p>
            <label><input type="radio" name="price">0-1500円</label>　　　　<label><input type="radio" name="price">100000円以上</label><br>
            <label><input type="radio" name="price">1500-10000円</label><br>
            <label><input type="radio" name="price">10000-50000円</label><br>
            <label><input type="radio" name="price">50000-100000円</label>　　　　<button type="submit">検索</button><br>
        </form>
    </div>
    <?php require 'modules/navigation.php'; ?>
    
<?php require 'modules/footer.php'; ?>
