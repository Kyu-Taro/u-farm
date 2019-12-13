import axios from 'axios'
import Cookie from 'js-cookie'

const state = {
  user: null,
  headers: {}
}

const getters = {}

const mutations = {
  setUser (state, user) {
    state.user = user
  },
  setCsrfToken (state, headers) {
    state.headers = headers
  }
}

const actions = {
  async getCsrfToken (content) {
    await this.$axios.get('/api/csrftoken')
    const csrfToken = Cookie.get('XSRF-TOKEN')
    const headers = {
      'X-XSRF-TOKEN': csrfToken
    }
    content.commit('setCsrfToken', headers)
  },
  async register (content, data) {
    const response = await axios.post('/api/register', data, state.headers)
    content.commit('setUser', response.data)
  },
  async login (content, data) {
    const response = await axios.post('/api/login', data, state.headers)
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
