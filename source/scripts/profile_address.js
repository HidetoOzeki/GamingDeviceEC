const app = Vue({ 
    // Your component code
    el:'#pr',
    data(){
        return{
            input:""
        };
    },
    computed: {
        iszipcode(){
            return(!isNaN(this.input)&&this.input.length == 7)
        }
    }
   
})
