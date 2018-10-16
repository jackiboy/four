import axios from 'axios'
const actions = {
  setRecord: async (context, data) => {
    await axios.get(`/api/contents/${data.id}`).then((res) =>{
      const records = res.data.data
      context.commit('setRecord', records.attributes)
    })
  },
  makeChange: async (context, data) => {
    context.commit('makeChange', data)
  },
}

export default actions;