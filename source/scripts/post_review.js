const app = Vue.createApp({ 
    // Your component code
    data(){
        return {
            rating: 0
        };
    },
    methods: {
        setRating: function(rating){
          this.rating= rating;
        }
    }
})
app.component('star-rating', VueStarRating.default)
app.mount('#app')