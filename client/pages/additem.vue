<template>
  <div class="container">
    <h2 class="center-xs">
      商品出品登録
    </h2>
    <form @submit.prevent="addItem" action="/addItem" method="POST">
      <div class="form-group">
        <div
          @dragover.prevent="dragover"
          @drop.prevent="dropfile"
          @dragleave.prevent="dragleave"
          :class="{onArea:onArea}"
          class="drop-area"
        >
          <input @change="changefile" class="form-control" name="img" type="file">
          <ul v-for="file in item.files">
            <li>
              {{ file.name }}
            </li>
          </ul>
        </div>
      </div>
      <div class="form-group">
        <label>商品名</label>
      </div>
      <div class="form-group">
        <input v-model="item.name" class="form-control" name="name" type="text">
      </div>
      <div class="form-group">
        <label>商品説明</label>
      </div>
      <div class="form-group">
        <textarea v-model="item.description" class="form-control" name="商品説明" cols="30" rows="10" />
      </div>
      <div class="form-group">
        <label>価格</label>
      </div>
      <div class="form-group">
        <input v-model="item.price" class="form-control" name="price" type="int">
      </div>
      <div class="form-group">
        <label>商品説明</label>
      </div>
      <div class="form-group">
        <textarea v-model="item.recipe" class="form-control" name="レシピ" cols="30" rows="10" />
      </div>
      <input type="submit" value="登録">
    </form>
  </div>
</template>

<script>
// import axios from 'axios'
export default {
  data: () => {
    return {
      item: {
        files: [],
        name: '',
        description: '',
        price: '',
        recipe: ''
      },
      onArea: false
    }
  },
  methods: {
    dragover () {
      console.log('dragover')
      this.onArea = true
    },
    dropfile (e) {
      this.changefile(e)
    },
    changefile (e) {
      console.log(e)
      const files = e.target.files || e.dataTransfer.files
      console.log(files[0])
      this.item.files.push(files[0])
      this.onArea = false
    },
    dragleave () {
      this.onArea = false
    }
  }
}
</script>
<style lang="scss" scoped>
  .drop-area{
    width: 300px;
    height: 300px;
    padding: 10px;
    text-align: center;
    border: 1px dashed #c6c6c6;
    background-color: #f9f9f9;
  }
  .onArea{
    border: 1px dashed #393;
    background-color: rgb(66, 233, 0);
  }
</style>
