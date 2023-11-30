$(function(){
    $(".centered_button").on("click",function(){
        let product_id = [];
        let amounts = [];
        $(".hidden_pd_num").each(function(key,value){
            product_id.push($(value).val());
        });
        $(".hidden_amount").each(function(key,value){
            amounts.push($(value).val());
        });
        $.ajax({
            type: "POST",
            url: "purchase_insert.php",
            data: {product_nums: product_id, product_amounts: amounts},
        });
        location.href="purchase_history.php";
    });
});