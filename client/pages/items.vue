<template>
  <div class="items">
    <div class="header_form">
      <fa icon="bars" class="menu_bars" @click="area_flg = !area_flg" v-if="!area_flg"></fa>
      <fa icon="times" v-if="area_flg" @click="area_flg = !area_flg"></fa>
      <span>産地から探す</span>
      <input type="text" name="word" v-model="word">
      <fa icon="search" calss="search_icon" @click="serch"></fa>
      <div v-if="area_flg" class="areas-container">
        <select v-model="area">
          <option  v-for="area in areas" :key="area">{{ area }}</option>
        </select>
      </div>
    </div>
    <div v-for="item in items" :key="item.id" class="item">
      <img :src="item.img">
      <p>{{ item.name }}</p>
      <p>{{ item.price }}</p>
      <p>{{ item.area }}</p>
    </div>
    <infinite-loading ref="infiniteLoading" @infinite="infiniteHandler"></infinite-loading>
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
      per: 1,
      word: '',
      area_flg: false,
      areas: [
        '北海道',
        '青森県',
        '岩手県',
        '宮城県',
        '秋田県',
        '山形県',
        '福島県',
        '茨城県',
        '栃木県',
        '群馬県',
        '埼玉県',
        '千葉県',
        '東京都',
        '神奈川県',
        '新潟県',
        '富山県',
        '石川県',
        '福井県',
        '山梨県',
        '長野県',
        '岐阜県',
        '静岡県',
        '愛知県',
        '三重県',
        '滋賀県',
        '京都府',
        '大阪府',
        '兵庫県',
        '奈良県',
        '和歌山県',
        '鳥取県',
        '島根県',
        '岡山県',
        '広島県',
        '山口県',
        '徳島県',
        '香川県',
        '愛媛県',
        '高知県',
        '福岡県',
        '佐賀県',
        '長崎県',
        '熊本県',
        '大分県',
        '宮崎県',
        '鹿児島県',
        '沖縄県'
      ],
      area: ''
    }
  },
  methods: {
    infiniteHandler ($state) {
      console.log($state)
      axios.get('/api/items', {
        params: {
          page: this.page,
          per_page: 1,
          word: this.word,
          area: this.area
        }
      }).then((res) => {
        setTimeout(() => {
          if (this.page < res.data.last_page) {
            this.page += 1
            $state.loaded()
          } else {
            $state.complete()
          }
          this.items.push(...res.data.data)
        }, 1500)
      })
    },
    serch () {
      console.log('発火')
      this.$refs.infiniteLoading.stateChanger.reset()
      this.page = 1
      axios.get('/api/items', {
        params: {
          page: this.page,
          per_page: 1,
          word: this.word,
          area: this.area
        }
      }).then((res) => {
        console.log(res)
        this.items = res.data.data
        this.infiniteHandler()
      })
    }
  },
  head () {
    return {
      title: '商品一覧'
    }
  }
}
</script>

<style scoped>
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
  z-index: 1
}
.area {
  cursor: pointer;
}
</style>
