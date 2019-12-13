import axios from 'axios'
import Cookie from 'js-cookie'

const state = {
  user: null,
  csrfToken: null
}

const getters = {}

const mutations = {
  setUser (state, user) {
    state.user = user
  },
  setCsrfToken (state, csrfToken) {
    state.csrfToken = csrfToken
  }
}

const actions = {
  async getCsrfToken (content) {
    await this.$axios.get('/api/csrftoken')
    const csrfToken = Cookie.get('XSRF-TOKEN')
    content.commit('setCsrfToken', csrfToken)
  },
  async register (content, data) {
    const headers = {
      'X-XSRF-TOKEN': state.csrfToken
    }
    const response = await axios.post('/api/register', data, headers)
    content.commit('setUser', response.data)
  },
  async login (content, data) {
    const headers = {
      'X-XSRF-TOKEN': state.csrfToken
    }
    const response = await axios.post('/api/login', data, headers)
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
