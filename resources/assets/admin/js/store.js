
const Vuex = require('vuex');

const store = new Vuex.Store({
    state: {
        user: Laravel.user,
        userLoggedIn: Laravel.user_logged_in,
        locale: Laravel.locale,
        linkUrls: Laravel.link_urls,
        trans: Laravel.trans
    },
    mutations: {

    },
    getters: {
        user: (state) => {
            return state.user;
        }
    }
});

module.exports = store;


