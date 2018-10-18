<template>
  <div class="admin__main--content">
    <div class="admin__listing">
      <listing-table></listing-table>
    </div>  
  </div>
</template>

<script>
import Table from '../../components/listing/table/Table.vue';
import fetchContentType from '../../plugins/helpers/fetchContentType';

export default {
  name: 'admin-listing',
  components: {
    "listing-table": Table,
  },
  beforeCreate(){
    return fetchContentType(this, this.$route.params.type, 1, 5);
  },
  watch: {
   '$route' () {
      return fetchContentType(this, this.$route.params.type, 1, 5);
    }
  }
}
</script>
