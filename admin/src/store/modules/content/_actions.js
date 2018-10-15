import axios from 'axios'
const actions = {
   setListing: async (context, data) => {
    await axios.get(`/api/contents?contentType=${data.ct}&page=${data.page}&pageSize=${data.size}`).then((res) =>{
      const records = res.data.data
      const attributes = records.map(attr => attr.attributes )
      context.commit('setCT', data.ct)
      context.commit('setListing', attributes)
      context.commit('setPagination', res.data.meta)
    })
  },
  setCurrent: async (context, data) => {
    await axios.get(`/api/contents/${data.id}`).then((res) =>{
      const records = res.data.data
      context.commit('setCurrent', records.attributes)
    })
  },
}

export default actions;