const mutations ={
  setRecord(state, data){
    state.record = data
  },
  makeChange(state, data){
    const existing = state.changes.findIndex(field => field.id === data.id);
    if(existing === -1){
      state.changes.push(data)
    } else {
      state.changes[existing].value = data.value
    }
  }
}

export default mutations;