<template>
  <div class="form-group" :class="{'row': define.variant === 'inline'}">
    <field-helper v-if="define.prefix" :message="define.prefix" :variant="define.variant"></field-helper>
    <field-label :label="define.label" :name="value.name" :variant="define.variant"></field-label>
    <div :class="{'col-sm-10': define.variant === 'inline'}">
      <input 
        class="form-control" 
        :class="{'form-control-lg': define.class === 'large'}"
        :placeholder="placeholder"
        :id="define.name"
        v-model="val"
      >
    </div>
    <field-helper v-if="define.postfix" :message="define.postfix" :variant="define.variant"></field-helper>
  </div>
</template>

<script>
import inject from './mixins/fieldInject.js'
import Label from './components/Label.vue'
import Helper from './components/Helper.vue'

export default {
  name: "field-text",
  props: ["define", "value"],
  mixins: [inject],
  components: {
    "field-label": Label,
    "field-helper": Helper
  },
  mounted(){
    const val = this.value.value
    if(val.length > 0){
      this.val = val[0]
    }
  },
  data: () => {
    return {
      val: null
    };
  },
};
</script>

