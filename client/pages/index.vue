<template>
  <div class="index">
    <section class="top-image">
      <div class="row center-xs">
        <div class="top-image__contents">
          <h1 class="logo">
            U-FARM
          </h1>
          <p class="text">
            農家から直接購入できる新しい野菜売買サービス
          </p>
          <div>
            <Button class="btn-wrap">
              <nuxt-Link to="/registerAsFarmer" class="btn-link">
                <fa icon="chevron-right" fixed-width />
                農家登録はこちら
              </nuxt-Link>
            </Button>
            <Button class="btn-wrap" background="#9BD458">
              <nuxt-Link to="/register" class="btn-link">
                <fa icon="chevron-right" fixed-width />
                ユーザー登録はこちら
              </nuxt-Link>
            </Button>
          </div>
        </div>
      </div>
    </section>
    <div class="circle">
      <section class="intro container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="center-xs intro__service-name">
              U-FARMとは
            </h2>
            <p class="intro__service-text">
              U-farmは消費者と生産者を繋ぐ新しい農産物売買サービスです。<br>
              農協やスーパーなどを通さず、生産者から直接購入できるので、<br>
              安く新鮮な野菜をいつでもお家で食べる事ができます。<br>
              また、生産者のプロフィールやこだわりなどもチェックできるので安心して利用できます。<br>
            </p>
          </div>
        </div>
      </section>
      <section class="how-register container">
        <div class="row">
          <div class="col-xs-12 center-xs">
            <h2 class="how-register__title">
              ＼<span>まずは登録</span>／
            </h2>
          </div>
        </div>
        <div class="row around-xs">
          <div class="col-xs-12 col-sm-5 center-xs how-register__block">
            <span><img src="~/assets/image/farm.png"></span>
            <p class="how-register__who">
              農家の方
            </p>
            <p class="how-register__text">
              農家の方は必要な情報を入力後、口座情報を登録で完了です！<br>
              出品したい商品の写真と共に、商品の詳細を入力するだけで簡単に出品できます。商品が購入されたら、登録先のE-mail宛にメールが届くので、あとは発送するだけです！
            </p>
            <Button>
              <nuxt-Link to="/registerAsFarmer" class="btn-link">
                農家登録はこちらから！
              </nuxt-Link>
            </Button>
          </div>
          <div class="col-xs-12 col-sm-2 center-xs how-register__arrow">
            <div>
              <img src="~/assets/image/money.png">
            </div>
            <div class="rotate">
              <img src="~/assets/image/arrow.png">
            </div>
            <div>
              <img src="~/assets/image/tomato.png">
            </div>
          </div>
          <div class="col-xs-12 col-sm-5 center-xs how-register__block">
            <span><img src="~/assets/image/user.png"></span>
            <p class="how-register__who">
              買いたい方
            </p>
            <p class="how-register__text">
              まずはユーザー会員登録！<br>
              氏名や住所など1分で登録は完了。<br>
              その後検索機能や出品一覧で欲しい商品を選び、購入。発送後に登録E-mail宛にメールが届き、あとは到着を待つだけ！クレジット決済も可能でお手軽に購入できます。
            </p>
            <Button background="#9BD458">
              <nuxt-Link to="/register" class="btn-link">
                ユーザー登録はこちらから！
              </nuxt-Link>
            </Button>
          </div>
        </div>
      </section>
    </div>
    <section class="top-image2">
      <div class="recommend">
        <div class="recommend__container">
          <div class="row">
            <div class="col-xs">
              <h2 class="recommend__title">
                野菜をおいしく、身近に。
              </h2>
              <p class="recommend__text">
                野菜や果物をもっと手軽に、生活に取り入れませんか？<br>
                U-Farmは、もっと食卓に野菜や果物を並べて欲しいという<br>願いの下開発されました。<br>
                住んでいる場所や環境に囚われる事なく、<br>おいしくて新鮮な野菜を、好きな産地の農家から<br>直接手に入れ、手軽に食べる事ができる幸せをあなたに。<br>
                各農家の方においしい食べ方やおすすめの調理法を紹介して<br>もらっているので、ぜひこの機会に試してみてください。
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-lg-6 btn-wrap">
              <Button>
                <nuxt-Link to="/registerAsFarmer" class="btn-link">
                  <fa icon="chevron-right" fixed-width />
                  農家登録
                </nuxt-Link>
              </Button>
            </div>
            <div class="col-xs-12 col-lg-6 btn-wrap">
              <Button background="#9BD458">
                <nuxt-Link to="/register" class="btn-link">
                  <fa icon="chevron-right" fixed-width />
                  ユーザー登録
                </nuxt-Link>
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
$pc: 1024px; // PC
$tab: 680px; // タブレット
$sp: 480px;  // スマホ

@mixin pc {
  @media (max-width: ($pc)) {
    @content;
  }
}
@mixin tab {
  @media (max-width: ($tab)) {
    @content;
  }
}
@mixin sp {
  @media (max-width: ($sp)) {
    @content;
  }
}

.index{
  overflow: hidden;
  .top-image {
    background-image: url(../assets/image/top.png);
    height: 0;
    padding-top: 61.5384615%;
    background-size: cover;
    position: relative;
    @include tab {
      padding-top: 500px;
      background-size: auto;
      background-position: center;
    }
    &__contents{
        position: absolute;
        top: 40%;
        width: 100%;
        color: white;
        display: flex;
        flex-direction: column;
      .logo {
        font-size: 5vw;
        @include tab {
          font-size: 32px;
        }
      }
      .text {
        font-size: 1.5vw;
        margin-bottom: 30px;
        @include tab {
          font-size: 16px;
        }
      }
      .btn-wrap {
        display: inline-block;
        width: 30%;
        max-width: 600px;
        min-width: 290px;
        padding: 20px 30px 0;
        .button {
          width: 100%;
        }
      }
    }
  }
  .circle {
    position: relative;
    top: -8vw;
    margin-bottom: -8vw;
    border-top-right-radius: 1000px 200px;
    border-top-left-radius: 1000px 200px;
    border-bottom-right-radius: 1000px 200px;
    border-bottom-left-radius: 1000px 200px;
    margin-left: -100px;
    margin-right: -100px;
    padding: 100px;
    background: #fff;
    text-align: center;
    z-index: 100;
    .intro {
      margin-bottom: 40px;
      &__service-name {
        font-size: 32px;
        margin-bottom: 32px;
        position: relative;
        display: inline-block;
        &:after {
          content: '';
          position: absolute;
          left: 50%;
          bottom: -5px;
          display: inline-block;
          width: 150px;
          height: 3px;
          -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
          background-color: #9BD458;
        }
      }
      &__service-text {
        max-width: 960px;
        margin: 0 auto;
        padding: 30px;
        position: relative;
        @include sp {
          text-align: left;
        }
        &:before, &:after {
          content: '';
          width: 50px;
          height: 50px;
          position: absolute;
        }
        &:before {
          border-left: solid 3px #639E56;
          border-top: solid 3px #639E56;
          top: 0;
          left: 0;
        }
        &:after {
          border-right: solid 3px #639E56;
          border-bottom: solid 3px #639E56;
          bottom: 0;
          right: 0;
        }
      }
    }
    .how-register {
      padding-top: 32px;
      &__title {
        font-size: 32px;
        margin-bottom: 32px;
        span {
          display: inline-block;
          margin: 0 32px;
        }
      }
      &__block {
        max-width: 300px;
        margin-bottom: 40px;
      }
      &__who {
        font-size: 24px;
        padding: 16px;
      }
      &__text {
        text-align: left;
        margin-bottom: 32px;
      }
      &__arrow {
        display: flex;
        align-items: center;
        flex-direction: column;
        @include sp {
          flex-direction: column-reverse;
        }
        .rotate {
          @include sp {
            transform: rotate(90deg);
          }
        }
      }
    }
  }
  .top-image2 {
    background-image: url(../assets/image/top2.png);
    height: 0;
    padding-top: 1000px;
    background-size: cover;
    position: relative;
    top: -8vw;
    margin-bottom: -8vw;
    @include tab {
      padding-top: 1000px;
    }
    .recommend {
      &__container {
        position: absolute;
        top: 300px;
        left: 50%;
        background: #fff;
        padding: 4vw;
        border-radius: 3px;
        @include pc {
          top: 160px;
          left: auto;
          right: 8px;
          width: 375px;
          @include sp {
            width: 95%;
          }
        }
      }
      &_title {
        text-align: center;
        margin-bottom: 40px;
      }
      &__text {
        margin-bottom: 48px;
      }
      .btn-wrap {
        padding: 8px;
      }
    }
  }
  .btn-link {
    display: inline-block;
    width: 100%;
  }
}
</style>
