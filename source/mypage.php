<?php session_start(); ?>
<?php require 'modules/db.php'; ?>
<?php require 'modules/header.php'; ?>
<?php require 'modules/utilcommon.php'; ?>


<?php
  
  if(!isset($_SESSION['user'])){
    
     redirect("login.php");
}
?>
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
    <p><input type="submit" class="button_de button is-success is-outlined is-rounded" value="購入履歴" class="button"></p>
    
  </form>
    
    <form action="mypage.php" method="post" id="logoutform">
    <p><input id="logoutbutton" type="submit" class="button is-danger" value="ログアウト"></p>
    </form>

    <script src="./modules/モジュール用SCRIPT/jquery-3.7.0.min.js"></script>
    <script>
      $(function(){
        $('#logoutbutton').on('click',function(){
          $.ajax({
            type: "POST",
            url: "logout.php",
            data: {},
            dataType: "text"
          }).done(function(data){
            if(data=="success"){
              $('#logoutform').submit();
            }else if(data=="fail"){

            }
          });
        });
      });
    </script>
    
<?php require 'modules/navigation.php'; ?> 
<?php require 'modules/footer.php'; ?>