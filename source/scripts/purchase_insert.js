$(function(){
    $("#purchase_btn").on("click",function(){
        $.ajax({
            type: "POST",
            url: "purchase_insert.php",
            data: {user_name: $("#user_name").val(), mail_address: $("#mail_address").val(), password: $("#password").val()},
        })
    });
});