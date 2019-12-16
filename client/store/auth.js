import Cookie from 'js-cookie'

const state = {
  user: null
}

const getters = {
  check: state => !!state.user,
  username: state => state.user ? state.user.name : ''
}

const mutations = {
  setUser (state, user) {
    state.user = user
  }
}

const actions = {
  async getCsrfToken ({ dispatch }) {
    await this.$axios.get('/api/csrftoken')
    dispatch('updateCsrfToken')
  },
  updateCsrfToken () {
    const csrfToken = Cookie.get('XSRF-TOKEN')
    this.$axios.defaults.headers.common['X-XSRF-TOKEN'] = csrfToken
  },
  async register ({ state, commit, dispatch }, data) {
    const response = await this.$axios.post('/api/register', data, state.headers)
    console.log('register success', response.data)
    commit('setUser', response.data.data.user)
    dispatch('updateCsrfToken')
  },
  async login ({ state, commit, dispatch }, data) {
    const response = await this.$axios.post('/api/login', data, state.headers)
    console.log('login success', response.data)
    commit('setUser', response.data.data.user)
    // loginするとcsrftoken変わるlaravelは知らないけど！
    dispatch('updateCsrfToken')
  },
  async logout ({ commit, dispatch }) {
    await this.$axios.post('/api/logout')
    commit('setUser', null)
    dispatch('updateCsrfToken')
  },
  async fetchUserInfo ({ state, commit }) {
    try {
      const response = await this.$axios.get('/api/user')
      commit('setUser', response.data.data.user)
    } catch (e) {
      console.error(e.response)
      commit('setUser', null)
      throw e
    }
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
