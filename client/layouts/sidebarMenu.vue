<template>
  <div>
    <SidebarMenu :menu="menu" :hideToggle="true" theme="white-theme">
      <div slot="header" class="menu-header">
        <hr class="menu-header__rule">
        <div class="menu-header__body">
          <div class="menu-header__left">
            <div class="menu-header__user-icon">
              <img src="~/assets/images/test_user_icon.jpg">
            </div>
          </div>
          <div class="menu-header__right">
            <div class="menu-header__username">
              Username
            </div>
            <div class="menu-header__button">
              <Button>
                プロフィールを変更
              </Button>
            </div>
          </div>
        </div>
        <hr class="menu-header__rule">
      </div>
      <span slot="dropdown-icon">
        <fa icon="chevron-right" fixed-width />
      </span>
    </SidebarMenu>
    <div class="main-content">
      <Header />
      <nuxt />
      <Footer />
    </div>
  </div>
</template>

<script>
import { SidebarMenu } from 'vue-sidebar-menu'
import Header from '~/components/global/Header.vue'
import Footer from '~/components/global/Footer.vue'
import Button from '~/components/global/Button.vue'

export default {
  components: {
    Header,
    Footer,
    SidebarMenu,
    Button
  },
  data () {
    return {
      menu: [
        {
          title: '出品した商品',
          icon: {
            element: 'fa',
            attributes: {
              icon: 'pencil-alt'
            }
          },
          child: [
            {
              href: '/',
              title: '商品一覧'
            },
            {
              href: '/',
              title: '商品の編集'
            }
          ]
        },
        {
          href: '/',
          title: '商品投稿',
          icon: {
            element: 'fa',
            attributes: {
              icon: 'pencil-alt'
            }
          }
        },
        {
          href: '/charts',
          title: '商品購入ページへ',
          icon: {
            element: 'fa',
            attributes: {
              icon: 'pencil-alt'
            }
          }
        }
      ]
    }
  }
}
</script>

<style lang="scss">

// custom vue-slidbar-menu variables
$primary-color: $primary_color;
$base-bg: $secondary_color_light;
$icon-bg: transparent !important;

$icon_size: 60px;
$padding_header: 30px;
$margin_body: 30px 0;
$hr_color: #c4c4c4;

@import "vue-sidebar-menu/src/scss/vue-sidebar-menu.scss";
.main-content {
  padding-left: 350px;
}
.v-sidebar-menu {
  .menu-header {
    padding: $padding_header;
    &__body {
    display: flex;
    align-items: center;
    margin: $margin_body;
    }
    &__left {
      margin-right: 30px;
      img {
        width: $icon_size;
        height: $icon_size;
      }
    }
    &__right {
      flex: 1;
    }
    &__username {
      margin-bottom: 15px;
    }
    &__button {

    }
    &__rule {
      background-color: $hr_color;
      height: 1px;
      border: none;
      margin: 15px 0;
    }
  }
}
</style>
