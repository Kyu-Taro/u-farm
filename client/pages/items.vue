<template>
  <div class="items">
    <div class="header_form">
      <fa icon="bars" class="menu_bars"></fa>
      <input type="text" name="word" v-model="word">
      <fa icon="search" calss="search_icon" @click="infiniteHandler"></fa>
    </div>
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
      page: 1,
      word: ''
    }
  },
  created () {
    this.firstHandler()
  },
  methods: {
    infiniteHandler ($state) {
      axios.get('/api/items', {
        params: {
          page: this.page,
          per_page: 1,
          word: this.word
        }
      }).then((res) => {
        setTimeout(() => {
          console.log(res)
          if (this.page < res.data.last_page) {
            this.page += 1
            this.items.push(...res.data.data)
            $state.loaded()
          } else {
            this.items.push(...res.data.data)
            $state.complete()
          }
        }, 1500)
      })
    },
    firstHandler ($state) {
      axios('/api/items', {
        params: {
          page: this.page,
          per_page: 1
        }
      }).then((res) => {
        console.log(res)
        if (this.page <= res.data.last_page) {
          this.page += 1
          this.items.push(...res.data.data)
          $state.loaded()
        } else {
          $state.complete()
        }
      })
    }
  }
}
</script>

<style>
.items {
  display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 90%;
    max-width: 100%;
    margin: auto;
    font-size: 62.5%;
}
.header_form {
  width: 100%;
  height: 65px
}
.search_icon {
  cursor: pointer;
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
