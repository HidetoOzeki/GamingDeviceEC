<?php require 'modules/header.php'; ?>

    <h1 class="page_title">新規登録</h1>

    <div id="app">
    

    <div class="centered_input_wide">
    <p>ユーザーネーム</p>
    <input placeholder="ユーザーネーム" type="text">

    <p>メールアドレス</p>
    <input placeholder="メールアドレス" type="text">

    <p>パスワード</p>
    <input v-model="password" placeholder="パスワード" type="password">
    </div>

    <br>
    <button class="centered_button">登録</button>
    <br>
    <button class="centered_button">スキップ</button>

    
    <p v-if="isValidPassword" class="has-text-danger">パスワードエラー</p>
    
    </div>
    <script src="scripts/signup.js" type="text/javascript"></script>

<?php require 'modules/footer.php'; ?>