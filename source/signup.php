<?php session_start(); ?>
<?php require 'modules/db.php'?>
<?php require 'modules/header.php'; ?>
<?php require 'modules/utilcommon.php'; ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">

<?php
    echo '<form action="signup.php" method="post">';
    echo '<h1 class="page_title">新規登録</h1>';

    echo '<div id="app">';?>
<!--ozeki-->
    <?php

    $msg ='';

    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
        //もしも新規登録画面にログインした状態で来たら自動でログアウト
    }
    
    if(!empty($_POST)){ //POST情報があるか(登録ボタンが押された後か)
        //var_dump($_POST['mailaddress']);
    $username = $_POST['username'];
    $mailaddress = $_POST['mailaddress'];
    $password = $_POST['password'];

    $pattern = "|^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$|";

        if (preg_match($pattern,$mailaddress)) {
        $pdo = new PDO($connect,USER,PASS);

        //同じメールアドレスが登録されているかクエリを送る
        $sql = $pdo->prepare('select * from user where mail_address=?');
        $sql->execute([$mailaddress]);
    
        if(empty($sql->fetchAll())){ //クエリの結果が空だったら(同じメールアドレスは登録されていなかった
            //ユーザー登録を行う
            $sql=$pdo->prepare('insert into user values(null,?,?,?,?,null,?)');
            $sql->execute(['U',$username,$mailaddress,$password,'false']); //フラグはDBのBit型でいいかも
            //セッションを開始する
            $sql=$pdo->prepare('select * from user where mail_address=?');
            $sql->execute([$mailaddress]);
            foreach($sql as $row){
                $_SESSION['user']=[
                    'user_id'=>$row['user_id'],
                    'role_id'=>$row['role_id'],
                    'user_name'=>$row['user_name'],
                    'mail_address'=>$row['mail_address'],
                    'user_password'=>$row['user_password'],
                    'user_address'=>$row['user_address']
                ];
            }
            //マイページ画面に遷移する
            redirect('mypage.php');
        }else{
        $msg = 'すでにメールアドレスが登録されています。ログインを行ってください';
        }
        } else {
        $msg = "有効なメールアドレスではありません。半角英数字を含む8文字以上で入力してください。";
        }

    }

    ?>
    <!--ozeki-->

    <div class="centered_input_wide">

    <form action="signup.php" method="post">
        <p>ユーザーネーム</p>
        <input placeholder="ユーザーネーム" type="text" name="username">

        <p>メールアドレス</p>
        <input placeholder="メールアドレス" type="text" name="mailaddress">

        <p>パスワード</p>
        <input v-model="password" placeholder="パスワード" type="password" name="password" >
    </div>

    <br>

    <button type="submit" class="centered_button button is-success is-outlined is-rounded">登録 <i class= "far fa-check-circle"></i></button> 

    <br>

    </form>

    <form action="shouhinichiran.php" method="post">
    <button class="centered_button button is-info is-outlined is-rounded">スキップ <i class= "far fa-hand-point-right"></i></button>
    <p class="has-text-danger"><?=$msg?></p>
    <?php
    //echo '<p v-if="!isValidPassword" class="has-text-danger">有効なメールアドレスではありません。半角英数字を含む〇文字以上で入力してください。</p>
    echo '</div>';
    echo '</form>';
    echo '<script src="scripts/signup.js" type="text/javascript"></script>';
    ?>

<?php require 'modules/footer.php'; ?>