<template>
    <div class="items">
        <div v-for="item in items" :key="item.id" class="item">
            <img :src="item.img">
            <p>{{ item.name }}</p>
            <p>{{ item.price }}</p>
            <p>{{ item.area }}</p>
        </div>
        <infinite-loading @infinite="infiniteHandler"></infinite-loading>
    </div>
</template>

<script>
import axios from 'axios'
import infiniteLoading from 'vue-infinite-loading'

export default {
  components: {
    infiniteLoading
  },
  data () {
    return {
      items: [],
      page: 1
    }
  },
  mounted () {
    this.fetchItems({})
  },
  methods: {
    infiniteHandler ($state) {
      try {
        this.fetchNext($state)
      } catch (error) {
        console.error(error)
      } finally {
        $state.loaded()
      }
    },
    fetchNext ($state) {
      try {
        const params = {
          page: this.page,
          per_page: 1
        }
        this.fetchItems(params, $state)
        this.page += 1
      } catch (error) {
        throw (error)
      }
    },
    fetchItems (params, $state) {
      // サーバーから取得
      axios.get('/api/items', params).then((res) => {
        console.log(res)
        setTimeout(() => {
          if (this.page < res.data.data.length) {
            this.items.push(res.data.data)
            $state.loaded()
          } else {
            $state.complete()
          }
        }, 1500)
      })
    }
  }
  // created () {
  //   axios.get('/api/items').then((res) => {
  //     this.items = res.data
  //   })
  // }
}
</script>

<style>
.items {
  display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 90%;
    max-width: 75%;
    margin: auto;
}
.item {
  border: solid 1px black;
  padding: 10px;
  margin-left: 15px;
  margin-bottom: 15px;
  width: 300px;
  height: 300px;
}
img {
  width: 280px;
}
</style>
