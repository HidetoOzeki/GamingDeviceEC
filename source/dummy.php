<?php require 'modules/db.php'?>
<?php require 'modules/header.php'; ?>

<h1>商品テーブル表示</h1>

<table>

<tr>
    <th>product_id</th>
    <th>category_id</th>
    <th>brand_id</th>
    <th>purpose_id</th>
    <th>product_name</th>
    <th>price</th>
</tr>

<?php

$pdo = new PDO($connect,USER,PASS);
$sql = $pdo->query('select * from product');

foreach($sql as $row){
    echo '<tr>';

    echo '<td>' , $row['product_id'] , '</td>';
    echo '<td>' , $row['category_id'] , '</td>';
    echo '<td>' , $row['bland_id'] , '</td>';
    echo '<td>' , $row['purpose_id'] , '</td>';
    echo '<td>' , $row['product_name'] , '</td>';
    echo '<td>' , $row['price'] , '</td>';

    echo '</tr>';
}

?>      
</table>

<?php require 'modules/navigation.php'; ?>
<?php require 'modules/footer.php'; ?>