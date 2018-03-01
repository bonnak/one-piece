require('./bootstrap')
import Vue from 'vue'
import VueCarousel from 'vue-carousel'

Vue.use(VueCarousel)

const app = new Vue({
    el: '#app'
});
