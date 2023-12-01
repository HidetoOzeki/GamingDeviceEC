<h1 class="page_title">商品追加情報</h1>
    <form action="toroku.php" method="post">
    <div class="centered_input_wide">
    
    <p>カテゴリーID</p>
    <input placeholder="" type="text" name="add_product[]" required>
    <p>ブランドID</p>
    <input placeholder="" type="text" name="add_product[]" required>
    <p>仕様用途</p>
    <input placeholder="" type="text" name="add_product[]" required>
    <p>商品名</p>
    <input placeholder="" type="text" name="add_product[]" value="<?= $_POST['input_name'] ?>" required>
    <p>値段</p>
    <input placeholder="" type="text" name="add_product[]" required>
    <p>スペックID</p>
    <input placeholder="" type="text" name="spec_id" required>
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
    <p>パフォーマンスID</p>
    <input placeholder="" type="text" name="performance_id" required>
    <p>CPU</p>
    <input placeholder="" type="text" name="performance_cpu" required>
    <p>メモリ</p>
    <input placeholder="パスワード" name="performance_memory" type="text">
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
</div>
   <br>
    <a href="signup.php" class="sinki_rinku">←新規登録</a><br>
    <button type="submit" class="centered_button button is-info is-outlined is-rounded" id="mypage_transition" >マイページへ<i class="far fa-hand-point-right"></i></button>
    </form>