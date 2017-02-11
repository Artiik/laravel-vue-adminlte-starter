
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));
Vue.component('Dashboard', require('./components/dashboard/layout/Dashboard.vue'));
Vue.component('main-header', require('./components/dashboard/layout/Main-header.vue'));
Vue.component('main-sidebar', require('./components/dashboard/layout/Main-sidebar.vue'));
Vue.component('content-wrapper', require('./components/dashboard/layout/Content-wrapper.vue'));

const dashboard = new Vue({
    el: '#dashboard',
});
