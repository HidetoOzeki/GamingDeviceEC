<?php require 'modules/header.php';?>
<?php require 'modules/db.php'?>
<h1 class="page_title">登録・削除</h1>
<div class="wrap_admin_control_item">
    <table>
        <tr><th class='control_item_desc'>商品一覧</th><th></th><th></th></tr>
        <!--php　insert開始-->
        <?php
            $pdo = new PDO($connect,USER,PASS);
            foreach($pdo->query('select * from product') as $row){
                echo '<tr><td  class="control_item_desc">',$row['product_name'],'</td><td><form action="toroku.php" ><button>登録</button></form></td><td><form action="delete.php" ><button>削除</button></form></td></tr>';
            }
            //$sql=$pdo->prepare('INSERT INTO product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values("カテゴリID","ブランドID","W","商品名",価格,"false")');
            //$sql->execute([$categori_id,$bland_id,$purpose_id,$product_name,$price,'false']); //フラグはDBのBit型でいいかも
        ?>
    </table>
</div>
<h1 class="page_title">ユーザー一覧</h1>
<div class="wrap_admin_control_item">
    <table>
        <tr><th class='control_item_desc'>ユーザーネーム</th><th></th></tr>
        <?php for($i = 0;$i < 5;$i++): ?>
            <tr><td class="control_item_desc"></td><td><form action="delete.php" ><button>削除</button></form></td></tr>
        <?php endfor; ?>
    </table>
</div>
<h1 class="page_title">レビュー削除</h1>
<div class="wrap_admin_control_item">
    <table>
        <tr><th class='control_item_desc'>レビュー</th><th></th></tr>
        <?php for($i = 0;$i < 5;$i++): ?>
            <tr><td class="control_item_desc"></td><td><form action="delete.php" ><button>削除</button></form></td></tr>
        <?php endfor; ?>
    </table>
</div>

<?php require 'modules/footer.php';?>