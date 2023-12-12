const app = new Vue({
    el: "#app",
    data(){
        return{
            category_id: "",
            bland_id: "",
            category_flg: true,
            bland_flg: true
        };
    },
    methods: {
        category_check(e){
            if(e.target.value.length==6){
                this.category_flg = false;
            }else {
                this.category_flg = true;
            }
            console.log(e.target.value);
        },
        bland_check(e){
            if(e.target.value.length==6){
                this.bland_flg = false;
            }else {
                this.bland_flg = true;
            }
        },
    },
    computed: {
        submit_check(){
            return this.category_flg == true || this.bland_flg == true ? true:false;
        }
    }
});
