<?php require 'modules/header.php'; ?>
<?php
  echo '<h1 class="page_title">プロフィール編集</h1>';
  echo '<div class="centered_input_wide">';
      echo '<p class="level-item">ooo@oooooo</p>';
   echo '<i class="fas fa-user-circle fa-8x level-item"></i>';
   echo '<style>';
    echo  '.b{';
     echo    'float: right;';
    echo  '}';
   echo '</style>';
   echo '<form action="mypage.php">';
   echo '<p><button class="b button is-link" name="button" >保存</button></p>';
   echo '</form>';
   echo '<br>';
   echo '<p>ユーザーネーム</p>';
      echo '<input placeholder="ユーザーネーム" type="text">';
   echo '<p>パスワード</p>';
      echo '<input placeholder="パスワード" type="password">';
   echo '<p>住所</p>';
      echo '<input placeholder="住所" type="address">';
   echo '</div>';
?>
<?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>