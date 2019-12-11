<template>
  <header class="header">
    <div class="row middle-xs ht120">
      <div class="col-xs start-xs">
        <div>
          <div class="row">
            <div class="col-xs-12">
              <!-- 仮のロゴの画像 -->
              <img src="/logo.png" class="logo">
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 end-xs">
        <div class="row middle-xs menu-wrap">
          <div class="col-sm-3 hidden-xs home">
            ホーム
          </div>
          <div class="col-sm-3 hidden-xs farmer">
            農家登録はこちら
          </div>
          <div class="col-xs-6 col-sm-3 register">
            新規会員登録
          </div>
          <div class="col-xs-6 col-sm-3 login">
            ログイン
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
header {
  position: fixed;
  top: 0;
  z-index: 99;
  width: 100%;
  background: #fff;
  height: 120px;
  .logo {
    padding-left: 50px;
  }
  .menu-wrap {
    height: 120px;
    text-align: center;
    display: flex;
    align-items: stretch;
    .register {
      color: white;
      background: #639E56;
    }
    .login {
      color: white;
      background: #33302F;
    }
    ::before{
      content: '〇';
      padding-right: 5px;
    }
  }
}

</style>
