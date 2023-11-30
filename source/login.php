<?php require 'modules/header.php'; ?>




    <h1 class="page_title">ログイン</h1>
    <form action="mypage.php" method="post" id="check_form">
    <div class="centered_input_wide">
    
    <p>メールアドレス</p>
    <input placeholder="メールアドレス" type="text" id="mail_address">

    <p>パスワード</p>
    <input placeholder="パスワード" name="password" type="password" id="user_password">
    </div>
   <br>
    <a href="signup.php" class="sinki_rinku">←新規登録</a><br>
    <button type="button" class="centered_button button is-info is-outlined is-rounded" id="mypage_transition" >マイページへ<i class="far fa-hand-point-right"></i></button>
    </form>


    <p class="has-text-danger" id="check_input"></p>
    
<script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
<script src="./scripts/login_select.js"></script>
<?php require 'modules/footer.php'; ?>
