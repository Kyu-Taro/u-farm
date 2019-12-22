<template>
  <div class="index">
    <section>
      <div class="row center-xs">
        <div class="col-xs-12">
          <h1>
            U-FARM
          </h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, quaerat.
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
          <Button>
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores inventore neque sint laudantium culpa odio explicabo illum sit incidunt. Dolores consequatur delectus culpa tempore autem aliquid odio explicabo rem consequuntur, minima est fugit saepe provident ipsa maiores numquam! Et autem suscipit temporibus excepturi itaque tempore doloribus consequuntur pariatur maxime alias.
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
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores non in voluptate, fugit porro, sed at eveniet animi amet ex dolor sapiente. Placeat sapiente numquam, totam, vero aut cupiditate incidunt at molestiae harum sequi eveniet dolor nihil iusto odio explicabo soluta modi. Ea exercitationem quasi omnis aliquam quibusdam repellendus magni?
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
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas nemo vitae suscipit odit quo, quod ex inventore officiis. Perspiciatis dolores in maiores voluptatibus exercitationem placeat enim aspernatur voluptates nesciunt. Impedit assumenda qui quia minima voluptas laboriosam velit voluptates debitis nisi provident asperiores recusandae tempore numquam hic, nesciunt illum, eveniet beatae?
          </p>
          <Button>
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
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet quia accusantium quis enim accusamus laborum ut, fugiat molestias repellat atque dolores placeat suscipit aliquam. Eligendi qui quod repellendus reiciendis aperiam molestiae, quam maiores corporis recusandae ipsam tempora in! Corporis quo officia soluta recusandae quam quia voluptates optio totam laudantium a vel, fugiat veritatis vitae maiores tempore fugit atque sed. Asperiores aliquam quae consequatur itaque placeat. Officia minima aut beatae omnis molestiae est libero, nisi nobis tempora consequatur nostrum dolorem atque optio placeat velit corporis quos amet! Illum exercitationem neque placeat perferendis eum, accusantium, sunt beatae cumque error ea, labore expedita!
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
              <Button>
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
