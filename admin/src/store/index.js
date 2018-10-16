/**
 * Vuex Store
 */
import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

/**
 * Modules
 */
import content from './modules/content';
import record from './modules/record';

export default new Vuex.Store({
  modules: {
    content,
    record
  }
})
