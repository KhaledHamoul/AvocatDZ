
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('filtre', require('./components/filter.vue'));
Vue.component('profile', require('./components/profile.vue'));
Vue.component('competences', require('./components/competences.vue'));
Vue.component('info-client', require('./components/info-client.vue'));

const app = new Vue({
    el: '#vue-components',
});

