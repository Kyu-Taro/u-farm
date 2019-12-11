<template>
  <div class="container">
    <div class="row">
      <div
        v-for="(item, idx) in items"
        :key="idx"
        class="col-xs-6 col-sm-4"
      >
        <ItemCard v-bind="item" />
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
      items: [DUMMY_ITEM]
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
        Array.from(new Array(10)).map((v, i) => DUMMY_ITEM)
      )
      return true
    }
  },
  head () {
    return {
      title: this.userName
    }
  }
}
</script>

<style lang="scss" scoped>
</style>
