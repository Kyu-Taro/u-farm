const state = {
  item: null
}

const getters = {
  item: state => state.item
}

const mutations = {
  setItem (state, item) {
    state.item = item
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations
}
