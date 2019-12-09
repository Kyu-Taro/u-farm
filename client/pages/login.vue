<template>
  <div class="container">
    <form @submit.prevent="login" action="/login" method="POST">
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
      // console.log(this.loginForm)
      await this.$store.dispatch('auth/login', this.loginForm)
      this.$router.push('/')
    }
  }
}
</script>

<style lang="scss" scoped>
</style>
