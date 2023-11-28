app = new Vue({
    el: "#app",
    data(){
        return{
            zipcode:""
        };
    },
    computed : {
        autofill(){
            return this.zipcode.length==7;
        }
    }
});
function setData(data){
    $('#user_address').val(data.address1+data.address2+data.address3);
}
$(function(){
    $("#user_address").on("keypress",function(e){
        if(e.key === 'Enter' || e.keyCode === 13){
        $.ajax({
            url: "https://zipcloud.ibsnet.co.jp/api/search?zipcode="+$('#user_address').val(),
            dataType:'jsonp'
        }).done(function(data){
            if(data.results){
                setData(data.results[0]);
            }else{
                alert("該当するデータが見つかりませんでした")
            }
        }).fail(function(data){
            alert("通信に失敗しました");
        });
    }
    }
    );
});