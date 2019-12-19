<template>
  <div class="container">
    <form @submit.prevent="login">
      <input type="hidden">
      <div class="form-group">
        <label>メールアドレス</label>
        <input v-model="loginForm.email" name="email" type="text">
      </div>
      <div class="form-group">
        <label>パスワード</label>
        <input v-model="loginForm.password" name="password" type="password" autocomplete="off">
      </div>
      <input type="submit" value="ログイン">
    </form>
    <button @click="logout" class="button button--link">
      Logout
    </button>
  </div>
</template>

<script>
// import { mapMutations } from 'vuex'

export default {
  components: {
  },
  layout: 'default',
  head () {
    return {
      title: 'login'
    }
  },
  data: () => {
    return {
      loginForm: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    async login () {
      try {
        await this.$store.dispatch('auth/getCsrfToken')
        await this.$store.dispatch('auth/login', this.loginForm)
        if (this.$store.getters['auth/farmer_flg']) {
          this.$router.push('/')
          console.log('農家ログイン成功')
        } else {
          console.log('一般ログイン成功')
          this.$router.push('/')
        }
      } catch (e) {
        // とりあえず
        console.error('ログインエラー', e.response)
      }
    },
    async logout () {
      try {
        await this.$store.dispatch('auth/getCsrfToken')
        await this.$store.dispatch('auth/logout')
        this.$router.push('/')
      } catch (e) {
        console.error('ログアウトエラー', e.response)
      }
    }
  }
}
</script>

<style lang="scss" scoped>
</style>
