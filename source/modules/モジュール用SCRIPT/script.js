$(function(){
    let pastlocation = 0;
    $(window).on('scroll',function(){
        if($(this).scrollTop() == 0){
            $("#nav").slideDown("fast");
        }else if($(this).scrollTop() > pastlocation){
            $("#nav").slideUp("fast");
        }
        pastlocation = $(this).scrollTop();
    });
});