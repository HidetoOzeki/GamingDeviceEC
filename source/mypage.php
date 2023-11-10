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
    <h1 class="page_title">マイページ</h1>
    <p>ooo@oooooo</p>
 <div class="human">
      <i class="fas fa-user-circle fa-10x"></i>
</div>
    <p>ユーザーネーム</p>
<div class="link">
    <a href="profile.php" >プロフィール編集</a>
</div>
    <p><input type="button" value="購入履歴" class="button"></p>
    
<?php require 'modules/navigation.php'; ?> 
</body>
</html>