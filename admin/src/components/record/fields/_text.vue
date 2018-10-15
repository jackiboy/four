<template>
  <div class="form-group">
    <small class="form-text text-muted" v-if="data.prefix">{{data.prefix}}</small>
    <label :for="data.name">
      <template v-if="data.label !== ''">
        {{data.label}}:
      </template>
      <template v-else>
        {{data.name}}:       
      </template>
    </label>
    <div class="col-sm-10"></div>
    <input 
      class="form-control" 
      :class="{'form-control-lg': data.class === 'large'}"
      :placeholder="placeholder"
      :id="data.name"
      v-model="text"
    >
    <small class="form-text text-muted" v-if="data.postfix">{{data.postfix}}</small>
  </div>
</template>

<script>


export default {
  name: "field-text",
  props: ["data"],
  data: () => {
    return {
      text: null
    };
  },
  computed: {
    placeholder(){
      const placeholder = this.data.placeholder
      if(placeholder !== '' && placeholder !== undefined){
        return this.data.placeholder
      } else {
        return ''
      }
    }
  }
};
</script>

