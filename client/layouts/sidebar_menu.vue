<template>
  <div>
    <SidebarMenu :menu="menu" theme="white-theme" />
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

export default {
  components: {
    Header,
    Footer,
    SidebarMenu
  },
  data () {
    return {
      menu: [
        {
          header: true,
          title: '出品した商品',
          hiddenOnCollapse: true
        },
        {
          href: '/',
          title: '商品投稿',
          icon: 'fa fa-user',
          child: [
            {
              href: '/charts/sublink',
              title: 'Sub Link'
            }
          ]
        },
        {
          href: '/charts',
          title: '商品購入ページへ',
          icon: 'fa fa-chart-area'
        }
      ]
    }
  }
}
</script>

<style lang="scss">
@import 'vue-sidebar-menu/dist/vue-sidebar-menu.css';
html {
  font-family: 'Source Sans Pro', -apple-system, BlinkMacSystemFont, 'Segoe UI',
    Roboto, 'Helvetica Neue', Arial, sans-serif;
  font-size: 16px;
  word-spacing: 1px;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

.main-content {
  padding-left: 350px;
}

*,
*:before,
*:after {
  box-sizing: border-box;
  margin: 0;
}

.button--green {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #3b8070;
  color: #3b8070;
  text-decoration: none;
  padding: 10px 30px;
}

.button--green:hover {
  color: #fff;
  background-color: #3b8070;
}

.button--grey {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #35495e;
  color: #35495e;
  text-decoration: none;
  padding: 10px 30px;
  margin-left: 15px;
}

.button--grey:hover {
  color: #fff;
  background-color: #35495e;
}
</style>
