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
          <form @submit.prevent="submit">
            <div class="flex-box">
              <div class="column">
                <div
                  @dragover.prevent="dragOver"
                  @drop.prevent="dropFile"
                  @dragleave.prevent="dragLeave"
                  :class="{onArea:onArea}"
                  class="drop-area"
                >
                  <span class="square-content" />
                  <img :src="imageData[0]" v-if="imageData" class="main-preview" alt="">
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
              <div class="column">
                <div class="form-text-area">
                  <div class="form-item">
                    <div class="form-label">
                      <label>商品名</label>
                    </div>
                    <input v-model="item.name" class="form-control" name="name" type="text">
                  </div>
                  <div class="form-item">
                    <div class="form-label">
                      <label>商品説明</label>
                    </div>
                    <textarea v-model="item.description" class="form-control" name="商品説明" cols="30" rows="10" />
                  </div>
                  <div class="form-harf-area">
                    <div class="form-item-harf">
                      <div class="form-label">
                        <label>価格</label>
                      </div>
                      <input v-model="item.price" class="form-control" name="price" type="int">
                    </div>
                    <div class="form-item-harf">
                      <div class="form-label">
                        <label>発送までの目安</label>
                      </div>
                      <select v-model="item.sipping_duration" class="form-control" name="sipping_duration" type="text">
                        <option disabled value="">
                          選択してください
                        </option>
                        <option>1〜2日で発送</option>
                        <option>2〜3日で発送</option>
                        <option>4〜7日で発送</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-item">
                    <div class="form-label">
                      <label>オススメの食べ方・レシピなど</label>
                    </div>
                    <textarea v-model="item.recipe" class="form-control" name="レシピ" cols="30" rows="10" />
                  </div>
                  <input :value="user_id" type="hidden">
                </div>
              </div>
            </div>
            <div class="center-xs my-3">
              <Button type="submit">
                出品する
              </Button>
              <p>{{ item }}</p>
              <p>{{ user_id }}</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import SideMenu from '~/components/global/SideMenu'
import Button from '~/components/global/Button.vue'

export default {
  layout: 'default',
  middleware: 'auth',
  components: {
    SideMenu,
    Button
  },
  data: () => {
    return {
      item: {
        files: [],
        name: '',
        description: '',
        price: '',
        sipping_duration: '',
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
  computed: {
    user_id () {
      return this.$store.getters['auth/user_id']
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
      this.item.files.push(files[0].name)
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
    },
    async submit () {
      try {
        const formData = new FormData()
        console.log(formData)
        formData.append('item', this.item)
        const userId = this.user_id
        console.log(userId)
        formData.append('id', userId)
        const response = await axios.post('/api/items', formData)
        console.log(formData)
        console.log(response)
        console.log('商品を登録しました')
      } catch (e) {
        console.log('エラーが発生しました')
      }
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
  .container{
    margin: 0;
    width: auto;
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
  .form-item{
    width: 100%;
  }
  .flex-box{
    display: flex;
    flex-wrap: wrap;
  }
  .column{
    width: 50%;
    min-width: 300px;
  }
  .form-text-area{
    padding: 0 5%;
  }
  .form-harf-area{
    display: flex;
    justify-content: space-between;
  }
  .form-item-harf{
    width: 48%;
  }
  .form-control{
    width: 100%;
    border-radius: 5px;
  }
  .drop-area{
    width: 100%;
    min-width: 200px;
    min-height: 200px;
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
  button {
  --button-background: #639E56; //事故防止のデフォルト値
  font-size: 1rem;
  color: #fff;
  padding: 10px 20px;
  border-radius: 25px;
  background: var(--button-background);
}
</style>
