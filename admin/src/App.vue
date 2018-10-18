<template>
  <div id="app" class="admin">
    <admin-navbar></admin-navbar>
    <admin-sidebar></admin-sidebar>
    <main class="admin__main">
      <admin-title></admin-title>
      <div class="admin__main--body">
        <router-view />
      </div>
    </main>
  </div>
</template>

<script>
import Navbar from './components/base/Navbar.vue'
import Sidebar from './components/base/Sidebar.vue'
import Title from './components/base/Title.vue'


export default {
  name: 'admin-base',
  components: {
    "admin-navbar": Navbar,
    "admin-sidebar": Sidebar,
    "admin-title": Title
  },
}
</script>

<style>
  @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
  @import url("https://fonts.googleapis.com/css?family=Source+Code+Pro|Source+Sans+Pro:300,400,600");
</style>