<template>
  <div>
    <SideMenu :menu="menu" />
    <div class="section main-content">
      <div class="container">
        <h2 class="center-xs">
          商品出品登録
        </h2>
        <form @submit.prevent="addItem" action="/addItem" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <div
                  @dragover.prevent="dragOver"
                  @drop.prevent="dropFile"
                  @dragleave.prevent="dragLeave"
                  :class="{onArea:onArea}"
                  class="drop-area"
                >
                  <input @change="changeFile" class="form-control" name="img" type="file">
                </div>
                <ul v-for="image in imageData">
                  <li>
                    <div>
                      <img :src="image" class="preview">
                    </div>
                  </li>
                </ul>
              </div>
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
                <label>商品説明</label>
              </div>
              <div class="form-group">
                <textarea v-model="item.recipe" class="form-control" name="レシピ" cols="30" rows="10" />
              </div>
              <input type="submit" value="登録">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
// import axios from 'axios'
import SideMenu from '~/components/global/SideMenu'

export default {
  layout: 'default',
  // middleware: 'auth',
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
      console.log('dragover')
      this.onArea = true
    },
    dropFile (e) {
      console.log('drop')
      this.changeFile(e)
    },
    changeFile (e) {
      console.log(e)
      const files = e.target.files || e.dataTransfer.files
      console.log({ files })
      this.item.files.push(files[0])
      this.onArea = false
      this.imagePreview(e)
    },
    dragLeave () {
      this.onArea = false
    },
    imagePreview (e) {
      const reader = new FileReader()
      console.log('1')
      reader.onload = (e) => {
        console.log('2')
        const data = e.target.result || e.dataTransfer.result
        console.log({ data })
        this.imageData.push(data)
      }
      const ccc = e.target.files || e.dataTransfer.files
      const aaa = ccc[0]
      console.log({ aaa })
      reader.readAsDataURL(aaa)
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
  .main-content {
    padding-left: $sidemenu_width;
  }
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
  .preview{
    max-width: 200px;
    max-height: 200px;
    margin: 10px;
    background-color: #ddd;
  }
</style>
