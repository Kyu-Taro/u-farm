<template>
  <header>
    <div style="display:none;">
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
    <div class="row middle-xs">
      <!-- ロゴ -->
      <div class="col-xs start-xs">
        <nuxt-Link to="/" class="logo__link">
          <!-- 仮の画像 -->
          <img src="~/assets/image/logo.png" class="logo__img">
        </nuxt-Link>
      </div>
      <!-- メニュー -->
      <div v-show="navShow" class="end-xs nav">
        <div v-if="isLogin && farmer_flg" class="nav__item--white">
          <nuxt-link to="/" class="nav__item-link">
            <fa class="nav__item-icon" icon="home" />
            ホーム
          </nuxt-link>
        </div>
        <div v-else-if="isLogin" class="nav__item--white">
          <nuxt-link to="/" class="nav__item-link">
            <fa class="nav__item-icon" icon="home" />
            ホーム
          </nuxt-link>
        </div>
        <div v-if="!isLogin">
          <div class="nav__item--white">
            <nuxt-Link to="/registerAsFarmer" class="nav__item-link">
              <fa class="nav__item-icon" icon="user" />
              農家登録はこちら
            </nuxt-Link>
          </div>
        </div>
        <div v-if="!isLogin">
          <div class="nav__item--green">
            <nuxt-Link to="/register" class="nav__item-link">
              <fa class="nav__item-icon" icon="pen" />
              新規会員登録
            </nuxt-Link>
          </div>
        </div>
        <div>
          <div class="nav__item--black">
            <div v-if="isLogin" @click="logout" class="nav__item-link">
              <fa class="nav__item-icon" icon="arrow-alt-circle-right" />
              ログアウト
            </div>
            <nuxt-Link v-else to="/login" class="nav__item-link">
              <fa class="nav__item-icon" icon="arrow-alt-circle-right" />
              ログイン
            </nuxt-Link>
          </div>
        </div>
      </div>
      <!-- スマホ用ハンバーガーメニューアイコン -->
      <div @click="navShow = !navShow" class="menu-bar">
        <fa :class="navShow ? 'hidden' : 'block'" icon="bars" />
        <fa :class="navShow ? 'block' : 'hidden'" icon="times" />
      </div>
    </div>
  </header>
</template>

<script>
export default {
  data () {
    return {
      navShow: true,
      windowWidth: window.innerWidth
    }
  },
  computed: {
    isLogin () {
      return this.$store.getters['auth/check']
    },
    farmer_flg () {
      return this.$store.getters['auth/farmer_flg']
    }
  },
  created () {
    if (this.windowWidth <= 680) {
      this.navShow = false
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
$tab: 680px; // タブレッド以下
@mixin tab {
  @media (max-width: ($tab)) {
    @content;
  }
}

$nav-height: 120px;
$nav-item-icon-size: 1rem;
$nav-item-icon-margin: 8px;
header {
  position: sticky;
  top: 0;
  z-index: 999;
  width: 100%;
  padding-right: 8px;
  padding-left: 8px;
  box-shadow: 0 0 8px #ccc;
  background: #fff;
  height: $nav-height;
  @include tab {
    height: $nav-height / 2;
  }
  .logo__link {
    display: inline-block;
  }
  .logo__img {
    padding-left: 32px;
    &:hover {
      cursor: pointer;
    }
    @include tab {
      padding-left: 0;
    }
  }
  .nav {
    display: flex;
    line-height: $nav-height;
    @include tab {
      flex-direction: column;
      position: absolute;
      top: $nav-height / 2;
      left: 0;
      right: 0;
    }
    &__item {
      height: $nav-height;
      width: 160px;
      display: flex;
      justify-content: center;
      @include tab {
        width: 100%;
        height: 60px;
      }
      &--white { //ホーム・農家登録
        @extend .nav__item;
        background: rgba(255, 255, 255, 0.7)
      }
      &--green { //ユーザー登録
        @extend .nav__item;
        color: #fff;
        background: #639E56;
      }
      &--black { //ログイン・ログアウト
        @extend .nav__item;
        color: #fff;
        background: #33302F;
      }
      &-link {
        display: flex;
        align-items: center;
        justify-content: center;
        &:hover {
          cursor: pointer;
        }
      }
      &-icon {
        font-size: $nav-item-icon-size;
        margin-right: $nav-item-icon-margin;
      }
    }
  }
  .menu-bar {
    display: none;
    margin-right: 8px;
    padding: 8px;
    font-size: 32px;
    cursor: pointer;
    @include tab {
      display: block;
    }
    .block {
      display: block;
    }
    .hidden {
      display: none;
    }
  }
}
</style>
