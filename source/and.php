<?php require 'modules/header.php'; ?>
<h1 class="page_title">商品追加情報</h1>
    
<div id="app" class="centered_input_wide">
    <form action="toroku.php" method="post">
        <p>カテゴリーID</p>
        <input placeholder="" type="number" @input="category_check" v-model="category_id" name="add_product[]" min="1" max="6" required>
        
        <p>ブランドID</p>
        <input placeholder="" type="number" @input="bland_check" v-model="bland_id" name="add_product[]" min="1" max="13" required>
        
        <p>仕様用途</p>
        <input placeholder="" type="text" name="add_product[]" maxlength="1" required>
        <p>商品名</p>
        <input placeholder="" type="text" name="add_product[]" value="<?= $_POST['input_name'] ?>" required>
        <p>値段</p>
        <input placeholder="" type="text" name="add_product[]" required>
        <p>インターフェース</p>
        <input placeholder="" type="text" name="spec_interface" required>
        <p>スペック解像度</p>
        <input placeholder="" type="text" name="spec_clearly" required>
        <p>OS</p>
        <input placeholder="" type="text" name="spec_os" required>
        <p>スペックサイズ</p>
        <input placeholder="" type="text" name="spec_size" required>
        <p>スペック重さ</p>
        <input placeholder="" type="text" name="spec_weight" required>
        <p>色</p>
        <input placeholder="" type="text" name="spec_color" required>
        <p>CPU</p>
        <input placeholder="" type="text" name="performance_cpu">
        <p>メモリ</p>
        <input placeholder="" name="performance_memory" type="text">
        <p>ストレージ</p>
        <input placeholder="" type="text" name="performance_storage">
        <p>バッテリー</p>
        <input placeholder="" type="text" name="performance_battery">
        <p>パフォーマンスサイズ</p>
        <input placeholder="" type="text" name="performance_size">
        <p>パフォーマンス解像度</p>
        <input placeholder="" type="text" name="performance_clearly">
        <p>パフォーマンス重さ</p>
        <input placeholder="" type="text" name="performance_weight">
        <br>
        <span v-if="submit_check">
            <button type="submit" class="centered_button button is-info is-outlined is-rounded" id="mypage_transition" disabled>商品登録<i class="far fa-hand-point-right"></i></button>    
        </span>
        <span v-else>
            <button type="submit" class="centered_button button is-info is-outlined is-rounded" id="mypage_transition">商品登録<i class="far fa-hand-point-right"></i></button>
        </span>
    </form>
</div>
   
    
    <script src="./scripts/and.js"></script>
<?php require 'modules/footer.php'; ?>