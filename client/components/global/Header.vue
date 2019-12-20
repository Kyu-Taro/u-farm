<template>
  <header class="header">
    <div class="row middle-xs between-xs nav">
      <div class="col-xs-5 start-xs">
        <div>
          <!-- 仮のロゴの画像 -->
          <img src="~/assets/image/logo.png" class="nav__logo">
        </div>
      </div>
      <div class="col-xs-7 end-xs nav__item-wrap">
        <div class="row">
          <div class="col-sm-3 hidden-xs">
            <div class="row middle-xs nav__item nav__item--home">
              <div class="nav-item">
                <fa class="nav-item__icon" icon="home" />
                <div class="nav-item__text">
                  ホーム
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 hidden-xs">
            <div class="row middle-xs nav__item nav__item--farmer">
              <div class="nav-item">
                <fa class="nav-item__icon" icon="user" />
                <div class="nav-item__text">
                  農家登録はこちら
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="row middle-xs nav__item nav__item--register">
              <div class="nav-item">
                <fa class="nav-item__icon" icon="pen" />
                <div class="nav-item__text">
                  新規会員登録
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="row middle-xs nav__item nav__item--login">
              <div class="nav-item">
                <fa class="nav-item__icon" icon="arrow-alt-circle-right" />
                <div class="nav-item__text">
                  ログイン
                </div>
              </div>
            </div>
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
$nav-height: 120px;
$nav-item-icon-size: 1rem;
$nav-item-icon-margin: 8px;
header {
  position: fixed;
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
