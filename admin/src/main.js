/**
 * Vue Core
 */
import Vue from 'vue'
import App from './App.vue'
/**
 * Vue Core | Config
 */
import router from './router'
import store from './store'
import './plugins/filters'
import './config/service_worker'
/**
 * Bootstrap Javascript
 */
import 'bootstrap';
/**
 * Set Axios
 */
import Axios from 'axios'
Axios.defaults.headers.common = {
  "accept": "application/vnd.api+json",
};
Vue.prototype.$axios = Axios;
/**
 * Styling
 */
import './assets/scss/main.scss'

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
