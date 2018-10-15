<template>
  <div class="btn-group">
    <a :href="`/content/edit/${record._id}`" class="btn btn-light" ><i class="fa fa-pencil"></i>  Edit</a>
    <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu dropdown-menu-right">
      <button class="dropdown-item" href="#" type="button">
        <i class="fa fa-trash-o"></i> delete record
      </button>
      <button class="dropdown-item" href="#" type="button">
        <i class="fa fa-clone"></i> duplicate record
      </button>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">status:</h6>
      <span v-for="(status, index) in record.statuses" :key="index">
        <template v-if="status !== record.status">
          <button class="dropdown-item" type="button">
            {{status}}
          </button>
        </template>
      </span>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">meta:</h6>
      <p class="dropdown-item"><i class="fa fa-star"></i> {{record.createdAt|datetime}}</p>
      <p class="dropdown-item"><i class="fa fa-calendar"></i> {{record.publishedAt|datetime}}</p>
      <p class="dropdown-item"><i class="fa fa-pencil"></i>  {{record.modifiedAt|datetime}}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "listing-td-dropdown",
  props: ["record"]
};
</script>