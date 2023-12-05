$(function(){
    $(".centered_button").on("click",function(e){
        e.preventDefault();
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
        $(document).ajaxStop(function() {
            window.location = "purchase_history.php";
        });
    });
});