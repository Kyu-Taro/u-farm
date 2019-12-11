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

// try catchhあとで実装
const actions = {
  async register (content, data) {
    const response = await axios.post('/api/register', data)
    console.log(response)
    content.commit('setUser', response.data)
  },
  async login (content, data) {
    const response = await axios.post('/api/login', data)
    console.log(response)
    content.commit('setUser', response.data)
  },
  async logout (content) {
    await axios.post('/api/logout')
    content.commit('setUser', null)
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
