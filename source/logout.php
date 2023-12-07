<?php session_start(); ?>
<?php
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    $msg = "success";
    echo json_encode(["msg" => [$msg]]);
}else{
    $msg = "fail";
    echo json_encode(["msg"=>[$msg]]);
}
?>