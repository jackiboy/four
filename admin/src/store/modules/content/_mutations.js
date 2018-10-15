const mutations ={
  setListing(state, data){
      state.content = data
  },
  setCT(state, data){
    state.ct = data
  },
  setPagination(state, data){
    state.pagination = data
  },
}

export default mutations;