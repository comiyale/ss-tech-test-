import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios';

Vue.use(Vuex)

axios.defaults.baseURL = process.env.VUE_APP_API_URL;
axios.defaults.headers.common.Accept = 'application/json';

// Module Imports
import FactModule from './modules/fact';

export default new Vuex.Store({
  modules: {
    fact: FactModule,
  }
})
