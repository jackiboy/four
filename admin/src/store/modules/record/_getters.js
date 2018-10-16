const getters = {
  getRecord(state) {
    return state.record;
  },
  getSlugField(state) {
    return query => state.changes.filter(field => {
      return field.name === query
    });
  }
}

export default getters;
