import Vue from 'vue'
import Router from 'vue-router'
import App from '../App.vue'
import Dashboard from '../views/base/Dashboard.vue'
import Listing from '../views/base/Listing.vue'
import Record from '../views/base/Record.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    { path: '/', redirect: '/dashboard', component: App },
    { name: 'dashboard', path: '/dashboard', component: Dashboard, meta: { type: 'content' }},
    { name: 'listing', path: '/content/:type', component: Listing },
    { name: 'edit', path: '/content/edit/:id', component: Record },
    { name: 'create', path: '/content/create/:id', component: Record}
  ]
})
