
window.Vue = require('vue');

Vue.component('hello', require('./components/Hello.vue'))

const app = new Vue({
    el: '#app'
});