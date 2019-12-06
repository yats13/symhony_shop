/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (main.css in this case)
import '../css/main.less';
import '../css/nav.less';
import Vue from 'vue';
import axios from 'axios'
import VueAxios from 'vue-axios'
import App from '../vue/App.vue'

Vue.use(VueAxios, axios)
new Vue({
    el: '#app',
    components:{App}
});
