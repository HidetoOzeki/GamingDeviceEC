<?php require 'modules/utilcommon.php'; ?>
<?php
session_start();
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    redirect('login.php');
    echo 'success';
}else{
    echo 'fail';
}
?>