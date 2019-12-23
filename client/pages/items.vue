<template>
    <div>
        <div v-for="item in items" :key="item.id">
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
</style>
