$(function(){
    $("#register_btn").on("click",function(){
        $.ajax({
            type: "POST",
            url: "user_inform_insert.php",
            data: {user_name: $("#user_name").val(), mail_address: $("#mail_address").val(), password: $("#password").val()},
        })
    });
});