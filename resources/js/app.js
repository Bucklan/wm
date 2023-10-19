import './bootstrap';

window.Vue = require('vue');

Vue.component('front-page', require('./component/Front.vue').default);

const app = new Vue({
    el: '#app',
})
