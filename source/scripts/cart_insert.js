$(function(){
    $("#cart_insert").on("click",function(){
        $.ajax({
            type: "POST",
            url: "cart_insert.php",
            data: {insert_product: $("#insert_product").val()},
        })
    });
});