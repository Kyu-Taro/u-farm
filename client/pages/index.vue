<template>
  <div class="index container">
    <section>
      <div class="row center-xs">
        <div class="col-xs-12">
          <h1>
            U-FARM
          </h1>
          <p>
            農家から直接購入できる新しい野菜売買サービス
          </p>
        </div>
      </div>
      <div class="row center-xs">
        <div class="col-xs-12 col-sm-6">
          <Button>
            <fa icon="chevron-right" fixed-width />
            農家登録はこちら
          </Button>
        </div>
        <div class="col-xs-12 col-sm-6">
          <Button background="#9BD458">
            <fa icon="chevron-right" fixed-width />
            ユーザー登録はこちら
          </Button>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-xs-12">
          <h2 class="center-xs">
            U-FARMとは
          </h2>
          <p>
            U-farmは消費者と生産者を繋ぐ新しい農産物売買サービスです。<br>
            農協やスーパーなどを通さず、生産者から直接購入できるので、<br>
            安く新鮮な野菜をいつでもお家で食べる事ができます。<br>
            また、生産者のプロフィールやこだわりなどもチェックできるので安心して利用できます。<br>
          </p>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-xs-12 center-xs">
          <h2>
            まずは登録
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-5 center-xs">
          <h3>
            農家の方
          </h3>
          <p>
            農家の方は必要な情報を入力後、口座情報を登録で完了です！<br>
            出品したい商品の写真と共に、商品の詳細を入力するだけで簡単に出品できます。商品が購入されたら、登録先のE-mail宛にメールが届くので、あとは発送するだけです！
          </p>
          <Button>
            農家登録はこちらから！
          </Button>
        </div>
        <div class="col-xs-12 col-sm-2 center-xs">
          <span>
            arrow
          </span>
        </div>
        <div class="col-xs-12 col-sm-5 center-xs">
          <h3>
            買いたい方
          </h3>
          <p>
            まずはユーザー会員登録！<br>
            氏名や住所など1分で登録は完了。<br>
            その後検索機能や出品一覧で欲しい商品を選び、購入。発送後に登録E-mail宛にメールが届き、あとは到着を待つだけ！クレジット決済も可能でお手軽に購入できます。
          </p>
          <Button background="#9BD458">
            ユーザー登録はこちらから
          </Button>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-4">
          <div>
            <div class="row">
              <div class="col-xs">
                <h2>
                  野菜をおいしく、身近に。
                </h2>
                <p>
                  野菜や果物をもっと手軽に、生活に取り入れませんか？<br>
                  U-Farmは、もっと食卓に野菜や果物を並べて欲しいという願いの下開発されました。<br>
                  住んでいる場所や環境に囚われる事なく、おいしくて新鮮な野菜を、好きな産地の農家から直接手に入れ、手軽に食べる事ができる幸せをあなたに。<br>
                  各農家の方においしい食べ方やおすすめの調理法を紹介してもらっているので、ぜひこの機会に試してみてください。
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <Button>
                <fa icon="chevron-right" fixed-width />
                農家登録
              </Button>
            </div>
            <div class="col-xs-6">
              <Button background="#9BD458">
                <fa icon="chevron-right" fixed-width />
                ユーザー登録
              </Button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Button from '~/components/global/Button.vue'

export default {
  components: {
    Button
  },
  layout: 'default',
  head () {
    return {
      title: 'top'
    }
  }
}
</script>

<style lang="scss" scoped>
.index{
  // 今だけ背景色塗り
  background: #E9F1F3;
}
</style>
