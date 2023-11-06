const app = new Vue({
    el: "#app",
    data(){
        return{
            count: 1
        };
    },
    methods: {
        decrease(){
            this.count--;
        },
        increase(){
            this.count++;
        }
    }
});