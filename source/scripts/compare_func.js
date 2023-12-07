$(function(){
    $(document).click(function(e){
      let result = [];
      $(e.target).each(function(){
        //let value = $(e.target).parent().parent().parent().parent().parent().find("#detail_pd").val();
        if($(e.target).prop("tagName")=="IMG"){
          $.ajax({
            type: "POST",
            url: "session_check.php",
          }).done(function(data){
            let done = JSON.parse(data);
            $(document).ajaxStop(function() {
              if(done.msg[0]=="yet_login"){
                location.href="login.php";
              }
            });
          });
          $(e.target).parent().parent().parent().children().remove("#hidden");
          //let num = $(e.target).parent().parent().find("#detail_pd").val();
          $(".product_form").each(function(){
            if($(this).find("#icon").css("color")=="rgb(240, 86, 84)"){
              result.push($(this).find("#detail_pd").val());
            }
          });
          for(var i = 0;i<result.length;i++){
            $(e.target).parent().parent().parent().prepend("<input type='hidden' name='compare_pd[]' id='hidden' value='"+result[i]+"'>");
          }
        }else {
          $.ajax({
            type: "POST",
            url: "session_check.php",
          }).done(function(data){
            let done = JSON.parse(data);
            $(document).ajaxStop(function() {
              if(done.msg[0]=="yet_login"){
                location.href="login.php";
              }
            });
          });
        }
        
        
        /*if($(e.target).css("color")=="rgb(240, 86, 84)"){ 
          $(".product_form").each(function(){
            $(this).prepend("<input type='hidden' name='compare_pd[]' id='hidden' value='"+value+"'>");
          });
        }else if($(e.target).css("color")=="rgb(74, 74, 74)"){
          $(".product_form").each(function(){

            if(value==$(this).children().val()){
              $(this).find("#hidden").remove();
              //console.log($(this).children().remove());
              //alert($(this).children().children().remove());
              /*let result = $(this).children();
              $("#hidden").each(function(){
                if(result.val()==$(this).val()){
                  $(this).remove("#hidden");
                }
              });
            }
          });
        }*/
      });
    });
});