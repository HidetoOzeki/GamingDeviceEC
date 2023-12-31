<?php require 'modules/db.php'?>
<?php require 'modules/header.php'; ?>
<?php
$pdo = new PDO($connect,USER,PASS);
$product_array = [];
for($i = 0;$i<count($_POST['add_product']);$i++){
    $product_array[] = "'".$_POST['add_product'][$i]."'";
}
$product_insert = implode(",",$product_array);
$msg = implode(",",$product_array);
$product = $pdo->query('insert into product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values('.$msg.',"false")');
$sql = $pdo->prepare('insert into product_spec values((select concat("000",(select * FROM (SELECT COALESCE(max(specification_id)+1,1) as "maxcount" from product_spec) as temp))),(select COALESCE((select max(product_id) from product),1)),?,?,?,?,?,?)');
$sql->execute([$_POST['spec_interface'],$_POST['spec_clearly'],$_POST['spec_os'],$_POST['spec_size'],$_POST['spec_weight'],$_POST['spec_color']]);
$sql = $pdo->prepare('insert performance values((select concat("0000",(select * FROM (SELECT COALESCE(max(performance_id)+1,1) as "maxcount" from performance) as temp))),(select COALESCE((select max(product_id) from product),1)),?,?,?,?,?,?,?)');
$sql->execute([$_POST['performance_cpu'],$_POST['performance_memory'],$_POST['performance_storage'],$_POST['performance_battery'],$_POST['performance_size'],$_POST['performance_weight'],$_POST['performance_clearly']]);
?>
    <h1 class="page_title_1">登録が完了しました</h1>

    <br>
    <form action="admin_control.php">
    <button class="centered_button">一覧に戻る</button>
    </form>
<?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>
