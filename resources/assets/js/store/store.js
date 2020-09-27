import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        st_locale: document.getElementById('app').getAttribute('data-locale'),
    },
    actions: {
        async vx_getLocale({commit}) {
            try {
                const response = await axios.get('/get-locale');
                if(!response.data) {
                    return;
                }
                commit('setLocale', response.data);

            } catch (err) {
                console.log(err);
            }


        }
    },
    mutations: {
        setLocale(state, locale) {
            return locale ? locale : state.st_locale;
        }
    },
    getters: {
        locale: state => {

            if(state.st_locale) {
                return state.st_locale + '/';
            }

            return '';
        }
    },
});
