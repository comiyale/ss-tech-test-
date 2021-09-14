import axios from 'axios';

const state = {
    factText: null,
}

const actions = {
    getFact: ({commit}) => {
        return axios.get(`fact`)
            .then(resp => {
                commit('getFactSuccess', resp.data);
                return resp;
            })
            .catch(err => {
                return Promise.reject(err);
            })
    },
}

const mutations = {
    getFactSuccess: (state, resp) => {
        state.factText = resp.fact;
    },
}

export default {
    state,
    actions,
    mutations,
}
