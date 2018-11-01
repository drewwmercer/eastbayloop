import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);
import { get } from 'tiny-cookie';

let jwt = get('token');

export default new Vuex.Store({

})