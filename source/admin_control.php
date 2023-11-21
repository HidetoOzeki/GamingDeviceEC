<?php require 'modules/header.php';?>

<h1 class="page_title">登録・削除</h1>
<div class="wrap_admin_control_item">
    <table>
        <tr><th class='control_item_desc'>商品一覧</th><th></th><th></th></tr>
        <?php for($i = 0;$i < 5;$i++): ?>
            <tr><td  class="control_item_desc"><input type="text" style="width:180px;"></td><td><form action="toroku.php" ><button>登録</button></form></td><td><form action="delete.php" ><button>削除</button></form></td></tr>
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