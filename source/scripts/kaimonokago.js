new Vue({
    el: "#app",
    data(){
        return{
            amounts: [],
            items: [],
            price: 0,
            check_items: true
        };
    },
    methods: {
        decrease(value,id){    
            if(this.amounts[value]>1){
                this.amounts[value]--;
                this.amounts.splice();
                this.price -= this.items[value].price;
            }
            var amount_inform = new URLSearchParams();
            amount_inform.append("product_id", id);
            amount_inform.append("amounts", this.amounts[value]);
            axios.post("./amounts_change.php",amount_inform).then(function(response){});
        },
        increase(value,id){
            this.amounts[value]++;
            this.amounts.splice();
            this.price += this.items[value].price;
            var amount_inform = new URLSearchParams();
            amount_inform.append("product_id", id);
            amount_inform.append("amounts", this.amounts[value]);
            axios.post("./amounts_change.php",amount_inform).then(function(response){});   
        },
        delete_btn(num,index){
            this.price -= this.items[index].price*this.amounts[index];
            let params = new URLSearchParams();
            params.append("delete_pd", num);
            axios.post("./cart_delete.php",params).then(function(response){});
            this.items.splice(index,1);
            this.amounts.splice(index,1);
            if(this.items.length==0){
                this.check_items = false;
            }
        }
    },
    computed: {
        check_item(){
            return this.check_items;
        }
    },
    mounted: function() {
        const self = this;
        axios.get("./select_cart.php").then(function (response) {
            self.items = response.data
            if(self.items!="レコードが有りません"){
                for(var i = 0;i<self.items.length;i++){
                    self.amounts.push(self.items[i].amounts);
                    self.price += self.items[i].price;
                }
            }else {
                self.check_items = false;
            }
        }).catch(function(error){
            alert(error);
        });
    }
});
