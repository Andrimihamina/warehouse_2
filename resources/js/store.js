// resources/js/store.js

import Vue from 'vue';
import Vuex from 'vuex';

// Use Vuex
Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        menuItems: []
    },
    mutations: {
        setMenuItems(state, items) {
            state.menuItems = items;
        }
    },
    actions: {
        fetchMenuItems({ commit }) {
            axios.get('/api/menu-items')
                .then(response => {
                    commit('setMenuItems', response.data); // Commit data to Vuex state
                })
                .catch(error => {
                    console.error('Error fetching menu items:', error);
                });
        }
    }
});

export default store;
