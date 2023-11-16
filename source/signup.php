<?php require 'modules/header.php'; ?>
<?php require 'modules/db.php'; ?>
<?php
    echo '<form action="signup.php" method="post">';
    echo '<h1 class="page_title">新規登録</h1>';

    echo '<div id="app">';
    

    echo '<div class="centered_input_wide">';
    echo '<p>ユーザーネーム</p>';
    echo '<input placeholder="ユーザーネーム" type="text" name="user_name">';

    echo '<p>メールアドレス</p>';
    echo '<input placeholder="メールアドレス" type="text" name="mail_address">';

    echo '<p>パスワード</p>';
    echo '<input v-model="password" placeholder="パスワード" type="password" name="user_password">';
    echo '</div><br>';
    echo '<button class="centered_button">登録</button><br>';
    echo '</form>';
    echo '<form action="shouhinichiran.php" method="post">';
    echo '<button class="centered_button">スキップ</button>';
    echo '</form>';
    echo '<p v-if="!isValidPassword" class="has-text-danger">有効なメールアドレスではありません。半角英数字を含む〇文字以上で入力してください。</p></div>';
    echo '</form>';
    echo '<script src="scripts/signup.js" type="text/javascript"></script>';
    ?>
    <!--output-->
<?php 
    $pdo = new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into user values(null,?,?,?,?,null,?)');
    $sql->execute([
        'U',$_POST['user_name'],$_POST['mail_address'],$_POST['user_password'],0]);

    ?>
<!--output-->

<?php require 'modules/footer.php'; ?>