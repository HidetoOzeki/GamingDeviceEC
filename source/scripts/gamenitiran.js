const app = new Vue({
    el: "#app",
    data(){
        return{
            count: 0
        };
    },
    methods :{
        btn_counter(){
            this.count++;
        }
    }
});