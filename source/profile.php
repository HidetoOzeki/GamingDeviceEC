<?php require 'modules/header.php'; ?>
 <h1 class="page_title">プロフィール編集</h1>
 <div class="centered_input_wide">
 <i class="fas fa-user-circle fa-5x level-item"></i>
 <style>
   .b{
      float: right;
   }
 </style>
 <p><button class="b button is-link" name="button" >保存</button></p>
 
 <p>ユーザーネーム</p>
    <input placeholder="ユーザーネーム" type="text">
 <p>パスワード</p>
    <input placeholder="パスワード" type="password">
 <p>住所</p>
    <input placeholder="住所" type="address">
</div>
<?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>