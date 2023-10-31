new Vue({
    el:"#app",
    data(){
        return {
            username: "",
            mailaddress: "",
            password: ""
        }
    },
    computed: {
        isValidPassword(){
            return this.password.length > 8;
        }
    }
});