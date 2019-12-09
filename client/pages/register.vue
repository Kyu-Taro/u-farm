<template>
  <div class="container">
    <h2 class="center-xs">
      新規会員登録
    </h2>
    <form @submit.prevent="register" action="/register" method="POST">
      <input type="hidden">
      <div class="form-group">
        <label>お名前</label>
        <input v-model="registerForm.name" name="name" type="text">
      </div>
      <div class="form-group">
        <label>メールアドレス</label>
        <input v-model="registerForm.email" name="email" type="text">
      </div>
      <div class="form-group">
        <label>パスワード</label>
        <input v-model="registerForm.password" name="password" type="password" autocomplete="off">
      </div>
      <div class="form-group">
        <label>パスワード(確認)</label>
        <input v-model="registerForm.password_confirmation" name="password_confirmation" type="password" autocomplete="off">
      </div>
      <input type="submit" value="登録">
    </form>
  </div>
</template>

<script>

export default {
  components: {
  },
  layout: 'default',
  head () {
    return {
      title: 'register'
    }
  },
  data: () => {
    return {
      registerForm: {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        farmer_flg: false
      }
    }
  },
  methods: {
    async register () {
      await this.$store.dispatch('auth/register', this.registerForm)
      this.$router.push('/')
    }
  }
}
</script>

<style lang="scss" scoped>
</style>
