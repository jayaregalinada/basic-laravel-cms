
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

Vue.component('modal', require('./components/Modal.vue'))
Vue.component('alert', require('./components/Alert.vue'))

const da$hboard = new Vue({
    el: '#dashboard',
    data: {
        _modal: false
    }
});
