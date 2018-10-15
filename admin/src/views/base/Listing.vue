<template>
  <div class="admin__listing">
    <h1>Listing</h1>
    <listing-table></listing-table>
  </div>
</template>

<script>
import Table from '../../components/listing/Table/Table.vue';
export default {
  name: 'admin-listing',
  components: {
    "listing-table": Table,
  },
}
</script>
