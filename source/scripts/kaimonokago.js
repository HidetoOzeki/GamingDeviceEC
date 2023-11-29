const app = new Vue({
    el: "#app",
    data(){
        return{
            amounts: [],
            items: [],
            price: 0
        };
    },
    methods: {
        decrease(value){    
            if(this.amounts[value]>1){
                this.amounts[value]--;
                this.amounts.splice();
                this.price -= this.items[value].price;
            }
        },
        increase(value){
            this.amounts[value]++;
            this.amounts.splice();
            this.price += this.items[value].price;   
        },
        delete_btn(num,index){
            let params = new URLSearchParams();
            params.append("delete_pd", num);
            axios.post("./cart_delete.php",params).then(function(response){});
            
        }
    },
    mounted: function() {
        const self = this;
        axios.get("./select_cart.php").then(function (response) {
            self.items = response.data
            for(var i = 0;i<self.items.length;i++){
                self.amounts.push(1);
                self.price += self.items[i].price;
            }
        }).catch(function(error){
            alert(error);
        });
    }
});
