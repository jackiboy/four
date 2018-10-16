<template>
  <div class="form-group" :class="{'row': data.variant === 'inline'}">
    <field-helper v-if="data.prefix" :message="data.prefix" :variant="data.variant"></field-helper>
    <field-label :label="data.label" :name="data.name" :variant="data.variant"></field-label>
    <div :class="{'col-sm-10': data.variant === 'inline'}">
      <input 
        class="form-control" 
        :class="{'form-control-lg': data.class === 'large'}"
        :placeholder="placeholder"
        :id="data.name"
        v-model="value"
      >
    </div>
    <field-helper v-if="data.postfix" :message="data.postfix" :variant="data.variant"></field-helper>
  </div>
</template>

<script>
import inject from './mixins/fieldInject.js'
import Label from './components/Label.vue'
import Helper from './components/Helper.vue'

export default {
  name: "field-text",
  props: ["data"],
  mixins: [inject],
  mounted(){
    console.log(this.data)
  },
  components: {
    "field-label": Label,
    "field-helper": Helper
  }
};
</script>

