<template>
  <div class="form-group" :class="{'row': define.variant === 'inline'}">
    <field-helper v-if="define.prefix" :message="define.prefix" :variant="define.variant"></field-helper>
    <field-label :label="define.label" :name="value.name" :variant="define.variant"></field-label>
    <div :class="{'col-sm-10': define.variant === 'inline'}">
      <div class="input-group">
        <input type="text" class="form-control col-sm-2" :value="value.slugPrefix" disabled>
        <input 
          type="text" 
          class="form-control col-sm-10"
          v-model="val"
          :disabled='!edit'
        >
        <div class="input-group-append">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" @click="editSlug">edit</a>
          <a class="dropdown-item" @click="generateSlug">generate from title</a>
        </div>
        </div>
      </div>
    </div>
    <field-helper v-if="define.postfix" :message="define.postfix" :variant="define.variant"></field-helper>
  </div>
</template>

<script>
import inject from './mixins/attributesInject.js'
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
      val: null,
      edit: false
    };
  },
  watch: {
    val(){
      this.$store.dispatch('record/makeChange', {value: this.val, id: this.value.id, name: this.value.name})
    }
  },
  methods: {
    editSlug(){
      if(this.edit){
        this.edit = false
      } else {
        this.edit = true
      }
    },
    generateSlug(){
      const slugField = this.$store.getters['record/getSlugField'](this.value.slugUseFields[0])
      const slug = this.$options.filters.slugify(slugField[0].value)
      this.val = slug;
    }
  }
};
</script>

