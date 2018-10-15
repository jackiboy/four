<template>
  <div class="admin__record">
    <h1>Edit | {{record._id}}</h1>
  </div>
</template>

<script>

export default {
  name: 'admin-listing',
  beforeCreate(){
    this.$store.dispatch("content/setCurrent", {
      id: this.$route.params.id,
    });
  },
  computed:{
    record(){
      return this.$store.getters['content/getCurrent']
    }
  }
}
</script>
