const getters = {
  getListing(state) {
    return state.content;
  },
  getCT(state) {
    return state.ct;
  },
  getPagination(state) {
    return state.pagination;
  },
  getCurrent(state) {
    return state.current;
  },
}

export default getters;
