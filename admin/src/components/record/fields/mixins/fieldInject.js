export default {
  mounted(){
    const placeholder = this.define.placeholder
    if(placeholder !== '' && placeholder !== undefined){
      this.placeholder = this.define.placeholder
    }
  },
  data: () => {
    return {
      placeholder: null
    };
  },
}