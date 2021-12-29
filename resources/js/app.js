/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue').default;
window.axios = require('axios');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login', require('./components/Login.vue').default);
Vue.component('user', require('./components/User.vue').default);
Vue.component('product', require('./components/Product.vue').default);
Vue.component('home', require('./components/Home.vue').default);
Vue.component('analysis', require('./components/Analysis.vue').default);
Vue.component('add-product', require('./components/Product_Add.vue').default);
Vue.component('edit-product', require('./components/Product_Edit.vue').default);
Vue.component('order', require('./components/Order.vue').default);
Vue.component('add-order', require('./components/Order_Add.vue').default);
Vue.component('packaging', require('./components/Packaging.vue').default);
Vue.component('warehouse', require('./components/Warehouse.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
