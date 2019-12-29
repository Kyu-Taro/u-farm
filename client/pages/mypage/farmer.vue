<template>
  <div>
    <SideMenu :menu="menu" />
    <div class="section main-content">
      <div class="container">
        <div>
          <h1 class="h1-text">
            出品した商品
          </h1>
        </div>
        <div class="row">
          <div
            v-for="(item, idx) in items"
            :key="idx"
            class="item col-xs-6 col-sm-4"
          >
            <ItemCard v-bind="item" />
          </div>
          <div class="row center-xs">
            <infinite-loading @infinite="infiniteHandler" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import InfiniteLoading from 'vue-infinite-loading'
import ItemCard from '~/components/global/ItemCard'
import SideMenu from '~/components/global/SideMenu'

const DUMMY_ITEM = {
  itemName: 'itemName',
  price: 1000,
  productionArea: '東京',
  itemImage:
    'https://4.imimg.com/data4/UB/WV/MY-32247465/fresh-red-apple-500x500.jpg',
  showEditButton: true
}

export default {
  layout: 'default',
  middleware: 'auth',
  components: {
    ItemCard,
    InfiniteLoading,
    SideMenu
  },
  validate ({ params }) {
    return true
  },
  data () {
    return {
      items: [],
      currentPage: 1,
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
              href: '/mypage/farmer',
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
  },
  computed: {
    userName () {
      return this.$route.params.id
    }
  },
  mounted () {
    this.fetchNext()
  },
  methods: {
    infiniteHandler ($state) {
      try {
        this.fetchNext()
      } catch (error) {
        console.error(error)
      } finally {
        $state.loaded()
      }
    },
    fetchNext () {
      console.log('getch next')
      try {
        const params = {
          page: this.currentPage
        }
        this.fetchItems(params)
        this.currentPage += 1
      } catch (error) {
        throw (error)
      }
    },
    fetchItems (params) {
      // サーバーから取得
      console.log('fetch item', params)
      this.items = this.items.concat(
        Array.from(new Array(12), (v, i) => DUMMY_ITEM)
      )
      return true
    }
  },
  head () {
    return {
      title: `${this.userName}の出品商品一覧`
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
