import axios from 'axios'
import Cookie from 'js-cookie'

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
    await this.$axios.get('/api/csrftoken')
    const csrfToken = Cookie.get('XSRF-TOKEN')
    console.log('TCL: register -> csrfToken', csrfToken)
    const headers = {
      'X-XSRF-TOKEN': csrfToken
    }
    const response = await axios.post('/api/register', data, { headers })
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
