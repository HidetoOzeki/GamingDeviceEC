<?php session_start(); ?>
<?php require 'modules/header.php'; ?>

<?php
$_SESSION['customer']=[
        'id'=>$row['id'], 'name'=>$row['name'],
        'address'=>$row['address'], 'login'=>$row['login'],
        'password'=>$row['password']];
}
?>
<?php
    echo '<h1 class="page_title">ログイン</h1>';
    echo '<form action="mypage.php" method="post">';
    echo '<div class="centered_input_wide">';
    echo '<p>メールアドレス</p>';
    echo '<input placeholder="メールアドレス" type="text">';

    echo '<p>パスワード</p>';
    echo '<input placeholder="パスワード" type="password">';
    echo '</div>';
    echo '<br>';
    echo '<a href="signup.php" class="sinki_rinku">←新規登録</a><br>';
    echo '<input class="centered_button" type="submit" value="マイページへ">';
    echo '</form>';


    echo '<p v-if="!isValidPassword" class="has-text-danger">入力内容が間違っています。メールアドレス、またはパスワードが違います。</p>';

    echo '<script src="scripts/signup.js" type="text/javascript"></script>';
?>

<?php require 'modules/footer.php'; ?>
