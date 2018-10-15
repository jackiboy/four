<template>
  <div class="admin__record">
    <h1>Edit</h1>
  </div>
</template>

<script>

export default {
  name: 'admin-listing',
  async mounted(){
    console.log(this.$route.params.id);
  }
}
</script>
