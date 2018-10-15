<template>
  <div class="admin__listing">
    <h3>content » {{type}}</h3>
    <listing-table></listing-table>
  </div>
</template>

<script>
import Table from '../../components/listing/table/Table.vue';
export default {
  name: 'admin-listing',
  components: {
    "listing-table": Table,
  },
  computed: {
    type(){
      return this.$route.params.type
    }
  }
}
</script>
