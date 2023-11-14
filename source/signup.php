<?php require 'modules/header.php'; ?>
<?php

    echo '<h1 class="page_title">新規登録</h1>';

    echo '<div id="app">';
    

    echo '<div class="centered_input_wide">';
    echo '<p>ユーザーネーム</p>';
    echo '<input placeholder="ユーザーネーム" type="text">';

    echo '<p>メールアドレス</p>';
    echo '<input placeholder="メールアドレス" type="text">';

    echo '<p>パスワード</p>';
    echo '<input v-model="password" placeholder="パスワード" type="password"></div><br>';
    echo '<button class="centered_button">登録</button><br>';
    echo '<button class="centered_button">スキップ</button>';
    
    echo '<p v-if="!isValidPassword" class="has-text-danger">有効なメールアドレスではありません。半角英数字を含む〇文字以上で入力してください。</p></div>';
    echo '<script src="scripts/signup.js" type="text/javascript"></script>';
    ?>

<?php require 'modules/footer.php'; ?>