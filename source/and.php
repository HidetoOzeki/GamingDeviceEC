<?php require 'modules/header.php'; ?>
<h1 class="page_title">商品追加情報</h1>
    
<div id="app" class="centered_input_wide">
    <form action="toroku.php" method="post">
    <p>カテゴリーID (必須!)</p>
    <input placeholder="" type="text" name="add_product[]" required>
    <p>ブランドID (必須!)</p>
    <input placeholder="" type="text" name="add_product[]" required>
    <p>仕様用途 (必須!)</p>
    <input placeholder="" type="text" name="add_product[]" required>
    <p>商品名 (必須!)</p>
    <input placeholder="" type="text" name="add_product[]" value="<?= $_POST['input_name'] ?>" required>
    <p>値段 (必須!)</p>
    <input placeholder="" type="text" name="add_product[]" required>
    <p>インターフェース (必須!)</p>
    <input placeholder="" type="text" name="spec_interface" required>
    <p>スペック解像度 (必須!)</p>
    <input placeholder="" type="text" name="spec_clearly" required>
    <p>OS (必須!)</p>
    <input placeholder="" type="text" name="spec_os" required>
    <p>スペックサイズ (必須!)</p>
    <input placeholder="" type="text" name="spec_size" required>
    <p>スペック重さ (必須!)</p>
    <input placeholder="" type="text" name="spec_weight" required>
    <p>色 (必須!)</p>
    <input placeholder="" type="text" name="spec_color" required>
    <p>CPU (必須!)</p>  
    <input placeholder="" type="text" name="performance_cpu" required>
    <p>メモリ (任意)</p>
    <input placeholder="" name="performance_memory" type="text">
    <p>ストレージ (任意)</p>
    <input placeholder="" type="text" name="performance_storage">
    <p>バッテリー (任意)</p>
    <input placeholder="" type="text" name="performance_battery">
    <p>パフォーマンスサイズ (任意)</p>
    <input placeholder="" type="text" name="performance_size">
    <p>パフォーマンス解像度 (任意)</p>
    <input placeholder="" type="text" name="performance_clearly">
    <p>パフォーマンス重さ (任意)</p>
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