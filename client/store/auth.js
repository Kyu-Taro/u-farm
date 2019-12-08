import axios from 'axios'

const state = {
  user: null
}

const getters = {}

const mutations = {
  setUser (state, user) {
    state.user = user
  }
}

const actions = {
  async register (content, data) {
    const response = await axios.post('api/register', data)
    // const response = await axios.get('api/test', data)
    console.log(response)
    content.commit('setUser', response.data)
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
