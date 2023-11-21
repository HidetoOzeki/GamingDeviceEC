<?php require 'modules/header.php'; ?>


<?php
    echo '<h1 class="page_title">ログイン</h1>';
    echo '<form action="mypage.php" method="post" id="check_form">';
    echo '<div class="centered_input_wide">';
    echo '<p>メールアドレス</p>';
    echo '<input placeholder="メールアドレス" type="text" id="mail_address">';

    echo '<p>パスワード</p>';
    echo '<input placeholder="パスワード" name="password" type="password" id="password">';
    echo '</div>';
    echo '<br>';
    echo '<a href="signup.php" class="sinki_rinku">←新規登録</a><br>';
    echo '<button class="centered_button" id="mypage_transition" type="button">マイページへ</button>';
    echo '</form>';


    echo '<p class="has-text-danger" id="check_input"></p>';
    
?>
<script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
<script src="./scripts/login_select.js"></script>
<?php require 'modules/footer.php'; ?>
