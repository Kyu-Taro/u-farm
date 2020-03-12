<template>
  <div class="card">
    <div class="card__body">
      <img :src="img" class="card__body__item-image">
      <div @click="edit_item" class="card__body__edit-button">
        <fa class="card__body__edit-button__icon" icon="pencil-alt" />
      </div>
      <div class="card__body__price">
        {{ price | moneyDelimiter }}
      </div>
    </div>
    <div class="card__footer">
      <div>
        <span>
          【{{ area }}】
        </span>
        <span>
          産地直送
        </span>
      </div>
      <div>
        {{ name }}
        {{ id }}
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  props: {
    name: {
      type: String,
      required: true
    },
    price: {
      type: Number,
      required: true
    },
    area: {
      type: String,
      required: true
    },
    img: {
      type: String,
      required: true
    },
    id: {
      type: Number,
      required: true
    }
  },
  methods: {
    async edit_item () {
      console.log('発火')
      await axios.get('/api/items/' + this.id, {
        params: {
          id: this.id
        }
      }).then((res) => {
        console.log(res.data)
        this.$store.commit('item/setItem', res.data)
      })
      this.$router.push('/mypage/itemEdit')
    }
  }
}
</script>

<style lang="scss" scoped>

$card-background: white;

$price-background: rgba(0, 0, 0, 0.5);
$price-color: white;
$price-height: 40px;
$price-width: 120px;
$price-padding: 10px;
$price-font-size: 1.2rem;
$price-bottom: 24px;

$edit-button-background: #46B5D1;
$edit-button-color: white;
$edit-button-size: 48px;
$edit-button-font-size: 24px;
$edit-button-top: 10px;
$edit-button-right: 10px;

$card-footer-padding: 10px 10px;

.card {
  background: $card-background;
  box-shadow: $global-small-box-shadow;
  &__body {
    position: relative;
    width: 100%;
    padding-top: 80%;
    overflow: hidden;
    &__item-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    &__price {
      position: absolute;
      display: inline-block;
      left: 0;
      bottom: $price-bottom;
      width: $price-width;
      height: $price-height;
      background: $price-background;
      color: $price-color;
      border-radius: 0 #{$price-height / 2} #{$price-height / 2} 0;
      line-height: $price-height;
      padding-left: $price-padding;
      font-size: $price-font-size;
    }
    &__edit-button {
      position: absolute;
      right: $edit-button-right;
      top: $edit-button-top;
      width: $edit-button-size;
      height: $edit-button-size;
      border-radius: 50%;
      background: $edit-button-background;
      cursor: pointer;
      &__icon {
        position: absolute;
        margin-left: #{-$edit-button-font-size / 2};
        margin-top: #{-$edit-button-font-size / 2};
        top: 50%;
        left: 50%;
        color: $edit-button-color;
        font-size: $edit-button-font-size;
      }
    }
  }
  &__footer {
    padding: $card-footer-padding;
  }
}
</style>
