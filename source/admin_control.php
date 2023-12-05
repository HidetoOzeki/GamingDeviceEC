<?php require 'modules/header.php';?>

<?php require 'modules/db.php'?>
<h1 class="page_title">登録・削除</h1>
<div class="wrap_admin_control_item">
    <table>
        <tr><th class='control_item_desc'>商品一覧</th><th></th></tr>
        <!--php　insert開始-->
        <?php
            $pdo = new PDO($connect,USER,PASS);
            foreach($pdo->query('select * from product where product_delete_flg = \'false\'') as $row){
                echo '<tr><td  class="control_item_desc">',$row['product_name'],'</td>
                <td><form action="delete.php" method="post">
                <input type="hidden" name="product_id" value="',$row['product_id'] ,'">
                <button type="submit">削除</button></form></td></tr>';
            }
            //アップデート文（フラグをtrueに変える）
          
        ?>
        <tr>
            <form action="and.php" method="post">
            <td><input type="text" name="input_name"></td><td><button type="submit">登録</button></td>
            <!--id,nameを飛ばして詳細を記載　insert文-->
        </form>
        </tr>
    </table>
</div>
<h1 class="page_title">ユーザー一覧</h1>
<div class="wrap_admin_control_item">
    <table>
        <tr><th class='control_item_desc'>ユーザーネーム</th><th></th></tr>
        <?php
        
            foreach($pdo->query('select * from user where user_delete_flg = \'false\'') as $row){
                echo '<tr><td  class="control_item_desc">',$row['user_name'],'</td>
                <td><form action="delete.php" method="post">
                <input type="hidden" name="user_id" value="',$row['user_id'],'">
                <button type="submit">削除</button></form></td></tr>';
            }
        ?>
    </table>
</div>
<h1 class="page_title">レビュー削除</h1>
<div class="wrap_admin_control_item">
    <table>
        <tr><th class='control_item_desc'>レビュー</th><th></th></tr>
        <?php
            foreach($pdo->query('select * from review') as $row){
                echo '<tr><td  class="control_item_desc">',$row['review_contents'],'</td><td><form action="delete.php" ><button type="submit">削除</button></form></td></tr>';
            }
            ?>
    </table>
</div>

<?php require 'modules/footer.php';?>