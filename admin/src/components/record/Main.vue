<template>
  <main class="col-9">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" v-for="(group, index) in record.definition ? record.definition.groups:[]" :key="index">
        <a class="nav-link" data-toggle="tab" role="tab" :class="{'show active': index === 0}" :href="group|anchor" :id="'tab-' + group|slugify">{{group}}</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <record-group 
        :index="index"
        :group="group" 
        :record="record" 
        v-for="(group, index) in record.definition ? record.definition.groups:[]" 
        :key="index"
      ></record-group>
    </div>
  </main>
</template>

<script>
import Group from "./_group.vue"

export default {
  name: "record-main",
  props: ["record"],
  components: {
    "record-group": Group
  }
};
</script>

