<template>
  <nav class="admin__title">
    <template v-if="page.name === 'edit' || page.name === 'create'">
      Edit<span>»</span><strong>{{record.magictitle}}</strong>
    </template>
    <template v-if="page.name === 'listing'">
      Content<span>»</span><strong>{{page.params.type}}</strong>
    </template>
  </nav>
</template>

<script>
export default {
  name: 'admin-title',
  computed:{
    page(){
      return this.$route
    },
    record(){
      if(this.page.name === 'edit' || this.page.name === 'create'){
        return this.$store.getters['record/getRecord']
      }
    }
  }
}
</script>
