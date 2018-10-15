<template>
  <ul class="pagination">
    <li class="page-item" :class="{disabled: firstPage}">
      <a class="page-link" @click="previous">
        Previous
      </a>
    </li>
    <li v-for="(page, index) in pages" :key="index" class="page-item" :class="{ active: active(page.name) }">
      <a @click="number(page.name)" :disabled="page.isDisabled" class="page-link" >
        {{ page.name }}
      </a>
    </li>
    <li class="page-item" :class="{disabled: lastPage}">
      <a class="page-link" @click="next">
        Next
      </a>
    </li>
  </ul>
</template>

<script>
export default {
  name: "listing-pagination",
  props: {
    maxVisibleButtons: {
      type: Number,
      required: false,
      default: 3
    },
    totalPages: {
      type: Number,
      required: true
    },
    total: {
      type: Number,
      required: true
    },
    perPage: {
      type: Number,
      required: true
    },
    currentPage: {
      type: Number,
      required: true
    }
  },
  methods: {
    previous() {
      this.$store.dispatch("content/setListing", {
        ct: this.$route.params.type,
        page: this.currentPage - 1,
        size: 5
      });
    },
    number(page) {
      this.$store.dispatch("content/setListing", {
        ct: this.$route.params.type,
        page: page,
        size: 5
      });
    },
    next() {
      this.$store.dispatch("content/setListing", {
        ct: this.$route.params.type,
        page: this.currentPage + 1,
        size: 5
      });
    },
    active(page) {
      return this.currentPage === page;
    }
  },
  computed: {
    start() {
      if (this.currentPage === 1) {
        return 1;
      }

      if (this.currentPage === this.totalPages) {
        return this.totalPages - this.maxVisibleButtons + 1;
      }

      return this.currentPage - 1;
    },
    end() {
      return Math.min(
        this.start + this.maxVisibleButtons - 1,
        this.totalPages
      );
    },
    pages() {
      const range = [];

      for (let i = this.start; i <= this.end; i += 1) {
        range.push({
          name: i,
          isDisabled: i === this.currentPage
        });
      }

      return range;
    },
    firstPage() {
      return this.currentPage === 1;
    },
    lastPage() {
      return this.currentPage === this.totalPages;
    }
  }
};
</script>

