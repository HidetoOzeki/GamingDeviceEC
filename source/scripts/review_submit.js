$(function(){
    $("#review_submit").on("click",function(){
        $.ajax({
            type: "POST",
            url: "review_submit.php",
            data: { product_id: $("#product_id").val(), rating: $("#review_rating").val(), review_content: $("#review_content").val() },
            dataType: "text",
        }).done(function(data){
            if(data=="abort"){
                $("#error_message").text("星をつけて評価をしてください");
            }else if(data=="done"){
                $("#review_form").submit();
            }
        });
    });
});