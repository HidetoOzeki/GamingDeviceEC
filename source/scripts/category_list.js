const app = new Vue({
    el: "#app",
    data(){
        return{
            category: ["fas fa-mobile-alt fa-5x","fas fa-mouse fa-5x","fas fa-tv fa-5x","fas fa-microphone-alt fa-5x","fas fa-keyboard fa-5x"],
            images: ["./img/asus.png","./img/corsair.png","./img/logicool.png","./img/razer.png"],
            pricerange: ["0-1500円","1500-10000円","10000-50000円","50000-100000円"]
        };
    }
});