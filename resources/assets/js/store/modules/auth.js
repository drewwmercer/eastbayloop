import Vue from 'vue';
import Vuex from 'vuex';
import VueAxios from 'vue-axios';
import { VueAuthenticate } from 'vue-authenticate';
import axios from 'axios';

Vue.use(Vuex);
Vue.use(VueAxios, axios);

const vueAuth = new VueAuthenticate(Vue.prototype.$http, {
    baseUrl: 'https://localhost'
});

export default new Vuex.Store({
    namespaced: true,
    state: {
        isAuthenticated: false
    },
    getters: {
        isAuthenticated() {
            return vueAuth.isAuthenticated()
        }
    },
    mutations: {
        isAuthenticated (state, payload) {
            state.isAuthenticated = payload.isAuthenticated
        }
    },
    actions: {
    }
});