<template>
  <header>
    <div class="row middle-xs">
      <div class="col-xs start-xs">
        <div>
          <div class="row">
            <div class="col-xs-12">
              fresh vesitables fo you
            </div>
            <div class="col-xs-12">
              <Router-Link to="/">
                U_FARM
              </Router-Link>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 end-xs">
        <div class="row middle-xs">
          <div class="col-sm-3 hidden-xs">
            <nuxt-Link to="/">
              ホーム
            </nuxt-Link>
          </div>
          <div class="col-sm-3 hidden-xs">
            <!-- 仮です -->
            <nuxt-Link to="/register">
              農家登録はこちら
            </nuxt-Link>
          </div>
          <div class="col-xs-6 col-sm-3">
            <nuxt-Link to="/register">
              新規会員登録
            </nuxt-Link>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div v-if="isLogin" @click="logout">
              ログアウト
            </div>
            <nuxt-Link to="/login" v-else>
              ログイン
            </nuxt-Link>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  computed: {
    isLogin () {
      return this.$store.getters['auth/check']
    }
  },
  methods: {
    async logout () {
      await this.$store.dispatch('auth/getCsrfToken')
      await this.$store.dispatch('auth/logout')
      this.$router.push('/')
    }
  }
}
</script>

<style lang="scss" scoped>
</style>
