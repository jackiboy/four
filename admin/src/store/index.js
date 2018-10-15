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

export default new Vuex.Store({
  modules: {
    content
  }
})
