$(function(){
    $(document).click(function(e){
      $(e.target).each(function(){
        if($(e.target).css("color")=="rgb(240, 86, 84)"){
            value = $(e.target).parent().parent().parent().parent().parent().find("input").val();
            $(".product_form").each(function(){
              $(this).append("<input type='hidden' name='compare_pd[]' value='"+value+"'>");
            });
        }
      });
    });
});