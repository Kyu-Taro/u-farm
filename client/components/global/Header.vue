<template>
  <header>
    <div class="row middle-xs">
      <div class="col-xs start-xs">
        <div>
          <div class="row">
            <div class="col-xs-12">
              fresh vesitables fo you
            </div>
            <div class="col-xs-12">
              <Router-Link to="/">
                U_FARM
              </Router-Link>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 end-xs">
        <div class="row middle-xs">
          <div class="col-sm-3 hidden-xs">
            <Router-Link to="/">
              ホーム
            </Router-Link>
          </div>
          <div class="col-sm-3 hidden-xs">
            <!-- 仮です -->
            <Router-Link to="/register">
              農家登録はこちら
            </Router-Link>
          </div>
          <div class="col-xs-6 col-sm-3">
            <Router-Link to="/register">
              新規会員登録
            </Router-Link>
          </div>
          <div class="col-xs-6 col-sm-3">
            <Router-Link to="/login">
              ログイン
            </Router-Link>
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
</style>
