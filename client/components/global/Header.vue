<template>
  <header class="header">
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
      <h3>
        農家フラグ
        {{ farmer_flg }}
      </h3>
    </div>
    <div class="row middle-xs between-xs nav">
      <div class="col-xs start-xs">
        <div class="row">
          <div class="col-xs-12">
            <nuxt-Link to="/">
              <!-- 仮のロゴの画像 -->
              <img src="~/assets/image/logo.png" class="nav__logo">
            </nuxt-Link>
          </div>
        </div>
      </div>
      <div class="col-xs-7 end-xs nav__item-wrap">
        <div class="row">
          <div class="col-sm-3 hidden-xs">
            <div class="row middle-xs nav__item nav__item--home">
              <nuxt-link to="/" class="nav-item">
                <fa class="nav-item__icon" icon="home" />
                <div class="nav-item__text">
                  ホーム
                </div>
              </nuxt-link>
            </div>
          </div>
          <div class="col-sm-3 hidden-xs">
            <div class="row middle-xs nav__item nav__item--farmer">
              <nuxt-Link to="/registerAsFarmer" class="nav-item">
                <fa class="nav-item__icon" icon="user" />
                <div class="nav-item__text">
                    農家登録はこちら
                </div>
              </nuxt-Link>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="row middle-xs nav__item nav__item--register">
              <nuxt-Link to="/register" class="nav-item">
                <fa class="nav-item__icon" icon="pen" />
                <div class="nav-item__text">
                    新規会員登録
                </div>
              </nuxt-Link>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="row middle-xs nav__item nav__item--login">
              <div v-if="isLogin" class="nav-item">
                <!-- アイコンは変更してください -->
                <fa class="nav-item__icon" icon="arrow-alt-circle-right" />
                <div @click="logout" class="nav-item__text">
                  ログアウト
                </div>
              </div>
              <nuxt-Link to="/login" v-else class="nav-item">
                  <fa class="nav-item__icon" icon="arrow-alt-circle-right" />
                  <div class="nav-item__text">
                    ログイン
                  </div>
              </nuxt-Link>
            </div>
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
    },
    farmer_flg () {
      return this.$store.getters['auth/farmer_flg']
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
$nav-height: 120px;
$nav-item-icon-size: 1rem;
$nav-item-icon-margin: 8px;
header {
  position: sticky;
  top: 0;
  z-index: 99;
  width: 100%;
  .nav {
    background: #fff;
    height: $nav-height;
    &__logo {
      padding-left: 50px;
      &:hover {
        cursor: pointer;
      }
    }
    &__item-wrap {
      max-width: 700px;
    }
    &__item {
      height: $nav-height;
      padding: 10px;
      &--register {
        color: #fff;
        background: #639E56;
      }
      &--login {
        color: #fff;
        background: #33302F;
      }
    }
    .nav-item {
      display: flex;
      align-items: center;
      margin: 0 auto;
      &:hover {
        cursor: pointer;
      }
      &__icon {
        font-size: $nav-item-icon-size;
        margin-right: $nav-item-icon-margin;
      }
      &__text {
        flex: 1;
      }
    }
  }
}
</style>
