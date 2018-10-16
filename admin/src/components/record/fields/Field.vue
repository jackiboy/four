<template>
  <div>
    <field-text v-if="field.type === 'text'" :define="field.definition" :value="field"></field-text>
    <!-- <field-slug v-if="field.type === 'slug'" :data="field"></field-slug> -->
  </div>
</template>

<script>
import Text from './_text.vue';
import Slug from './_slug.vue';

export default {
  name: "record-field",
  props: ["field"],
  components: {
    "field-text": Text,
    "field-slug": Slug
  },
};
</script>

