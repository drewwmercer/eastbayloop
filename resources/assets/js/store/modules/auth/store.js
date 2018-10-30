import Vuex from 'vuex';

export default new Vuex.Store({

    state: {
        isAuthenticated: false
    },

    getters: {
        isAuthenticated () {
            return vueAuth.isAuthenticated()
        }
    },

    mutations: {
        isAuthenticated (state, payload) {
            state.isAuthenticated = payload.isAuthenticated
        }
    },

    actions: {
        login (context, payload) {
            vueAuth.login(payload.user, payload.requestOptions).then((response) => {
                context.commit('isAuthenticated', {
                    isAuthenticated: vueAuth.isAuthenticated()
                })
            })
        }
    }
})