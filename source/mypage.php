<?php session_start(); ?>
<?php require 'modules/db.php'; ?>
<?php require 'modules/header.php'; ?>
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

    <?php
    if(!isset($_SESSION['user'])){
      header('Location: login.php ');
    exit();
    }
    ?>

<form action="purchase_history.php">
    <h1 class="page_title">マイページ</h1>
    <p><?= $_SESSION['user']['mail_address'] ?></p>
 <div class="human">
      <i class="fas fa-user-circle fa-10x"></i>
</div>
    <p><?= $_SESSION['user']['user_name'] ?></p>
<div class="link">
    <a href="profile.php">プロフィール編集</a>
</div>  
    <p><input type="submit" value="購入履歴" class="button"></p>
      </form>
    
<?php require 'modules/navigation.php'; ?> 
<?php require 'modules/footer.php'; ?>