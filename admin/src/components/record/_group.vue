      <!-- ...</div> -->
<template>
  <div class="tab-pane mt-4" :id="group|slugify" :class="{'show active': index === 0}" role="tabpanel" :aria-labeledby="'tab-' + group|slugify">
    <div >
      <record-field :field="field" v-for="(field, index) in fields" :key="index"></record-field>
    </div>
  </div>
</template>

<script>
import Field from "./fields/Field.vue"

export default {
  name: "record-main",
  props: ["index", "group", "record"],
  components: {
    "record-field": Field
  },
  computed: {
    fields(){
      // const definitions = this.record.definition.fields
      // const mapDefinitions = Object.keys(definitions).map(key => { 
      //   definitions[key].name = key
      //   return definitions[key]
      // });
      // const filterDefinitions = mapDefinitions.filter(field => field.group === this.group)
      const values = this.record.fields;
      const filterValues = values.filter(field => field.definition.group === this.group);
      return filterValues;
    },
  }
};
</script>

