<template>
  <div>
    <textarea
      v-model="val"
      class="form-control field--textarea"
      :name="name"
      rows="10"
    ></textarea>
  </div>
</template>

<script>
import field from '../../../mixins/value';

export default {
  name: 'EditorTextarea',
  mixins: [field],
  props: ['value', 'label', 'name'],
};
</script>
