<?php require 'modules/db.php'?>
<?php require 'modules/header.php'; ?>
<?php
   $pdo = new PDO($connect,USER,PASS);
   $url= "https://zipcloud.ibsnet.co.jp/api/search?zipcode=";
   echo '<h1 class="page_title">プロフィール編集</h1>';
   echo '<div class="centered_input_wide">';
   echo '<p class="level-item">ooo@oooooo</p>';
   echo '<i class="fas fa-user-circle fa-8x level-item"></i>';
   echo '<style>';
   echo '.b{';
   echo 'float: right;';
   echo '}';
   echo '</style>';
   echo '<form action="mypage.php" method="post">';
   echo '<p><button class="b button is-link" name="button" >保存</button></p>';
   echo '<br>';
   echo '<p>ユーザーネーム</p>';
   echo '<input placeholder="ユーザーネーム" type="text">';
   echo '<p>パスワード</p>';
   echo '<input placeholder="パスワード" type="password">';
   echo '<p>住所</p>';
   echo '<input placeholder="住所または郵便番号を入力してください" type="address">';
   echo '</form>';
   echo '</div>';
?>
<?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>