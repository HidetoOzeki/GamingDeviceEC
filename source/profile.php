<?php session_start(); ?>
<?php require 'modules/header.php'; ?>
 <h1 class="page_title">プロフィール編集</h1>
 <div class="centered_input_wide">
   <p class="level-item"><?= $_SESSION['user']['mail_address'] ?></p>
 <i class="fas fa-user-circle fa-10x level-item"></i>
 <style>
   .b{
      float: right;
   }
 </style>
<form action="mypage.php">
 <p><button type="submit" class="b button is-link" id="register_btn">保存</button></p>
</form>
 <br>
 <p>ユーザーネーム</p>
    <input placeholder="ユーザーネーム" type="text" id="user_name">
 <p>パスワード</p>
    <input placeholder="パスワード" type="password" id="user_password">
 <p>住所</p>
    <input placeholder="住所" type="address" id="user_address">
</div>
<script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
<script src="./scripts/user_profile_update.js"></script>
<?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>