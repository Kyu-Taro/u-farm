<template>
  <div>
    <SideMenu :menu="menu" />
    <div class="section">
      <div class="container">
        <div class="page-header">
          <h1 class="page-title">
            商品出品登録
          </h1>
        </div>
        <div class="form-area">
          <form @submit.prevent="addItem" action="/addItem" method="POST">
            <div class="row">
              <div class="col-sm-6">
                <div
                  @dragover.prevent="dragOver"
                  @drop.prevent="dropFile"
                  @dragleave.prevent="dragLeave"
                  :class="{onArea:onArea}"
                  class="drop-area"
                >
                  <span class="square-content"></span>
                  <img class="main-preview" :src="imageData[0]" v-if="imageData" alt="">
                  <label>
                    <div class="addFileButton">＋</div>
                    <input id="fileInput" @change="changeFile" class="form-control" name="img" type="file">
                  </label>
                  </div>
                    <ul class="preview-area">
                      <li v-for="image in imageData">
                        <img :src="image" class="preview">
                      </li>
                    </ul>
              </div>
              <div class="col-sm-6">
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
                  <label>発送までの目安</label>
                </div>
                <div class="form-group">
                  <input v-model="item.price" class="form-control" name="price" type="int">
                </div>
                <div class="form-group">
                  <label>オススメの食べ方・レシピなど</label>
                </div>
                <div class="form-group">
                  <textarea v-model="item.recipe" class="form-control" name="レシピ" cols="30" rows="10" />
                </div>
              </div>
            </div>
            <div class="center-xs">
              <input type="submit" value="登録">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import axios from 'axios'
import SideMenu from '~/components/global/SideMenu'

export default {
  layout: 'default',
  middleware: 'auth',
  components: {
    SideMenu
  },
  data: () => {
    return {
      item: {
        files: [],
        name: '',
        description: '',
        price: '',
        recipe: ''
      },
      onArea: false,
      imageData: [],
      menu: [
        {
          title: '出品した商品',
          icon: {
            element: 'fa',
            attributes: {
              icon: 'pencil-alt'
            }
          },
          child: [
            {
              href: '/mypage/farmer',
              title: '商品一覧'
            },
            {
              href: '/',
              title: '商品の編集'
            }
          ]
        },
        {
          href: '/',
          title: '商品投稿',
          icon: {
            element: 'fa',
            attributes: {
              icon: 'pencil-alt'
            }
          }
        },
        {
          href: '/charts',
          title: '商品購入ページへ',
          icon: {
            element: 'fa',
            attributes: {
              icon: 'pencil-alt'
            }
          }
        }
      ]
    }
  },
  methods: {
    dragOver () {
      this.onArea = true
    },
    dropFile (e) {
      console.log('drop')
      this.changeFile(e)
    },
    changeFile (e) {
      const files = e.target.files || e.dataTransfer.files
      this.item.files.push(files[0])
      this.onArea = false
      this.imagePreview(e)
    },
    dragLeave () {
      this.onArea = false
    },
    imagePreview (e) {
      const reader = new FileReader()
      reader.onload = (e) => {
        const data = e.target.result || e.dataTransfer.result
        console.log({ data })
        this.imageData.push(data)
      }
      const filedata = e.target.files || e.dataTransfer.files
      console.log({ filedata })
      reader.readAsDataURL(filedata[0])
    }
  },
  head () {
    return {
      title: '出品登録'
    }
  }
}
</script>
<style lang="scss" scoped>
  $main-content-width: 800px;
  .section {
    background: $muted-background;
    padding: 24px 0;
    margin-left: $sidemenu_width;
  }
  .page-header{
    max-width: $main-content-width;
    margin: 0 auto;
  }
  .page-title{
    border-left: green solid 5px;
    padding-left: 20px;
  }
  .form-area{
    max-width: $main-content-width;
    background-color: #fff;
    margin: 0 auto;
  }
  .form-group{
    margin-left: 20px;
  }
  .form-control{
    width: 200px;
  }
  .drop-area{
    width: 100%;
    min-width: 200px;
    min-height: 200px;
    height: initial;
    padding: 10px;
    text-align: center;
    border: 1px dashed #c6c6c6;
    background-color: #f9f9f9;
    position: relative;
    /* display: flex;
    justify-content: center;
    align-items: center; */
  }
  //ドロップエリアを正方形に保つため
  .square-content{
    display: block;
    height: 0;
    padding-bottom: 100%;
  }
  .onArea{
    border: 1px dashed #393;
    background-color: rgb(66, 233, 0);
  }
  #fileInput{
    display: none;
  }
  .main-preview{
    width: 100%;
    height: 100%;
    object-fit: contain;
    overflow: hidden;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
  }
  .addFileButton{
    width: 80px;
    height: 80px;
    font-size: 80px;
    border-radius: 40px;
    line-height: 80px;
    background-color: rgba(100,100,100,0.8);
    color: rgba(241, 241, 241, 0.8);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
    z-index: 2;
  }
  .preview-area{
    width: 100%;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
  .preview{
    max-width: 150px;
    max-height: 150px;
    margin: 10px;
    background-color: #ddd;
  }
</style>
