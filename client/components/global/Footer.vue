<template>
  <footer class="footer container">
    <div class="row center-xs">
      <div class="col-xs-12 footer__nav">
        <ul class="row center-xs">
          <li class="footer__nav-link">
            <nuxt-Link to="/">
              ホーム
            </nuxt-Link>
          </li>
          <li v-if="isLogin" @click="logout" class="footer__nav-link">
            ログアウト
          </li>
          <li v-else class="footer__nav-link">
            <nuxt-Link to="login">
              ログイン
            </nuxt-Link>
          </li>
          <li class="footer__nav-link">
            <nuxt-Link to="/register">
              新規登録
            </nuxt-Link>
          </li>
          <li class="footer__nav-link">
            <nuxt-Link to="/items">
              商品一覧
            </nuxt-Link>
          </li>
        </ul>
      </div>
      <div class="col-xs-12 footer__text">
        Copyright ©︎ 2019 U-Farm All rights reserved.
      </div>
    </div>
  </footer>
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
.footer {
  width: 100%;
  padding-top: 30px;
  padding-bottom: 30px;
  background: #D5D5D5;
  &__nav {
    padding-top: 30px;
    padding-bottom: 30px;
    &-link {
      padding: 0 15px;
      border-right: 1px solid #33302F;
      cursor: pointer;
      &:last-child {
        border-right: none;
      }
    }
  }
}
</style>
