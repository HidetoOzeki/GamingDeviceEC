$(function(){
    $("#register_btn").on("click",function(){
        $.ajax({
            type: "POST",
            url: "update_profile.php",
            data: {user_name: $("#user_name").val(), user_password: $("#user_password").val(), user_address: $("#user_address").val()},
        });
    });
});