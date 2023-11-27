$(function(){
    $(document).click(function(e){
      $(e.target).each(function(){
        let value = $(e.target).parent().parent().parent().parent().parent().find("#detail_pd").val();
        
        if($(e.target).css("color")=="rgb(240, 86, 84)"){ 
          $(".product_form").each(function(){
            $(this).prepend("<input type='hidden' name='compare_pd[]' id='hidden' value='"+value+"'>");
          });
        }else if($(e.target).css("color")=="rgb(74, 74, 74)"){
          $("#hidden").each(function(){
            if(value==$(this).val()){
              $(this).remove();
              //alert($(this).children().children().remove());
              /*let result = $(this).children();
              $("#hidden").each(function(){
                if(result.val()==$(this).val()){
                  $(this).remove("#hidden");
                }
              });*/
            }
          });
        }
      });
    });
});