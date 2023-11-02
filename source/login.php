<?php require 'modules/header.php'; ?>

    <h1 class="page_title">ログイン</h1>
<div class="centered_input_wide">
    <p>メールアドレス</p>
    <input placeholder="メールアドレス" type="text">

    <p>パスワード</p>
    <input placeholder="パスワード" type="password">
</div>
    <br>
    <a href="signup.php" class="sinki_rinku">←新規登録</a><br>
    <input class="centered_button" type="submit" value="マイページへ">

    <p v-if="!isValidPassword" class="has-text-danger">入力内容が間違っています。メールアドレス、またはパスワードが違います。</p>

    <script src="scripts/signup.js" type="text/javascript"></script>

<?php require 'modules/footer.php'; ?>
