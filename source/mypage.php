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
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo->prepare('select * from user where user_password=?');
    $sql->execute([$_POST['password']]);
    $result = $sql->fetchAll();
    ?>
<form action="purchase_history.php">
    <h1 class="page_title">マイページ</h1>
    <p><?= $result[0]["mail_address"] ?></p>
 <div class="human">
      <i class="fas fa-user-circle fa-10x"></i>
</div>
    <p><?= $result[0]["user_name"] ?></p>
<div class="link">
    <a href="profile.php">プロフィール編集</a>
</div>
    <p><input type="submit" value="購入履歴" class="button"></p>
      </form>
    
<?php require 'modules/navigation.php'; ?> 
<?php require 'modules/footer.php'; ?>