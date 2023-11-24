<?php require 'modules/header.php';?>

<h1 class="page_title">登録・削除</h1>
<div class="wrap_admin_control_item">
    <table>
        <tr><th class='control_item_desc'>商品一覧</th><th></th><th></th></tr>
        <?php for($i = 0;$i < 5;$i++): ?>
            <tr><td  class="control_item_desc"><input type="text" style="width:180px;"></td><td><form action="toroku.php" ><button>登録</button></form></td><td><form action="delete.php" ><button>削除</button></form></td></tr>
        <!--php　insert開始-->
        <?php
        if(empty($sql->fetchAll())){ //クエリの結果が空だったら(同じメールアドレスは登録されていなかった
            //ユーザー登録を行う
            $sql=$pdo->prepare('INSERT INTO product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values("カテゴリID","ブランドID","W","商品名",価格,"false")');
            $sql->execute(['U',$username,$mailaddress,$password,'false']); //フラグはDBのBit型でいいかも
            //セッションを開始する
            $sql=$pdo->prepare('select * from user where mail_address=?');
            $sql->execute([$mailaddress]);
            foreach($sql as $row){
                $_SESSION['user']=[
                    'user_id'=>$row['user_id'],
                    'role_id'=>$row['role_id'],
                    'user_name'=>$row['user_name'],
                    'mail_address'=>$row['mail_address'],
                    'user_password'=>$row['user_password'],
                    'user_address'=>$row['user_address']
                ];
            }
        }
        ?>
        <?php endfor; ?>
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