/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


 import VueRouter from 'vue-router'
 import axios from 'axios';
require('./bootstrap');

window.Vue = require('vue').default;
import store from './store';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Signing Components
 */
Vue.component('login-component', require('./components/auth/LoginComponent.vue').default);
Vue.component('register-component', require('./components/auth/RegisterComponent.vue').default);

/**
 * Affiliate Components
 */
 Vue.component('affiliate-dashboard-component', require('./components/affiliate/DashboardComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    mode: 'history',
    el: '#app',
    store
});
