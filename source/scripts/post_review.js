const app = Vue.createApp({ 
    // Your component code
    methods: {
        setRating(rating){
          this.rating= rating;
        }
      },
      data(){
        return{
            rating: 0
        };
      }
})
app.component('star-rating', VueStarRating.default)
app.mount('#app')