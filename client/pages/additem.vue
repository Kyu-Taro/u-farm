<template>
  <div class="container">
    <h2 class="center-xs">
      商品出品登録
    </h2>
    <form @submit.prevent="addItem" action="/addItem" method="POST">
      <div class="form-group">
        <label>商品名</label>
        <input v-model="item.name" name="name" type="text">
      </div>
      <div class="form-group">
        <label>商品説明</label>
        <textarea v-model="item.description" name="商品説明" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">
        <label>価格</label>
        <input v-model="item.price" name="price" type="int">
      </div>
      <div class="form-group">
        <label>商品説明</label>
        <textarea v-model="item.recipe" name="レシピ" cols="30" rows="10"></textarea>
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
        name: '',
        description: '',
        price: '',
        recipe: ''
      }
    }
  }
}
</script>
