<template>
    <div class="items">
        <div v-for="item in items" :key="item.id" class="item">
            <img :src="item.img">
            <p>{{ item.name }}</p>
            <p>{{ item.price }}</p>
            <p>{{ item.area }}</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
  data () {
    return {
      items: []
    }
  },
  created () {
    axios.get('/api/items').then((res) => {
      this.items = res.data
    })
  }
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
