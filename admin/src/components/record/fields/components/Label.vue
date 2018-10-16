<template>
  <label :for="name" :class="{'col-sm-2 col-form-label': variant === 'inline'}">
    <template v-if="label !== ''">
      {{label}}:
    </template>
    <template v-else>
      {{name}}:       
    </template>
  </label>
</template>

<script>
export default {
  name: "field-component-label",
  props: {
    label: {
      type: String,
      required: true
    },
    name: {
      type: String,
      required: true
    },
    variant: {
      type: String,
      required: true
    },
  },
};
</script>

