const app = Vue.createApp({ 
    // Your component code
})
app.component('star-rating', VueStarRating.default)
app.mount('#app')
const review = Vue.createApp({

})
review.component('star-rating', VueStarRating.default)
review.mount("#review");