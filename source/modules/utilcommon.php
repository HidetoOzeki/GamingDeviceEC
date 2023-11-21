<!-- 便利なphp関数 -->
<?php

//ページ遷移関数 引数-url
//使用例 マイページに遷移 redirect('mypage.php') 
function redirect($url){
    header('Location: '.$url);
    exit();
}

?>