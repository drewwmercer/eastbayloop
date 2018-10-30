
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('flexslider');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue'

import VueCookie from 'vue-cookie';
Vue.use(VueCookie);

import VueBus from 'vue-bus';
Vue.use(VueBus);

import * as VueGoogleMaps from 'vue2-google-maps';
Vue.use(VueGoogleMaps, {
    load: {
        key: 'YOUR_API_TOKEN',
        libraries: 'places',
    },
});

import Vuex from 'vuex';
Vue.use(Vuex);
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);
import VueAuthenticate from 'vue-authenticate';
Vue.use(VueAuthenticate, {
    baseURL: window.location.origin,
    providers: {
        google: {
            clientId: document.head.querySelector('meta[name="google_api_client_id"]').content,
            redirectUri: `${window.location.origin}/callback/google`,
        },
        facebook: {
            clientId: document.head.querySelector('meta[name="facebook_api_client_id"]').content,
            redirectUri: `${window.location.origin}/callback/facebook`,
        }
    }
});

require('./helpers/siteComponentsLoader');


const app = new Vue({
    el: '#app'
});
