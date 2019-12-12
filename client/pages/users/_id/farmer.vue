<template>
  <div class="section">
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
      </div>
    </div>
  </div>
</template>

<script>
import ItemCard from '~/components/global/ItemCard'

const DUMMY_ITEM = {
  itemName: 'itemName',
  price: 1000,
  productionArea: '東京',
  itemImage:
    'https://4.imimg.com/data4/UB/WV/MY-32247465/fresh-red-apple-500x500.jpg',
  canEdit: true
}

export default {
  layout: 'default',
  components: {
    ItemCard
  },
  validate ({ params }) {
    return true
  },
  data () {
    return {
      items: []
    }
  },
  computed: {
    userName () {
      return this.$route.params.id
    }
  },
  mounted () {
    this.fetchItems({})
  },
  methods: {
    fetchItems (query) {
      // サーバーから取得
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
}

.h1-text {
  font-size: 1.5rem;
  border-left: 3px solid $primary-color;
  padding: 0 15px;
  margin: 15px 0;
  color: $h1-text-color;
}
</style>
