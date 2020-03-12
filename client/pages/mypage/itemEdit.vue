<template>
  <div>
    <SideMenu :menu="menu" />
    <div class="section main-content">
      <div class="container">
        <div>
          <h1 class="h1-text">
            商品編集
          </h1>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import SideMenu from '~/components/global/SideMenu'

export default {
  layout: 'default',
  middleware: 'auth',
  components: {
    SideMenu
  },
  data () {
    return {
      currentPage: 1,
      menu: [
        {
          title: '出品した商品',
          href: '/mypage/farmer',
          icon: {
            element: 'fa',
            attributes: {
              icon: 'pencil-alt'
            }
          }
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
  },
  compouted: {
    item () {
      return this.$store.getters['item/item']
    }
  },
  head () {
    return {
      title: `出品商品編集`
    }
  }
}
</script>

<style lang="scss" scoped>

$h1-text-color: gray;

.section {
  background: $muted-background;
  padding: 24px 0;
}
.item {
  margin-bottom: 24px;
  padding: 0 16px;
}

.h1-text {
  font-size: 1.5rem;
  border-left: 3px solid $primary-color;
  padding: 0 15px;
  margin: 15px 0;
  color: $h1-text-color;
}
.main-content {
  padding-left: $sidemenu_width;
}
</style>
