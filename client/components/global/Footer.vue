<template>
  <footer>
    <div class="row center-xs footer">
      <div class="col-xs-12 footer__nav">
        <ul class="row center-xs">
          <li class="footer__nav-link">
            ホーム
          </li>
          <li class="footer__nav-link">
            ログイン
          </li>
          <li class="footer__nav-link">
            新規登録
          </li>
          <li class="footer__nav-link">
            商品一覧
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
}
</script>

<style lang="scss" scoped>
.footer {
  background: #D5D5D5;
  padding: 30px 0;
  &__nav {
    padding: 30px 0;
    &-link {
      padding: 0 10px;
      border-right: 1px solid #33302F;
      &:last-child {
        border-right: none;
      }
    }
  }
}
</style>
