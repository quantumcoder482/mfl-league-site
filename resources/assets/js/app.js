
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('jquery');
require('tether');
require('bootstrap');

window.Vue = require('vue');

import App from './components/App.vue';

const app = new Vue({
  el: '#app',
  template: '<App/>',
  components: {App},
});
