const app = new Vue({
    el: "#app",
    data(){
        return{
            icon: "far fa-heart heart_nonecolor fa-lg"
        };
    },
    methods :{
        btn_counter(){
            this.icon = "fas fa-heart heart_red fa-lg";
        }
    }
});