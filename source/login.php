<?php session_start(); ?>
<?php require 'modules/db.php'; ?>
<?php require 'modules/utilcommon.php'; ?>
<?php require 'modules/header.php'; ?>
<?php
if(!empty($_POST)){
    unset($_SESSION['user']);
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from user where mail_address=? and user_password=?');
    $sql->execute([$_POST['mail_address'], $_POST['password']]);
    foreach ($sql as $row){
    $_SESSION['user']=[
        'user_id'=>$row['user_id'],
        'role_id'=>$row['role_id'],
        'user_name'=>$row['user_name'],
        'mail_address'=>$row['mail_address'],
        'user_password'=>$row['user_password'],
        'user_address'=>$row['user_address']];
        redirect('mypage.php');
    }
}
?>


    <h1 class="page_title">ログイン</h1>
     <form action="login.php" method="post">
     <div class="centered_input_wide">
     <p>メールアドレス</p>
     <input placeholder="メールアドレス" type="name" name="mail_address">

     <p>パスワード</p>
     <input placeholder="パスワード" type="password" name="password">
     </div>
     <br>
     <a href="signup.php" class="sinki_rinku">←新規登録</a><br>
     <input class="centered_button" type="submit" value="マイページへ">
     </form>


     '<p v-if="!isValidPassword" class="has-text-danger">入力内容が間違っています。メールアドレス、またはパスワードが違います。</p>

     '<script src="scripts/signup.js" type="text/javascript"></script>

<?php require 'modules/footer.php'; ?>
