<template>
  <div :class="{'col-sm-12': variant === 'inline'}">
    <small class="form-text text-muted" v-html="message"></small>
  </div>
</template>

<script>
export default {
  name: "field-component-helper",
  props: {
    message: {
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

