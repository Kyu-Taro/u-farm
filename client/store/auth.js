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
    console.log(response)
    content.commit('setUser', response.data)
  },
  async login (content, data) {
    const response = await axios.post('api/login', data)
    content.commit('setUSer', response.data)
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
