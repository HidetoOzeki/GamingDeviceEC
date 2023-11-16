const VueStar = window['VueStar'];
Vue.component('VueStar', VueStar);

const app = new Vue({
  el: '#app'
});

$(function(){
  $(document).click(function(e){
    $(e.target).each(function(){
      if($(e.target).css("color")=="rgb(240, 86, 84)"){
          let input = document.createElement("input");
          input.type = "hidden";
          input.name = "compare_pd[]";
          input.value = $(e.target).parent().parent().parent().parent().parent().find("input").val();
          console.log($(e.target).parent().parent().parent().parent().parent().find("input").val());
          $(".product_form").each(function(){
            $(this).append(input);
          });
        alert("success");
      }
    });
  });
});
      

