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
      currentPage: 1
    }
  },
  methods: {
    infiniteHandler ($state) {
      console.log('error1')
      try {
        this.fetchNext()
      } catch (error) {
        console.log('エラー')
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
      axios.get('/api/items').then((res) => {
        this.items = res.data
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
