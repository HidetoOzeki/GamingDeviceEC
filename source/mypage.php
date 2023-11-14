<!DOCTYPE html>
<?php require 'modules/header.php'; ?>
<html lang="ja">
<head>
    <style>
        p{
          text-align:center;
        }
       .human {
          text-align:center;
        }
        .link{
          text-align:center;
    
          margin-left:120px
        }
        .button {
          text-align:center;
       margin-top: 5%;
    margin-bottom: 5%;
    width: 100px;
    border: 0;
    background-color: lightgray;
    padding-top: 16px;
    padding-bottom: 40px;
        }
        .fa-user-circle{
        
        }
    </style>
</head>
<body>
  <?php
echo '<form action="purchase_history.php">';
echo '<h1 class="page_title">マイページ</h1>';
echo '<p>ooo@oooooo</p>';
echo '<div class="human">';
echo '<i class="fas fa-user-circle fa-10x"></i>';
echo '</div>';
echo '<p>ユーザーネーム</p>';
echo '<div class="link">';
echo '<a href="profile.php" >プロフィール編集</a>';
echo '</div>';
echo '<p><input type="submit" value="購入履歴" class="button"></p>';
echo '</form>';
    ?>
<?php require 'modules/navigation.php'; ?> 
</body>
</html>