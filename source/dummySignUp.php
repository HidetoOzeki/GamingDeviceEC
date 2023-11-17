<?php session_start(); ?>
<?php require 'modules/db.php'?>
<?php require 'modules/header.php'; ?>
<?php require 'modules/utilcommon.php'; ?>

<h1 class="page_title">ダミー新規登録</h1>

<div id="app">
</div>
    <?php

    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
        //もしも新規登録画面にログインした状態で来たら自動でログアウト
    }

    if(!empty($_POST)){ //POST情報があるか(登録ボタンが押された後か)
    
    $username = $_POST['username'];
    $mailaddress = $_POST['mailaddress'];
    $password = $_POST['password'];

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
        echo '<p>すでにメールアドレスが登録されています。ログインを行ってください</p>';
    }

    }

    ?>

    <div class="centered_input_wide">

    <form action="dummySignUp.php" method="post">
        <p>ユーザーネーム</p>
        <input placeholder="ユーザーネーム" type="text" name="username">

        <p>メールアドレス</p>
        <input placeholder="メールアドレス" type="text" name="mailaddress">

        <p>パスワード</p>
        <input v-model="password" placeholder="パスワード" type="password" name="password" >
    </div>

    <br>

    <button type="submit" class="centered_button">登録</button>

    <br>

    </form>

    <form action="shouhinichiran.php" method="post">
    <button class="centered_button">スキップ</button>
    </form>

    <?php
    echo '<p v-if="!isValidPassword" class="has-text-danger">有効なメールアドレスではありません。半角英数字を含む〇文字以上で入力してください。</p></div>';
    echo '<script src="scripts/signup.js" type="text/javascript"></script>';
    ?>

<?php require 'modules/footer.php'; ?>