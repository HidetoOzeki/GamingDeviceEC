$(function(){
    $("#mypage_transition").on("click",function(e){
        $.ajax({
            type: "POST",
            url: "login_select.php",
            data: {mail_address: $("#mail_address").val() ,password: $("#password").val()},
        }).done(function(data){
            let result = JSON.parse(data);
            if(result.msg[0]=="none"){
                $("#check_input").text("入力内容が間違っています。メールアドレス、またはパスワードが違います。");
            }else if(result.msg[0]=="success"){
                $('form').submit();
            }
        }).fail(function(data){
            alert("a");
        });
    });
});