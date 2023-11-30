<?php session_start(); ?>
<?php
    if(!isset($_SESSION['user'])){
        $result = "yet_login";
    }else {
        $result = "done_login";
    }
    echo json_encode(['msg' => [$result]]);
?>