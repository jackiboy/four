<template>
  <div>
    <field-text v-if="field.type === 'text'" :data="field"></field-text>
  </div>
</template>

<script>
import Text from './_text.vue';

export default {
  name: "record-field",
  props: ["field"],
  components: {
    "field-text": Text
  },
};
</script>

