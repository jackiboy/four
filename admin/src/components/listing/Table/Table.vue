<template>
  <div class="listing">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Title / Excerpt</th>
          <th scope="col">Meta</th>
          <th scope="col">Image</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <listing-row :record="record" v-for="(record, index) in listing" :key="index"></listing-row>
      </tbody>
    </table>
    <listing-pagination 
      :total-pages="Number(pagination.totalItems) / Number(pagination.itemsPerPage)"
      :current-page="Number(pagination.currentPage)"
      :total="Number(pagination.totalItems)"
      :per-page="Number(pagination.itemsPerPage)"
    >
    </listing-pagination>
  </div>
</template>

<script>
import Row from "./row/Row.vue"
import Pagination from "./_pagination.vue"

export default {
  name: "listing-table",
  props: ["record"],
  components: {
    "listing-row": Row,
    "listing-pagination": Pagination
  },
  async beforeCreate() {
    this.$store.dispatch("content/setListing", {
      ct: this.$route.params.type,
      page: 1,
      size: 5
    });
  },
  computed: {
    listing() {
      return this.$store.getters["content/getListing"];
    },
    pagination() {
      return this.$store.getters["content/getPagination"];
    }
  }
};
</script>

