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

 <?php
 $username=$_SESSION['user']['user_name'];
 $userpassword=$_SESSION['user']['user_password'];
 ?>

 <div id="app">

 <p>ユーザーネーム</p>
    <input placeholder="ユーザーネーム" type="text" id="user_name" value=<?=$username?>>
 <p>パスワード</p>
    <input placeholder="パスワード" type="text" id="user_password" value=<?=$userpassword?>>
 <p>住所</p>
    <input placeholder="郵便番号を入力しEnterキーを押してください" v-bind="zipcode" type="address" id="user_address">
   </div>
</div>
<script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
<script src="./scripts/user_profile_update.js"></script>
<script src="./scripts/profile_address.js"></script>
<?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>