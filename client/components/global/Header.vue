<template>
  <header>
    <div>
      <h1>
        ログイン確認用
      </h1>
      <h2>
        <template v-if="$store.getters['auth/check']">
          ログイン中
        </template>
        <template v-else>
          ログアウト中
        </template>
      </h2>
      <h2>
        ログイン情報
      </h2>
      <p>
        {{ $store.state.auth.user }}
      </p>
    </div>
    <div class="row middle-xs">
      <div class="col-xs start-xs">
        <div>
          <div class="row">
            <div class="col-xs-12">
              fresh vesitables fo you
            </div>
            <div class="col-xs-12">
              <nuxt-Link to="/">
                U_FARM
              </nuxt-Link>
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
            <nuxt-Link v-else to="/login">
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
