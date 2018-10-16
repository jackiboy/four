<template>
  <div class="admin__record">
    <h1>Edit | {{record._id}}</h1>
    <div class="container">
      <div class="row">
        <record-main :record="record"></record-main>
        <div class="col-3">
          sidebar
        </div>
      </div>
</div>
  </div>
</template>

<script>
import Main from '../../components/record/Main.vue'

export default {
  name: 'admin-record',
  components: {
    "record-main": Main,
  },
  beforeCreate(){
    this.$store.dispatch("content/setCurrent", {
      id: this.$route.params.id,
    });
  },
  mounted(){
    
  },
  computed:{
    record(){
      return this.$store.getters['content/getCurrent']
    }
  }
}
</script>
