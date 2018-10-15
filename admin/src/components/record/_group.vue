      <!-- ...</div> -->
<template>
  <div class="tab-pane" :id="group|slugify" :class="{'show active': index === 0}" role="tabpanel" :aria-labeledby="'tab-' + group|slugify">
    <div v-for="(field, index) in fields" :key="index">
      <record-field :field="field"></record-field>
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
  mounted(){
    // console.log(this.record)
  },
  computed: {
    fields(){
      const fields = this.record.definition.fields
      const mapFields = Object.keys(fields).map(key => { 
        fields[key].name = key
        return fields[key]
      });
      const filterFields = mapFields.filter(field => field.group === this.group)
      return filterFields;
    },
  }
};
</script>

