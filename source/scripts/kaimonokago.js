const app = new Vue({
    el: "#app",
    data(){
        return{
            count: 1
        };
    },
    methods: {
        decrease(){
            if(this.count>1){
                this.count--;
            }
        },
        increase(){
            this.count++;
        }
    }
});