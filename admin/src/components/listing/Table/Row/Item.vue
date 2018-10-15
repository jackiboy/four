<template>
  <tr>
    <!-- Title / Excerpt -->
    <td style="width: 50%">
      <p>
        <strong>{{record.magictitle}}</strong> {{record.magicexcerpt}}
      </p>
    </td>
    <!-- Meta -->
    <td>
      <ul>
        <li>{{record.contenttype}} № {{record._id}}</li>
        <li>{{record.author.fullName}}</li>
        <li><span class="status" :class="`is-${record.status}`">{{record.status}}</span> {{record.publishedAt|date}}</li>
      </ul>
    </td>
    <!-- Image -->
    <td>image</td>
    <!-- Actions -->
    <td>
      <listing-record-dropdown :record="record"></listing-record-dropdown>
    </td>
  </tr>
</template>

<script>
  import Dropdown from './_dropdown.vue';
  export default {
    name: 'listing-item',
    props: ["record"],
    components: {
      "listing-record-dropdown": Dropdown
    },
  }
</script>